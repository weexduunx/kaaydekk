<?php

namespace App\Repository;

use App\Entity\Details2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Details2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Details2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Details2[]    findAll()
 * @method Details2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Details2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Details2::class);
    }

    // /**
    //  * @return Details2[] Returns an array of Details2 objects
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
    public function findOneBySomeField($value): ?Details2
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
