<?php
// src/Acme/UserBundle/Entity/User.php
namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;


/**
 * @ORM\Entity(repositoryClass="Acme\UserBundle\Entity\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $username;

     /**
     * @ORM\Column(type="string", length=255)
     * @validation:MinLength(limit=3, message="The username is too short"),
     */
   //protected $roles;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    protected $plainPassword;

    /**
     * @ORM\Column(type="string", length=255)     
     */
    protected $password;

    /**
     * @ORM\Column(name="is_active", type="boolean", nullable=true) 
     */
    protected $isActive = true;
  

     /**
     * @ORM\ManyToMany(targetEntity="Group", inversedBy="user")
     *
     */
    private $groups;

     
 

  
    public function __construct()
    {
        $this->salt = md5(uniqid(null, true));
        $this->groups = new ArrayCollection();
        
    }



    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

     public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {       
        $this->username = $username;
    }

     public function setIsActive($isActive = false)
    {       
        $this->isActive = true;
    }


    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        //return array('ROLE_USER');
        return $this->groups->toArray();
    }

    public function eraseCredentials() {
        return;
    }

     /**
     * @inheritDoc
     */
    public function equals(UserInterface $user)
    {
        return $this->id === $user->getId();
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
       // $factory = $this->container->get('security.encoder_factory');

   
        $this->password = $password;
        /*$factory = $this->get('security.encoder_factory');
        $user = new \Acme\UserBundle\Entity\User();
        $encoder = $factory->getEncoder($user);
        $salt = $user->getSalt();
        $password = $encoder->encodePassword('ryanpass', $salt);
        $this->password = $password;*/
       // print_r($salt); echo "<br/>";
        //print_r($password);
    }

     public function setPassword($password)
    {
      
        $this->password = $password;
 
    }

    public function getPassword()
    {
        return $this->password;
    }   

     public function getSalt()
    {
        return $this->salt;
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }

    public function addgroups($group)
    {
        $this->group[] = $group;
    }


    public function getGroups()
    {
        return $this->groups;
    }


    public function isPasswordLegal()
    {
        return ($this->username != $this->password);
    }
   

}