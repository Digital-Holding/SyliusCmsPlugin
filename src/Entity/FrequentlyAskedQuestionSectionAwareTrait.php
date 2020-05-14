<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait FrequentlyAskedQuestionSectionAwareTrait
{
    /** @var Collection|FrequentlyAskedQuestionSectionInterface[] */
    protected $frequentlyAskedQuestionSections;

    public function initializeFrequentlyAskedQuestionSectionsCollection(): void
    {
        $this->frequentlyAskedQuestionSections = new ArrayCollection();
    }

    public function getFrequentlyAskedQuestionSections(): ?Collection
    {
        return $this->frequentlyAskedQuestionSections;
    }

    public function hasFrequentlyAskedQuestionSection(FrequentlyAskedQuestionSectionInterface $frequentlyAskedQuestionSections): bool
    {
        return $this->frequentlyAskedQuestionSections->contains($frequentlyAskedQuestionSections);
    }

    public function addFrequentlyAskedQuestionSection(FrequentlyAskedQuestionSectionInterface $frequentlyAskedQuestionSections): void
    {
        if (false === $this->hasFrequentlyAskedQuestionSection($frequentlyAskedQuestionSections)) {
            $this->frequentlyAskedQuestionSections->add($frequentlyAskedQuestionSections);
        }
    }

    public function removeFrequentlyAskedQuestionSection(FrequentlyAskedQuestionSectionInterface $frequentlyAskedQuestionSections): void
    {
        if (true === $this->hasFrequentlyAskedQuestionSection($frequentlyAskedQuestionSections)) {
            $this->frequentlyAskedQuestionSections->removeElement($frequentlyAskedQuestionSections);
        }
    }
}
