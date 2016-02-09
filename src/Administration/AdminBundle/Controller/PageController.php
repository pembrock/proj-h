<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Administration\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
/**
 * Description of PageController
 *
 * @author k.pasikuta
 */
class PageController extends Controller{
    //put your code here
    //public $loginError;
    
    public function indexAction()
    {
        $request = Request::createFromGlobals();
        $cookies = $request->cookies;
//        echo "<pre>";
//        print_r($request->request);
//        echo "</pre>";
        $error = array();
//        if ($request->request->get('inputEmail') == 'pembrock@gmail.com' && $request->request->get('inputPassword') == '123')
//        {
//            $response = new Response();
//            $response->headers->setCookie(new Cookie('user_login', $request->request->get('inputEmail'), time() + 3600));
//            $response->send();
//            return $this->render('AdministrationAdminBundle:Page:index.html.twig');
//        }
//        else
//        {
//            $loginError["msg"] = "Ошибка";
//            return $this->render('AdministrationAdminBundle:Page:login.html.twig', $loginError);
//        }
        if($cookies->has('user_login'))
            return $this->render('AdministrationAdminBundle:Page:index.html.twig');
        else
            return $this->redirectToRoute('administration_admin_login');

    }
}
