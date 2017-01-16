<?php

/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 18.11.2016
 * Time: 8:59
 */

namespace ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class ContactTypeForm
 * @package ClientBundle\Form
 */
class ContactTypeForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('Save', SubmitType::class)
        ;
    }

}