<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\ProductVariantInterface;

interface ProductVariantsAwareInterface
{
    public function initializeProductVariantsCollection(): void;

    public function getProductVariants(): Collection;

    public function hasProductVariant(ProductVariantInterface $productVariant): bool;

    public function addProductVariant(ProductVariantInterface $productVariant): void;

    public function removeProductVariant(ProductVariantInterface $productVariant): void;
}
