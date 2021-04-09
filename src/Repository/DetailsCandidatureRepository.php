<?php

namespace App\Repository;

use App\Entity\DetailsCandidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailsCandidature|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailsCandidature|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailsCandidature[]    findAll()
 * @method DetailsCandidature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailsCandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailsCandidature::class);
    }

    // /**
    //  * @return DetailsCandidature[] Returns an array of DetailsCandidature objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DetailsCandidature
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
