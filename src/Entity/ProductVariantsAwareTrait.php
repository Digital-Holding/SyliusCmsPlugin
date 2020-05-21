<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\ProductVariantInterface;

trait ProductVariantsAwareTrait
{
    /** @var Collection|ProductVariantInterface[] */
    protected $productVariants;

    public function initializeProductVariantsCollection(): void
    {
        $this->productVariants = new ArrayCollection();
    }

    public function getProductVariants(): Collection
    {
        return $this->productVariants;
    }

    public function hasProductVariant(ProductVariantInterface $productVariant): bool
    {
        return $this->productVariants->contains($productVariant);
    }

    public function addProductVariant(ProductVariantInterface $productVariant): void
    {
        if (false === $this->hasProductVariant($productVariant)) {
            $this->productVariants->add($productVariant);
        }
    }

    public function removeProductVariant(ProductVariantInterface $productVariant): void
    {
        if (true === $this->hasProductVariant($productVariant)) {
            $this->productVariants->removeElement($productVariant);
        }
    }
}
