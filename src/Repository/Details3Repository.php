<?php

namespace App\Repository;

use App\Entity\Details3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Details3|null find($id, $lockMode = null, $lockVersion = null)
 * @method Details3|null findOneBy(array $criteria, array $orderBy = null)
 * @method Details3[]    findAll()
 * @method Details3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Details3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Details3::class);
    }

    // /**
    //  * @return Details3[] Returns an array of Details3 objects
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
    public function findOneBySomeField($value): ?Details3
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
