<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Repository;

use BitBag\SyliusCmsPlugin\Entity\MapPointInterface;
use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

class MapPointRepository extends EntityRepository implements MapPointRepositoryInterface
{
    public function createListQueryBuilder(string $localeCode): QueryBuilder
    {
        return $this->createQueryBuilder('o')
            ->addSelect('translation')
            ->leftJoin('o.translations', 'translation', 'WITH', 'translation.locale = :localeCode')
            ->setParameter('localeCode', $localeCode)
            ;
    }

    public function findEnabled(bool $enabled): array
    {
        return $this->createQueryBuilder('o')
            ->addSelect('translation')
            ->innerJoin('o.translations', 'translation')
            ->andWhere('o.enabled = :enabled')
            ->setParameter('enabled', $enabled)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findOneEnabledByCode(string $code, ?string $localeCode): ?MapPointInterface
    {
        return $this->createQueryBuilder('o')
            ->leftJoin('o.translations', 'translation')
            ->where('translation.locale = :localeCode')
            ->andWhere('o.code = :code')
            ->andWhere('o.enabled = true')
            ->setParameter('code', $code)
            ->setParameter('localeCode', $localeCode)
            ->getQuery()
            ->getOneOrNullResult()
            ;
    }
}
