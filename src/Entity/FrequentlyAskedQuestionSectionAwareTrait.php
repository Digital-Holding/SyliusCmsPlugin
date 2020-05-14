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

    public function hasFrequentlyAskedQuestionSection(SectionInterface $section): bool
    {
        return $this->frequentlyAskedQuestionSections->contains($section);
    }

    public function addFrequentlyAskedQuestionSection(SectionInterface $section): void
    {
        if (false === $this->hasFrequentlyAskedQuestionSection($section)) {
            $this->frequentlyAskedQuestionSections->add($section);
        }
    }

    public function removeFrequentlyAskedQuestionSection(SectionInterface $section): void
    {
        if (true === $this->hasFrequentlyAskedQuestionSection($section)) {
            $this->frequentlyAskedQuestionSections->removeElement($section);
        }
    }
}
