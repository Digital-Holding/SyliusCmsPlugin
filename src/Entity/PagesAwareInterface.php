<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Doctrine\Common\Collections\Collection;

interface PagesAwareInterface
{
    public function initializePagesCollection(): void;

    public function getPages(): ?Collection;

    public function hasPage(PageInterface $page): bool;

    public function addPage(PageInterface $page): void;

    public function removePage(PageInterface $page): void;
}
