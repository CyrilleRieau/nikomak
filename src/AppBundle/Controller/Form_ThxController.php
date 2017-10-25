<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Task;
use AppBundle\Entity\Merci;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class Form_ThxController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction()
    {
        $thanks = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Merci')
        ->findAll();
        return $this->render('AppBundle:Form_Thx:list.html.twig', array(
           'thanks'=>$thanks 
        ));
    }
/**
     * @Route("/merci/new")
     */
    public function createThxAction()
    {
        $merci = new Merci();
        
        $form = $this->createFormBuilder($merci)
            ->add('date', DateType::class)
            ->add('emitter', TextType::class)
            ->add('receiver', TextType::class)
            ->add('why', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Remerciez quelqu\'un'))
            ->getForm();

            $form->handleRequest($request);
                           
        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($merci);
        $em->flush();
        return $this->redirectToRoute('task_success');
        }   
        return $this->render('default/formulaire.html.twig', array(
            'form' => $form->createView(),));
    }
}