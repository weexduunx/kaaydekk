<?php

namespace App\Repository;

use App\Entity\Details4;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Details4|null find($id, $lockMode = null, $lockVersion = null)
 * @method Details4|null findOneBy(array $criteria, array $orderBy = null)
 * @method Details4[]    findAll()
 * @method Details4[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Details4Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Details4::class);
    }

    // /**
    //  * @return Details4[] Returns an array of Details4 objects
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
    public function findOneBySomeField($value): ?Details4
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
