<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\ToggleableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;
use Sylius\Component\Resource\Model\TranslationInterface;

class MapPoint implements MapPointInterface
{
    use ToggleableTrait;
    use TimestampableTrait;
    use ChannelsAwareTrait;
    use ProductVariantsAwareTrait;
    use TranslatableTrait {
        __construct as protected initializeTranslationsCollection;
    }

    /** @var int */
    protected $id;

    /** @var string */
    protected $code;

    /** @var string */
    protected $phoneNumber;

    /** @var string */
    protected $address;

    /** @var string */
    protected $city;

    /** @var string */
    protected $openingHours;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
        $this->initializeChannelsCollection();
        $this->initializeChannelsCollection();
        $this->initializeProductVariantsCollection();

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

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getOpeningHours(): ?string
    {
        return $this->openingHours;
    }

    public function setOpeningHours(?string $openingHours): void
    {
        $this->openingHours = $openingHours;
    }

    public function getName(): ?string
    {
        return $this->getMapPointTranslation()->getName();
    }

    public function setName(?string $name): void
    {
        $this->getMapPointTranslation()->setName($name);
    }

    /**
     * @return MapPointTranslationInterface|TranslationInterface|null
     */
    protected function getMapPointTranslation(): MapPointTranslationInterface
    {
        return $this->getTranslation();
    }

    protected function createTranslation(): ?MapPointTranslationInterface
    {
        return new MapPointTranslation();
    }
}
