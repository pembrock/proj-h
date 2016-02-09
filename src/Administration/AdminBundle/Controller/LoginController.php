<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Administration\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Administration\AdminBundle\Entity\AdminLoginForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * Description of LoginController
 *
 * @author k.pasikuta
 */
class LoginController extends Controller{
    //put your code here
    
    public function indexAction(Request $request)
    {
        $loginFomr = new AdminLoginForm();
        $loginForm->setEmail("Email");
        $loginForm->setPassword("Password");
        
        $form = $this->createFormBuilder($loginForm)
                ->add('email', EmailType::class)
                ->add('password', PasswordType::class)
                ->add('save', SubmitType::class, array('label' => 'Sign In'))
                ->getForm();
        
        return $this->render('AdministrationAdminBundle:Page:login.html.twig', array(
            'fomr'  =>  $form->createView(),
        ));
    }    
}
