<?php

namespace App\Repository;

use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Client|null find($id, $lockMode = null, $lockVersion = null)
 * @method Client|null findOneBy(array $criteria, array $orderBy = null)
 * @method Client[]    findAll()
 * @method Client[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }

    /**
     * @return int|mixed|string|null
     *
     * @throws NonUniqueResultException
     */
    public function countAllClient()
    {
        $queryBuilder = $this->createQueryBuilder('c');
        $queryBuilder->select('COUNT(c.id) as value');

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }


    /**
     * Returns number of "Client" per day
     *
     */
    public function countByDate()
    {
        $query = $this->createQueryBuilder('c')
            ->select('SUBSTRING(c.createdAt, 1, 10) as date, COUNT(c) as count')
            ->groupBy('date');

        return $query->getQuery()->getResult();
    }

    /**
     * @return int|mixed|string|null
     *
     */
    public function findLatestClient()
    {
        return  $this->findVisibleQuery()
            ->select('c.prenom , c.nom, c.tel' )
            ->orderBy('c.createdAt','DESC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult()
            ;
    }

    private function findVisibleQuery() : \Doctrine\ORM\QueryBuilder
    {
        return $this->createQueryBuilder('c')
            ->where('c.status = false');
    }
    public function countByAgence()
    {
        $query = $this->createQueryBuilder('c')
            ->select('(c.agence) as agence , COUNT(c) as count')
            ->groupBy('agence');

        return $query->getQuery()->getResult();
    }

    public function countByAccount()
    {
        $qb = $this->createQueryBuilder('c');
 
        $qb ->select($qb->expr()->count('c'));
 
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Client
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

}
