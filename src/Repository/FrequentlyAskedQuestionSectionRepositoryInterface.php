<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Repository;

use BitBag\SyliusCmsPlugin\Entity\FrequentlyAskedQuestionSectionInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface FrequentlyAskedQuestionSectionRepositoryInterface extends RepositoryInterface
{
    public function findByNamePart(string $phrase, ?string $locale = null): array;

    public function findOneByCode(string $code, ?string $localeCode): ?FrequentlyAskedQuestionSectionInterface;

    public function findByCodesAndLocale(string $codes, string $localeCode): array;
}
