<?php

namespace Kdv\WorkerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Kdv\WorkerBundle\Entity\Worker;
use Kdv\WorkerBundle\Form\WorkerType;

/**
 * Worker controller.
 *
 * @Route("/admin/worker")
 */
class WorkerController extends Controller
{
    /**
     * Lists all Worker entities.
     *
     * @Route("/", name="admin_worker_index")
     * @Method("GET")
     * @Template
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workers = $em->getRepository('KdvWorkerBundle:Worker')->findAll();

        return  array(
            'workers' => $workers,
        );
    }

    /**
     * Creates a new Worker entity.
     *
     * @Route("/new", name="admin_worker_new")
     * @Method({"GET", "POST"})
     * @Template
     */
    public function newAction(Request $request)
    {
        $worker = new Worker();
        $form = $this->createForm('Kdv\WorkerBundle\Form\WorkerType', $worker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($worker);
            $em->flush();

            return $this->redirectToRoute('admin_worker_show', array('id' => $worker->getId()));
        }

        return  array(
            'worker' => $worker,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Worker entity.
     *
     * @Route("/{id}", name="admin_worker_show")
     * @Method("GET")
     * @Template
     */
    public function showAction(Worker $worker)
    {
        $deleteForm = $this->createDeleteForm($worker);

        return array(
            'worker' => $worker,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Worker entity.
     *
     * @Route("/{id}/edit", name="admin_worker_edit")
     * @Method({"GET", "POST"})
     * @Template
     */
    public function editAction(Request $request, Worker $worker)
    {
        $deleteForm = $this->createDeleteForm($worker);
        $editForm = $this->createForm('Kdv\WorkerBundle\Form\WorkerType', $worker);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($worker);
            $em->flush();

            return $this->redirectToRoute('admin_worker_edit', array('id' => $worker->getId()));
        }

        return  array(
            'worker' => $worker,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Worker entity.
     *
     * @Route("/{id}", name="admin_worker_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Worker $worker)
    {
        $form = $this->createDeleteForm($worker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($worker);
            $em->flush();
        }

        return $this->redirectToRoute('admin_worker_index');
    }

    /**
     * Creates a form to delete a Worker entity.
     *
     * @param Worker $worker The Worker entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Worker $worker)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_worker_delete', array('id' => $worker->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
