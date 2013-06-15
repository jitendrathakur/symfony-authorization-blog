<?php
// src/Blogger/BlogBundle/Controller/PageController.php
namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

// Import new namespaces
use Acme\BlogBundle\Entity\Enquiry;
use Acme\BlogBundle\Form\EnquiryType;

class PageController extends Controller
{

	
    public function indexAction()
    {

    	 //$user = $this->get('security.context')->getToken()->getUser();

    	 //print_r($user);
    	// exit;
    	

    	// $session = $request->getSession();
    	 //print_r($session);
    	//print_r($this->get('security.context'));
    	//var_dump($this->getUser());
    	 //exit;
    	//print_r($this->getRoles());
    	//exit;

       
		$blogs = $this->getDoctrine()
		        ->getRepository('AcmeBlogBundle:Blog')
		        ->getLatestBlogs();
      
        //$blogs = $em->getRepository('AcmeBlogBundle:Blog')->findAll();
                 

        return $this->render('AcmeBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));
    }


    public function aboutAction()
    {
        return $this->render('AcmeBlogBundle:Page:about.html.twig');
    }


    public function contactAction()
	{
	    $enquiry = new Enquiry();
	    $form = $this->createForm(new EnquiryType(), $enquiry);

	    $request = $this->getRequest();
	    if ($request->getMethod() == 'POST') {
	        $form->bindRequest($request);

	        if ($form->isValid()) {
	            $message = \Swift_Message::newInstance()
		            ->setSubject('Contact enquiry from symblog')
		            ->setFrom('enquiries@symblog.co.uk')
		            ->setTo('email@email.com')
		            ->setBody($this->renderView('AcmeBlogBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));
		        $this->get('mailer')->send($message);

		        $this->get('session')->setFlash('blogger-notice', 'Your contact enquiry was successfully sent. Thank you!');

		        // Redirect - This is important to prevent users re-posting
		        // the form if they refresh the page
		        return $this->redirect($this->generateUrl('AcmeBlogBundle_contact'));
	        }
	    }

	    return $this->render('AcmeBlogBundle:Page:contact.html.twig', array(
	        'form' => $form->createView()
	    ));
	}


	public function sidebarAction()	{
	    $em = $this->getDoctrine()
	               ->getEntityManager();

	    $tags = $em->getRepository('AcmeBlogBundle:Blog')
	               ->getTags();

	    $tagWeights = $em->getRepository('AcmeBlogBundle:Blog')
	                     ->getTagWeights($tags);

	    $commentLimit   = $this->container
                           ->getParameter('blogger_blog.comments.latest_comment_limit');
	    $latestComments = $em->getRepository('AcmeBlogBundle:Comment')
	                         ->getLatestComments($commentLimit);

	    return $this->render('AcmeBlogBundle:Page:sidebar.html.twig', array(
	        'latestComments'    => $latestComments,
	        'tags'              => $tagWeights
	    ));	   
	}
}
?>