<?php

namespace App\Listener;

use App\Entity\Bien;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class ImageCacheSubscriber implements EventSubscriber{

    /**
     * @var \Liip\ImagineBundle\Imagine\Cache\CacheManager
     */
    private CacheManager $cacheManager;
    /**
     * @var \Vich\UploaderBundle\Templating\Helper\UploaderHelper
     */
    private UploaderHelper $uploaderHelper;

    public function __construct(CacheManager  $cacheManager, UploaderHelper $uploaderHelper)
    {

        $this->cacheManager = $cacheManager;
        $this->uploaderHelper = $uploaderHelper;
    }

    /**
     * @return string[]
     */
    public function getSubscribedEvents()
    {
        return [
            'preRemove',
            'preUpdate'
        ];
    }

    public function preRemove(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Bien){
            return;
        }
        $this->cacheManager->remove($this->uploaderHelper->asset($entity,'thumbnailFile'));

    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();
        if (!$entity instanceof Bien){
            return;
        }
        if ($entity->getThumbnailFile() instanceof UploadedFile){
            $this->cacheManager->remove($this->uploaderHelper->asset($entity,'thumbnailFile'));
        }
    }
}