<?php

namespace Tmr\JobeetBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 
 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations

use Tmr\JobeetBundle\Entity\Job;
use Tmr\JobeetBundle\Form\JobType;

use FOS\RestBundle\View\View;
/**
 * Job controller.
 *
 */
class JobController extends Controller
{
    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jobs = $em->getRepository('TmrJobeetBundle:Job')->findAll();

 

 
        return $jobs;


        /*return $this->render('job/index.html.twig', array(
            'jobs' => $jobs,
        ));*/
    }

    /**
     * Creates a new Job entity.
     *
     */
    public function newAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm('Tmr\JobeetBundle\Form\JobType', $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('job_show', array('id' => $job->getId()));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction(Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);

        return $this->render('job/show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction(Request $request, Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm('Tmr\JobeetBundle\Form\JobType', $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('job_edit', array('id' => $job->getId()));
        }

        return $this->render('job/edit.html.twig', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction(Request $request, Job $job)
    {
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('job_index');
    }

    /**
     * Creates a form to delete a Job entity.
     *
     * @param Job $job The Job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Job $job)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('job_delete', array('id' => $job->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
