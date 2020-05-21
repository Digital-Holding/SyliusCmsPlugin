<?php

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Form\Type;

use BitBag\SyliusCmsPlugin\Form\Type\Translation\MapPointTranslationType;
use Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class MapPointType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.code',
                'disabled' => null !== $builder->getData()->getCode(),
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.phone_number',
            ])
            ->add('address', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.address',
            ])
            ->add('city', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.city',
            ])
            ->add('openingHours', TextType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.opening_hours',
            ])
            ->add('enabled', CheckboxType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.enabled',
            ])
            ->add('translations', ResourceTranslationsType::class, [
                'label' => false,
                'entry_type' => MapPointTranslationType::class,
            ])
            ->add('channels', ChannelChoiceType::class, [
                'label' => 'bitbag_sylius_cms_plugin.ui.channels',
                'required' => false,
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'bitbag_sylius_cms_plugin_map_point';
    }
}
