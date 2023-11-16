<?php

namespace App\Repository;

use App\Entity\PictureCover;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PictureCover>
 *
 * @method PictureCover|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictureCover|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictureCover[]    findAll()
 * @method PictureCover[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictureCoverRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictureCover::class);
    }

//    /**
//     * @return PictureCover[] Returns an array of PictureCover objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PictureCover
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
