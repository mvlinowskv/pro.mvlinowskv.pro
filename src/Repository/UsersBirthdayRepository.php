<?php

namespace App\Repository;

use App\Entity\UsersBirthday;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsersBirthday>
 *
 * @method UsersBirthday|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersBirthday|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersBirthday[]    findAll()
 * @method UsersBirthday[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersBirthdayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsersBirthday::class);
    }

    public function save(UsersBirthday $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(UsersBirthday $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return UsersBirthday[] Returns an array of UsersBirthday objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UsersBirthday
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
