<?php
namespace LibrariumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use LibrariumBundle\Catalog\Fetcher;

class CatalogController extends Controller {

	public function __construct()
    {
        //set up the DB?
    }

	
	/**
     * @Route("/")
     * @Template()
     */	
	public function IndexAction() {
		$catalogFetcher = new Fetcher();
		return array();
	}

	/**
     * @Route("/catalogo")
     * @Template()
     */
	public function BrowseAction() {
		$catalogFetcher = new Fetcher();
		$books = array("name" => "Test one", "Author" => "Some Author");
		return array("books" => $books);
	}
}