<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Deporte;
use AppBundle\Form\DeporteType;


class DeporteController extends Controller
{
 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deportes = $em->getRepository('AppBundle:Deporte')->findAll();

        return $this->render('deporte/index.html.twig', array(
            'deportes' => $deportes,
        ));
    }

    public function newAction(Request $request)
    {
        $deporte = new Deporte();
        $form = $this->createForm(DeporteType::class, $deporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deporte);
            $em->flush();

            return $this->redirectToRoute('deporte_show', array('id' => $deporte->getIdDeporte()));
        }

        return $this->render('deporte/new.html.twig', array(
            'deporte' => $deporte,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Deporte $deporte)
    {
        return $this->render('deporte/show.html.twig', array(
            'deporte' => $deporte,
        ));
    }

    public function editAction(Request $request, Deporte $deporte)
    {
        $editForm = $this->createForm(DeporteType::class, $deporte);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deporte);
            $em->flush();

            return $this->redirectToRoute('deporte_edit', array('id' => $deporte->getIdDeporte()));
        }

        return $this->render('deporte/edit.html.twig', array(
            'deporte' => $deporte,
            'edit_form' => $editForm->createView(),
        ));
    }

  public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Deporte");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('deporte_index');        
    }
}
