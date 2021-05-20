<?php

namespace App\Repository;

use App\Entity\Details7;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Details7|null find($id, $lockMode = null, $lockVersion = null)
 * @method Details7|null findOneBy(array $criteria, array $orderBy = null)
 * @method Details7[]    findAll()
 * @method Details7[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Details7Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Details7::class);
    }

    // /**
    //  * @return Details7[] Returns an array of Details7 objects
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
    public function findOneBySomeField($value): ?Details7
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
