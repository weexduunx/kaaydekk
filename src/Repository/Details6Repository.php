<?php

namespace App\Repository;

use App\Entity\Details6;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Details6|null find($id, $lockMode = null, $lockVersion = null)
 * @method Details6|null findOneBy(array $criteria, array $orderBy = null)
 * @method Details6[]    findAll()
 * @method Details6[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Details6Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Details6::class);
    }

    // /**
    //  * @return Details6[] Returns an array of Details6 objects
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
    public function findOneBySomeField($value): ?Details6
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
