<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Deportista;
use AppBundle\Form\DeportistaType;


class DeportistaController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deportistas = $em->getRepository('AppBundle:Deportista')->findAll();

        return $this->render('deportista/index.html.twig', array(
            'deportistas' => $deportistas,
        ));
    }


    public function newAction(Request $request)
    {
        $deportistum = new Deportista();
        $form = $this->createForm(DeportistaType::class, $deportistum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deportistum);
            $em->flush();

            return $this->redirectToRoute('deportista_show', array('id' => $deportistum->getIdDeportista()));
        }

        return $this->render('deportista/new.html.twig', array(
            'deportistum' => $deportistum,
            'form' => $form->createView(),
        ));
    }


    public function showAction(Deportista $deportistum)
    {
        return $this->render('deportista/show.html.twig', array(
            'deportistum' => $deportistum,            
        ));
    }


    public function editAction(Request $request, Deportista $deportistum)
    {        
        $editForm = $this->createForm(DeportistaType::class, $deportistum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deportistum);
            $em->flush();

            return $this->redirectToRoute('deportista_edit', array('id' => $deportistum->getIdDeportista()));
        }

        return $this->render('deportista/edit.html.twig', array(
            'deportistum' => $deportistum,
            'edit_form' => $editForm->createView(),            
        ));
    }

     public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Deportista");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('deportista_index');        
    }

}
