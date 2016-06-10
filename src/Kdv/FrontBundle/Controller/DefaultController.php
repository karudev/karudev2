<?php

namespace Kdv\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("")
     * @Template
     */
    public function indexAction()
    {
        return  [];
    }
    /**
     * @Route("/la-societe")
     * @Template
     */
    public function societeAction()
    {
        return [];
    }
    /**
     * @Route("/devis-en-ligne")
     * @Template
     */
    public function devisAction()
    {
        return [];
    }
    /**
     * @Route("/contactez-nous")
     * @Template
     */
    public function contactAction()
    {
        return [];
    }
}
