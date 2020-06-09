<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\ToggleableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;
use Sylius\Component\Resource\Model\TranslationInterface;

class InfoArticle implements InfoArticleInterface
{
    use ToggleableTrait;
    use TimestampableTrait;
    use ChannelsAwareTrait;
    use TranslatableTrait {
        __construct as protected initializeTranslationsCollection;
    }

    /** @var int */
    protected $id;

    /** @var string */
    protected $code;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
        $this->initializeChannelsCollection();
        $this->initializeChannelsCollection();

        $this->createdAt = new \DateTime();
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

    public function getMetaKeywords(): ?string
    {
        return $this->getInfoArticleTranslation()->getMetaKeywords();
    }

    public function setMetaKeywords(?string $metaKeywords): void
    {
        $this->getInfoArticleTranslation()->setMetaKeywords($metaKeywords);
    }

    public function getMetaDescription(): ?string
    {
        return $this->getInfoArticleTranslation()->getMetaDescription();
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->getInfoArticleTranslation()->setMetaDescription($metaDescription);
    }

    public function getContent(): ?string
    {
        return $this->getInfoArticleTranslation()->getContent();
    }

    public function setContent(?string $content): void
    {
        $this->getInfoArticleTranslation()->setContent($content);
    }

    public function getName(): ?string
    {
        return $this->getInfoArticleTranslation()->getName();
    }

    public function setName(?string $name): void
    {
        $this->getInfoArticleTranslation()->setName($name);
    }

    public function getNameWhenLinked(): ?string
    {
        return $this->getInfoArticleTranslation()->getNameWhenLinked();
    }

    public function setNameWhenLinked(?string $nameWhenLinked): void
    {
        $this->getInfoArticleTranslation()->setNameWhenLinked($nameWhenLinked);
    }

    public function getDescriptionWhenLinked(): ?string
    {
        return $this->getInfoArticleTranslation()->getDescriptionWhenLinked();
    }

    public function setDescriptionWhenLinked(?string $descriptionWhenLinked): void
    {
        $this->getInfoArticleTranslation()->setDescriptionWhenLinked($descriptionWhenLinked);
    }

    public function getBreadcrumb(): ?string
    {
        return $this->getInfoArticleTranslation()->getBreadcrumb();
    }

    public function setBreadcrumb(?string $breadcrumb): void
    {
        $this->getInfoArticleTranslation()->setBreadcrumb($breadcrumb);
    }

    public function getTitle(): ?string
    {
        return $this->getInfoArticleTranslation()->getTitle();
    }

    public function setTitle(?string $title): void
    {
        $this->getInfoArticleTranslation()->setTitle($title);
    }

    /**
     * @return InfoArticleTranslationInterface|TranslationInterface|null
     */
    protected function getInfoArticleTranslation(): InfoArticleTranslationInterface
    {
        return $this->getTranslation();
    }

    protected function createTranslation(): ?InfoArticleTranslationInterface
    {
        return new InfoArticleTranslation();
    }
}
