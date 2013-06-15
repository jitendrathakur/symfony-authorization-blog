<?php
// src/Acme/UserBundle/Form/Model/Registration.php
namespace Acme\UserBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use Acme\UserBundle\Entity\User;

class Registration
{
    /**
     * @Assert\Type(type="Acme\UserBundle\Entity\User")
     * @Assert\Valid()
     */
    protected $user;



    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }



}