<?php
// src/Acme/UserBundle/Controller/UserController.php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

use Acme\UserBundle\Form\Type\RegistrationType;
use Acme\UserBundle\Form\Model\Registration;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Acme\UserBundle\Entity\User;
use Acme\UserBundle\Entity\Group;

class UserController extends Controller
{

    /**
     * 
     */
    public function registerAction()
    {

        /*$factory = $this->get('security.encoder_factory');
        $user = new \Acme\UserBundle\Entity\User();
        $encoder = $factory->getEncoder($user);
        $salt = $user->getSalt();
        $password = $encoder->encodePassword('ryanpass', $salt);
        print_r($salt); echo "<br/>";
        print_r($password);
        exit;*/
        $form = $this->createForm(
            new RegistrationType(),
            new Registration()
        );

        return $this->render(
            'AcmeUserBundle:User:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $group = $em->getRepository('AcmeUserBundle:Group')->find(array('id' => 1));       
       
        $form = $this->createForm(new RegistrationType(), new Registration());        

        $form->bind($this->getRequest());
   
        $data = $this->get('request')->request->get('registration');
       
        
        if ($form->isValid()) {

            $factory = $this->get('security.encoder_factory');

            $user = new User();

            $encoder = $factory->getEncoder($user);
            $salt = $user->getSalt();
            $pass = $encoder->encodePassword($data['user']['plainPassword']['password'], $salt);
            $user->setEmail($data['user']['email']);
            $user->setPassword($pass);
            $user->setplainPassword($pass);
            $user->setUsername($data['user']['username']);       
            $user->getGroups()->add($group);
       
            $em->persist($user);
            $em->flush();
           

            return $this->redirect($this->generateUrl('_post'));
        }

        return $this->render(
            'AcmeUserBundle:User:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function hashPassword($container)
    {
        $factory = $container->get('security.encoder_factory');
        
        $encoder = $factory->getEncoder($this);
        $password = $encoder->encodePassword($this->getPassword(), $this->getSalt());
        return $password;
    }

    public function loginAction()
    {

       // print_r($_SESSION());
        $request = $this->getRequest();
        $session = $request->getSession();
        //print_r($session);
        //exit;
 
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
       
 
        return $this->render('AcmeUserBundle:User:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }


   
}