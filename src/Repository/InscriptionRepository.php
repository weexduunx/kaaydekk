<?php

namespace App\Repository;

use App\Entity\Inscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Inscription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inscription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inscription[]    findAll()
 * @method Inscription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inscription::class);
    }

    public function countAllClient()
    {
        $queryBuilder = $this->createQueryBuilder('i');
        $queryBuilder->select('COUNT(i.id) as value');

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
    public function countByDate()
    {
        $query = $this->createQueryBuilder('i')
            ->select('SUBSTRING(i.createdAt, 1, 10) as date, COUNT(i) as count')
            ->groupBy('date');

        return $query->getQuery()->getResult();
    }

    public function findLatestClient()
    {
        return  $this->findVisibleQuery()
            ->select('i.prenom , i.nom, i.tel' )
            ->orderBy('i.createdAt','DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
            ;
    }

    private function findVisibleQuery() : \Doctrine\ORM\QueryBuilder
    {
        return $this->createQueryBuilder('i')
            ->where('i.status = false');
    }

    public function countByLogement()
    {
        $query = $this->createQueryBuilder('i')
        ->select('t.id as label, COUNT(i.typeDeLogement) AS inscrits')
        ->from('App\Entity\TypeDeBien', 't')
        ->groupBy('label');

        return $query->getQuery()->getResult();
    }

    public function countBy(){

        $query = $this->createQueryBuilder('i')
        ->select('i.id, COUNT(i.typeDeLogement) as candidat')
        ->from('App\Entity\TypeDeBien','t')
        ->Join(' t.inscriptions ', 'i');

        return $query->getQuery()->getResult();
    }
    // /**
    //  @return Inscription[] Returns an array of Inscription objects
    //
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inscription
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
