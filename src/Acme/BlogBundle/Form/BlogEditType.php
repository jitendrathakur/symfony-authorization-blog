<?php

namespace Acme\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BlogEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('title', 'text')
            ->add('blog', 'textarea')
            ->add('tags', 'text')
            ->add('auther', 'text')
          //  ->add('image', 'hidden', array('data' => '', 'required' => false), array())
            ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\BlogBundle\Entity\Blog'
        ));
    }

    public function getName()
    {
        return 'blog';
    }
}
