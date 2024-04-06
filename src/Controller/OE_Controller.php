// src/OE_Bundle/Controller/OE_Controller.php

namespace OE_Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class OE_Controller extends AbstractController
{
    public function index(): Response
    {
        return $this->render('OE.html.twig', [
             'controller_name' => 'OE_Controller',);
    }
}
