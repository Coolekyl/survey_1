<?php

namespace App\Repository;

use App\Entity\GivenAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GivenAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method GivenAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method GivenAnswer[]    findAll()
 * @method GivenAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GivenAnswerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GivenAnswer::class);
    }

    // /**
    //  * @return GivenAnswer[] Returns an array of GivenAnswer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GivenAnswer
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
