<?php

namespace App\Repository;

use App\Entity\ClubMmv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ClubMmv>
 *
 * @method ClubMmv|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClubMmv|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClubMmv[]    findAll()
 * @method ClubMmv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClubMmvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClubMmv::class);
    }

//    /**
//     * @return ClubMmv[] Returns an array of ClubMmv objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ClubMmv
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
