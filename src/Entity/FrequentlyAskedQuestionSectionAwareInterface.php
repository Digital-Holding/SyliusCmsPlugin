<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\Collection;

interface FrequentlyAskedQuestionSectionAwareInterface
{
    public function initializeFrequentlyAskedQuestionSectionsCollection(): void;

    public function getFrequentlyAskedQuestionSections(): ?Collection;

    public function hasFrequentlyAskedQuestionSection(SectionInterface $section): bool;

    public function addFrequentlyAskedQuestionSection(SectionInterface $section): void;

    public function removeFrequentlyAskedQuestionSection(SectionInterface $section): void;
}
