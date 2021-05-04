<?php

namespace App\Repository;

use App\Entity\Bien;
use App\Entity\PropertySearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bien|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bien|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bien[]    findAll()
 * @method Bien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bien::class);
    }

    /**
     * @return int|mixed|string|null
     *
     * @throws NonUniqueResultException
     */
    public function countAllBien()
    {
        $queryBuilder = $this->createQueryBuilder('b');
        $queryBuilder->select('COUNT(b.id) as value');

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }


    /**
     * @param \App\Entity\PropertySearch $search
     * @return Query
     */
    public  function  findAllVisibleQuery(PropertySearch $search): Query
    {
        $query = $this->findVisibleQuery();

        if ($search->getMaxPrice()){
            $query = $query
                ->andwhere('b.price <= :maxprice')
                ->setParameter('maxprice', $search->getMaxPrice());
        }
        if ($search->getMinSuperficie()){
            $query = $query
                ->andwhere('b.superficie >= :minsuperficie')
                ->setParameter('minsuperficie', $search->getMinSuperficie());
        }
        if ($search->getType()){
            $query = $query
                ->andwhere('b.typeDeBien >= :type')
                ->setParameter('type', $search->getType());
        }
        if ($search->getVille()){
            $query = $query
                ->andwhere('b.city >= :ville')
                ->setParameter('ville', $search->getVille());
        }
        if ($search->getChambre()){
            $query = $query
                ->andwhere('b.bedrooms <= :chambre')
                ->setParameter('chambre', $search->getChambre());
        }

        return $query->getQuery();
    }

    /**
     * @return Bien[]
     */
    public function findLatest(): array
    {
        return  $this->findVisibleQuery()
            ->where('b.sold = false')
            ->orderBy('b.createdAt','DESC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
            ;
    }

    private function findVisibleQuery() : QueryBuilder
    {
        return $this->createQueryBuilder('b')
            ->where('b.sold = false');
    }


    public function calculGroup()
    {
        $queryBuilder = $this->createQueryBuilder('b');
        $queryBuilder->select('SUBSTRING(b.label, 1, 10) as label, SUM(b.price)  as prix_total')
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
        $queryBuilder = $this->createQueryBuilder('b');
        $queryBuilder->select('SUM(b.price)  as prix_global');

        return $queryBuilder->getQuery()->getResult();
    }
    /**
    //  * @return Bien[] Returns an array of Bien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bien
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
