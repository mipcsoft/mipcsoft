<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('web/index.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/company", name="company")
     * informacion basica de la compañia mision vision ...
     */
    public function company()
    {
        return $this->render('web/company.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     * contacto y maps
     */
    public function contact()
    {
        return $this->render('web/contact.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("civil/paving", name="paving")
     * INGENIERIA CIVIL
     * pavimentacion
     */
    public function paving()
    {
        return $this->render('web/civil/paving.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("civil/sportsfields", name="sportsfields")
     * INGENIERIA CIVIL
     * campos deportivos
     */
    public function sportsfields()
    {
        return $this->render('web/civil/sportsfields.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("civil/civil", name="civil")
     * INGENIERIA CIVIL
     * obra civil
     */
    public function civil()
    {
        return $this->render('web/civil/civil.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("systems/development", name="development")
     * INGENIERIA DE SISTEMAS
     * desarrollo de software
     */
    public function development()
    {
        return $this->render('web/systems/development.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("systems/outsorcing", name="outsorcing")
     * INGENIERIA DE SISTEMAS
     * outsorcing
     */
    public function outsorcing()
    {
        return $this->render('web/systems/outsorcing.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("systems/licensing", name="licensing")
     * INGENIERIA DE SISTEMAS
     * licenciamiento
     */
    public function licensing()
    {
        return $this->render('web/systems/licensing.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("systems/maintenance", name="maintenance")
     * INGENIERIA DE SISTEMAS
     * Mantenimiento centros de computo
     */
    public function maintenance()
    {
        return $this->render('web/systems/maintenance.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("systems/computerforensics", name="computerforensics")
     * INGENIERIA DE SISTEMAS
     * informatica forense
     */
    public function computerforensics()
    {
        return $this->render('web/systems/computerforensics.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("systems/electronics", name="electronics")
     * INGENIERIA DE SISTEMAS
     * electronica centros de computo
     */
    public function electronics()
    {
        return $this->render('web/systems/electronics.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }




}
