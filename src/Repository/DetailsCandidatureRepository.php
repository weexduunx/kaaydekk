<?php

namespace App\Repository;

use App\Entity\DetailsCandidature;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DetailsCandidature|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailsCandidature|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailsCandidature[]    findAll()
 * @method DetailsCandidature[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailsCandidatureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailsCandidature::class);
    }


    /**
     * @return int|mixed|string|null
     * @throws NonUniqueResultException
     */
    public function countAllCandidature()
    {
        $queryBuilder = $this->createQueryBuilder('d');
        $queryBuilder->select('COUNT(d.id) as value');

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
    public function countBySalaire()
    {
        $query = $this->createQueryBuilder('d')
            ->select('SUBSTRING(d.salaire_mensuelle, 1, 10) as salaire, COUNT(d) as count')
            ->groupBy('salaire');

        return $query->getQuery()->getResult();
    }

    public function countByAgence()
    {
        $query = $this->createQueryBuilder('c')
            ->select('(d.agence) as agence , COUNT(d) as count')
            ->groupBy('agence');

        return $query->getQuery()->getResult();
    }

}
