<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\Collection;

interface FrequentlyAskedQuestionSectionAwareInterface
{
    public function initializeFrequentlyAskedQuestionSectionsCollection(): void;

    public function getFrequentlyAskedQuestionSections(): ?Collection;

    public function hasFrequentlyAskedQuestionSection(FrequentlyAskedQuestionSectionInterface $frequentlyAskedQuestionSections): bool;

    public function addFrequentlyAskedQuestionSection(FrequentlyAskedQuestionSectionInterface $frequentlyAskedQuestionSections): void;

    public function removeFrequentlyAskedQuestionSection(FrequentlyAskedQuestionSectionInterface $frequentlyAskedQuestionSections): void;
}
