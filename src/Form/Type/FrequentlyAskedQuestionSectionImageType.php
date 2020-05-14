<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Form\Type;

use Sylius\Bundle\CoreBundle\Form\Type\ImageType as BaseImageType;

final class FrequentlyAskedQuestionSectionImageType extends BaseImageType
{
    public function getBlockPrefix(): string
    {
        return 'bitbag_sylius_cms_plugin_frequently_asked_question_section_image';
    }
}
