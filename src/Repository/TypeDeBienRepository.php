<?php

namespace App\Repository;

use App\Entity\TypeDeBien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeDeBien|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDeBien|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDeBien[]    findAll()
 * @method TypeDeBien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDeBienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDeBien::class);
    }

    public function calculGroup()
    {
        $queryBuilder = $this->createQueryBuilder('t');
        $queryBuilder->select('SUBSTRING(t.label, 1, 10) as label, COUNT(t)  as prix_total1')
        ->groupBy('label')
        ;

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * @return int|mixed|string|null
     *
     */
    public function calculTotal()
    {
        $queryBuilder = $this->createQueryBuilder('t');
        $queryBuilder->select('SUM(t.prix)  as prix_global1');

        return $queryBuilder->getQuery()->getResult();
    }

     /*
    public function countByLogement()
    {
        return $this->createQueryBuilder('t')
            ->select('t.label as label, COUNT(t.inscriptions) as candidat')
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
 */
    

    // /**
    //   @return TypeDeBien[] Returns an array of TypeDeBien objects
    //  
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeDeBien
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
