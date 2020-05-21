<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

interface MapPointTranslationInterface extends ResourceInterface, TranslationInterface
{
    public function getName(): ?string;

    public function setName(?string $name): void;
}
