<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ReferralPartner;
use AppBundle\Form\ReferralPartnerType;

/**
 * ReferralPartner controller.
 *
 * @Route("/referralpartner")
 */
class ReferralPartnerController extends Controller
{
    /**
     * Lists all ReferralPartner entities.
     *
     * @Route("/", name="referralpartner_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $referralPartners = $em->getRepository('AppBundle:ReferralPartner')->findAll();

        return $this->render('referralpartner/index.html.twig', array(
            'referralPartners' => $referralPartners,
        ));
    }

    /**
     * Creates a new ReferralPartner entity.
     *
     * @Route("/new", name="referralpartner_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $referralPartner = new ReferralPartner();
        $form = $this->createForm('AppBundle\Form\ReferralPartnerType', $referralPartner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($referralPartner);
            $em->flush();

            return $this->redirectToRoute('referralpartner_show', array('id' => $referralpartner->getId()));
        }

        return $this->render('referralpartner/new.html.twig', array(
            'referralPartner' => $referralPartner,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ReferralPartner entity.
     *
     * @Route("/{id}", name="referralpartner_show")
     * @Method("GET")
     */
    public function showAction(ReferralPartner $referralPartner)
    {
        $deleteForm = $this->createDeleteForm($referralPartner);

        return $this->render('referralpartner/show.html.twig', array(
            'referralPartner' => $referralPartner,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReferralPartner entity.
     *
     * @Route("/{id}/edit", name="referralpartner_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ReferralPartner $referralPartner)
    {
        $deleteForm = $this->createDeleteForm($referralPartner);
        $editForm = $this->createForm('AppBundle\Form\ReferralPartnerType', $referralPartner);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($referralPartner);
            $em->flush();

            return $this->redirectToRoute('referralpartner_edit', array('id' => $referralPartner->getId()));
        }

        return $this->render('referralpartner/edit.html.twig', array(
            'referralPartner' => $referralPartner,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ReferralPartner entity.
     *
     * @Route("/{id}", name="referralpartner_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ReferralPartner $referralPartner)
    {
        $form = $this->createDeleteForm($referralPartner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($referralPartner);
            $em->flush();
        }

        return $this->redirectToRoute('referralpartner_index');
    }

    /**
     * Creates a form to delete a ReferralPartner entity.
     *
     * @param ReferralPartner $referralPartner The ReferralPartner entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReferralPartner $referralPartner)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referralpartner_delete', array('id' => $referralPartner->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
