<?php

namespace PlatsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PlatsBundle\Entity\Plats;
use PlatsBundle\Form\PlatsType;

/**
 * Plats controller.
 *
 */
class PlatsController extends Controller
{
    /**
     * Lists all Plats entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $plats = $em->getRepository('PlatsBundle:Plats')->findAll();

        return $this->render('plats/index.html.twig', array(
            'plats' => $plats,
        ));
    }

    /**
     * Creates a new Plats entity.
     *
     */
    public function newAction(Request $request)
    {
        $plat = new Plats();
        $form = $this->createForm('PlatsBundle\Form\PlatsType', $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plat);
            $em->flush();

            return $this->redirectToRoute('plats_show', array('id' => $plat->getId()));
        }

        return $this->render('plats/new.html.twig', array(
            'plat' => $plat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Plats entity.
     *
     */
    public function showAction(Plats $plat)
    {
        $deleteForm = $this->createDeleteForm($plat);

        return $this->render('plats/show.html.twig', array(
            'plat' => $plat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Plats entity.
     *
     */
    public function editAction(Request $request, Plats $plat)
    {
        $deleteForm = $this->createDeleteForm($plat);
        $editForm = $this->createForm('PlatsBundle\Form\PlatsType', $plat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plat);
            $em->flush();

            return $this->redirectToRoute('plats_edit', array('id' => $plat->getId()));
        }

        return $this->render('plats/edit.html.twig', array(
            'plat' => $plat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Plats entity.
     *
     */
    public function deleteAction(Request $request, Plats $plat)
    {
        $form = $this->createDeleteForm($plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($plat);
            $em->flush();
        }

        return $this->redirectToRoute('plats_index');
    }

    /**
     * Creates a form to delete a Plats entity.
     *
     * @param Plats $plat The Plats entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Plats $plat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plats_delete', array('id' => $plat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
