<?php
namespace LibrariumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class IndexController extends Controller {
	
	/**
     * @Route("/")
     * @Template()
     */  
	public function IndexAction() {
		return $this->render('LibrariumBundle:Index:index.html.twig');
	}

	/**
     * @Route("/nosotros")
     * @Template()
     */    
	public function AcercaAction() {
		return $this->render('LibrariumBundle:Index:acerca.html.twig');
	}

	/**
     * @Route("/contacto")
     * @Template()
     */    
	public function ContactoAction() {
		return $this->render('LibrariumBundle:Index:contacto.html.twig');
	}
}
