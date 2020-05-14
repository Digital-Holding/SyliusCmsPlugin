<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Core\Model\ImageInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;
use Sylius\Component\Resource\Model\TranslationInterface;

class FrequentlyAskedQuestionSection implements FrequentlyAskedQuestionSectionInterface
{
    use TranslatableTrait {
        __construct as private initializeFrequentlyAskedQuestionSectionsCollection;
    }

    /** @var int */
    protected $id;

    /** @var string */
    protected $code;

    /** @var ImageInterface */
    protected $image;

    public function __construct()
    {
        $this->initializeFrequentlyAskedQuestionSectionsCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getName(): ?string
    {
        return $this->getSectionTranslation()->getName();
    }

    public function setName(?string $name): void
    {
        $this->getSectionTranslation()->setName($name);
    }

    /**
     * @return TranslationInterface|FrequentlyAskedQuestionSectionTranslationInterface
     */
    protected function getSectionTranslation(): TranslationInterface
    {
        return $this->getTranslation();
    }

    protected function createTranslation(): TranslationInterface
    {
        return new SectionTranslation();
    }

    public function getImage(): ?ImageInterface
    {
        return $this->image;
    }

    public function setImage(?ImageInterface $image): void
    {
        $image->setOwner($this);
        $this->image = $image;
    }
}
