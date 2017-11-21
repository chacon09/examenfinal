<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Eventodeportista;
use AppBundle\Form\EventodeportistaType;

class EventodeportistaController extends Controller
{

     public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $reservacions = $em->getRepository('AppBundle:Eventodeportista')->findAll();
                                                
        return $this->render('eventodeportista/login.html.twig', array(
            'reservacions' => $reservacions,
        ));
    }
    

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eventodeportistas = $em->getRepository('AppBundle:Eventodeportista')->findAll();

        return $this->render('eventodeportista/index.html.twig', array(
            'eventodeportistas' => $eventodeportistas,
        ));
    }

    public function newAction(Request $request)
    {
        $eventodeportistum = new Eventodeportista();
        $form = $this->createForm(EventodeportistaType::class, $eventodeportistum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($eventodeportistum);
            $em->flush();

            return $this->redirectToRoute('eventodeportista_show', array('id' => $eventodeportistum->getIdEventoDeportista()));
        }

        return $this->render('eventodeportista/new.html.twig', array(
            'eventodeportistum' => $eventodeportistum,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Eventodeportista $eventodeportistum)
    {
        return $this->render('eventodeportista/show.html.twig', array(
            'eventodeportistum' => $eventodeportistum,
        ));
    }

    public function editAction(Request $request, Eventodeportista $eventodeportistum)
    {
        $editForm = $this->createForm(EventodeportistaType::class, $eventodeportistum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($eventodeportistum);
            $em->flush();

            return $this->redirectToRoute('eventodeportista_edit', array('id' => $eventodeportistum->getIdEventoDeportista()));
        }

        return $this->render('eventodeportista/edit.html.twig', array(
            'eventodeportistum' => $eventodeportistum,
            'edit_form' => $editForm->createView(),
        ));
    }

 public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Eventodeportista");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('eventodeportista_index');        
    }
}
