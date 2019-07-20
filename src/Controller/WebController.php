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
     **************************************************************
     * OBRA CIVIL - INGENIERIA CIVIL
     **************************************************************
     */

    /**
     * @Route("civil/paving", name="paving")
     * OBRA CIVIL - INGENIERIA CIVIL
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
     * OBRA CIVIL - INGENIERIA CIVIL
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
     * OBRA CIVIL - INGENIERIA CIVIL
     * ingenieria civil
     */
    public function civil()
    {
        return $this->render('web/civil/civil.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     **************************************************************
     * INFORMATICA - INGENIERIA SISTEMAS
     **************************************************************
     */

    /**
     * @Route("systems/development", name="development")
     * INFORMATICA - INGENIERIA SISTEMAS
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
     * INFORMATICA - INGENIERIA SISTEMAS
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
     * INFORMATICA - INGENIERIA SISTEMAS
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
     * INFORMATICA - INGENIERIA SISTEMAS
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
     * INFORMATICA - INGENIERIA SISTEMAS
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
     * INFORMATICA - INGENIERIA SISTEMAS
     * electronica centros de computo
     */
    public function electronics()
    {
        return $this->render('web/systems/electronics.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     **************************************************************
     * ELECTRICIDAD - INGENIERIA ELECTRICA
     **************************************************************
     */

    /**
     * @Route("electrical/substations", name="substations")
     * ELECTRICIDAD - INGENIERIA ELECTRICA
     * sub estaciones
     */
    public function substations()
    {
        return $this->render('web/electrical/substations.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("electrical/connections", name="connections")
     * ELECTRICIDAD - INGENIERIA ELECTRICA
     * acometidas electricas
     */
    public function connections()
    {
        return $this->render('web/electrical/connections.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("electrical/netmaintenance", name="netmaintenance")
     * ELECTRICIDAD - INGENIERIA ELECTRICA
     * mantenimiento de redes
     */
    public function netmaintenance()
    {
        return $this->render('web/electrical/netmaintenance.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("electrical/ups", name="ups")
     * ELECTRICIDAD - INGENIERIA ELECTRICA
     * ups
     */
    public function ups()
    {
        return $this->render('web/electrical/ups.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("electrical/renewable", name="renewable")
     * ELECTRICIDAD - INGENIERIA ELECTRICA
     * energias renovables 
     */
    public function renewable()
    {
        return $this->render('web/electrical/renewable.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     **************************************************************
     * TELECOMUNICACIONES - INGENIERIA TELECOMUNICACIONES
     **************************************************************
     */

    /**
     * @Route("communications/networking", name="networking")
     * TELECOMUNICACIONES - INGENIERIA TELECOMUNICACIONES
     * redes informaticas
     */
    public function networking()
    {
        return $this->render('web/communications/networking.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("communications/links", name="links")
     * TELECOMUNICACIONES - INGENIERIA TELECOMUNICACIONES
     * links
     */
    public function links()
    {
        return $this->render('web/communications/links.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("communications/voip", name="voip")
     * TELECOMUNICACIONES - INGENIERIA TELECOMUNICACIONES
     * telefonia IP
     */
    public function voip()
    {
        return $this->render('web/communications/voip.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     **************************************************************
     * SEGURIDAD Y AUTOMATIZACION
     **************************************************************
     */

    /**
     * @Route("automation/cctv", name="cctv")
     * SEGURIDAD Y AUTOMATIZACION
     * circuito cerrado de TV
     */
    public function cctv()
    {
        return $this->render('web/automation/cctv.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("automation/automation", name="automation")
     * SEGURIDAD Y AUTOMATIZACION
     * domotica y ofimatica
     */
    public function automation()
    {
        return $this->render('web/automation/automation.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("automation/biometrics", name="biometrics")
     * SEGURIDAD Y AUTOMATIZACION
     * control de acceso
     */
    public function biometrics()
    {
        return $this->render('web/automation/biometrics.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("automation/alarmsystem", name="alarmsystem")
     * SEGURIDAD Y AUTOMATIZACION
     * alarmas
     */
    public function alarmsystem()
    {
        return $this->render('web/automation/alarmsystem.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }



}
