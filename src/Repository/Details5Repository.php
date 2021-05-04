<?php

namespace App\Repository;

use App\Entity\Details5;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Details5|null find($id, $lockMode = null, $lockVersion = null)
 * @method Details5|null findOneBy(array $criteria, array $orderBy = null)
 * @method Details5[]    findAll()
 * @method Details5[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Details5Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Details5::class);
    }

    // /**
    //  * @return Details5[] Returns an array of Details5 objects
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
    public function findOneBySomeField($value): ?Details5
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
