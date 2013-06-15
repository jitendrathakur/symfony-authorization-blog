<?php

// src/Acme/UserBundle/Form/Type/RegistrationType.php
namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user', new UserType(), array('label' => false));
       
    }

    public function getName()
    {
        return 'registration';
    }
}