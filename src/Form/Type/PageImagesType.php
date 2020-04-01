<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Form\Type;

use Sylius\Bundle\CoreBundle\Form\Type\ImageType;

final class PageImagesType extends ImageType
{
    public function getBlockPrefix(): string
    {
        return 'bitbag_sylius_cms_plugin_page_images';
    }
}
