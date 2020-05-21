<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Channel\Model\ChannelsAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface MapPointInterface extends
    ResourceInterface,
    TranslatableInterface,
    ToggleableInterface,
    TimestampableInterface,
    ChannelsAwareInterface,
    ProductVariantsAwareInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
