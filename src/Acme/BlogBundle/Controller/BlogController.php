<?php
// src/Acme/BlogBundle/Controller/BlogController.php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\BlogBundle\Entity\Blog;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\BlogBundle\Form\BlogEditType;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id, $slug)
    {
      
        //$em = $this->getDoctrine()->getEntityManager();

        $blogs = $this->getDoctrine()
            ->getRepository('AcmeBlogBundle:Blog')
            ->getLatestBlogs($id);

        //$blog = $em->getRepository('AcmeBlogBundle:Blog')->find(array('id' => $id));

            //print_r($blogs->getTags());
          // exit;

       
        if (!$blogs) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }     

        $comments = $this->getDoctrine()
                         ->getRepository('AcmeBlogBundle:Comment')
                         ->getCommentsForBlog($id);

         
        return $this->render('AcmeBlogBundle:Blog:show.html.twig', array(
            'blogs'      => $blogs,
            'comments'  => $comments
        ));
    }

    /**
     * Show a blog entry
     * @Secure(roles="ROLE_USER")
     */
    public function newAction()
    {
        // create a task and give it some dummy data for this example
        $blog = new Blog();
      
        $form = $this->createFormBuilder($blog)
            ->add('title', 'text')
            ->add('blog', 'textarea')
            ->add('tags', 'text')
            ->add('auther', 'text')
            ->add('image', 'file')
            ->getForm();
        $request = $this->getRequest();
        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
            
                $em = $this->getDoctrine()
                       ->getEntityManager();
                $this->get('session')->getFlashBag()->add('notice', 'New blog has been created');
            
                $em->persist($blog);
                $em->flush();

                return $this->redirect($this->generateUrl('_post'));
            }
        }
        

         
        return $this->render('AcmeBlogBundle:Blog:new.html.twig', array(
            'form'      => $form->createView(),
            //'comments'  => $comments
        ));
    }


     /**
     * Show a blog entry
     * @Secure(roles="ROLE_USER")
     */
    public function deleteAction($id)
    {
        
        $em = $this->getDoctrine()->getEntityManager();
        $blog = $em->getRepository('AcmeBlogBundle:Blog')->find(array('id' => $id));
     
        if (!$blog) {
            throw $this->createNotFoundException('No blog found for id '.$blog);
        }

        $em->remove($blog);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Blog has been deleted');

        return $this->redirect($this->generateUrl('_post'));        
        
    }

     /**
     * Show a blog entry
     * @Secure(roles="ROLE_USER")
     */
    public function editAction($id, $slug)
    {
        
        $em = $this->getDoctrine()->getEntityManager();
     
        $blog = $em->getRepository('AcmeBlogBundle:Blog')->find(array('id' => $id));             

        if (!$blog) {
            throw $this->createNotFoundException('No blog found for id '.$blog);
        }      
      
        $form    = $this->createForm(new BlogEditType(), $blog);

        $request = $this->getRequest();
        if ($request->isMethod('POST')) {           

          
            $image = $request->files->get('blog');
       
            if (!empty($image)) {
            
                $form->add('image', 'file', array('data' => ''));           
                $blog->setImage($image['image']);

            }                   
            
            
            $form->bind($request);

            if ($form->isValid()) {
            
                $em = $this->getDoctrine()
                       ->getEntityManager();
                $this->get('session')->getFlashBag()->add('notice', 'Blog has been updated');
            
                $em->persist($blog);
                $em->flush();

                return $this->redirect($this->generateUrl('AcmeBlogBundle_blog_show', array('id' => $id, 'slug' => $slug)));
            }
        }
        

         
        return $this->render('AcmeBlogBundle:Blog:edit.html.twig', array(
            'form'      => $form->createView(),
            'blog'      => $blog
            //  => $comments
        ));      
        
    }
    

}