<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\AbstractTranslation;

class InfoArticleTranslation extends AbstractTranslation implements InfoArticleTranslationInterface
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $content;

    /** @var string */
    protected $metaKeywords;

    /** @var string */
    protected $metaDescription;

    /** @var string */
    protected $nameWhenLinked;

    /** @var string */
    protected $descriptionWhenLinked;

    /** @var string */
    protected $breadcrumb;

    /** @var string */
    protected $title;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getBreadcrumb(): ?string
    {
        return $this->breadcrumb;
    }

    public function setBreadcrumb(?string $breadcrumb): void
    {
        $this->breadcrumb = $breadcrumb;
    }

    public function getNameWhenLinked(): ?string
    {
        return $this->nameWhenLinked;
    }

    public function setNameWhenLinked(?string $nameWhenLinked): void
    {
        $this->nameWhenLinked = $nameWhenLinked;
    }

    public function getDescriptionWhenLinked(): ?string
    {
        return $this->descriptionWhenLinked;
    }

    public function setDescriptionWhenLinked(?string $descriptionWhenLinked): void
    {
        $this->descriptionWhenLinked = $descriptionWhenLinked;
    }

    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?string $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
}