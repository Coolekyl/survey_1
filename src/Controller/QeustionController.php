<?php

namespace App\Controller;

use App\Entity\Qeustion;
use App\Form\QeustionType;
use App\Repository\QeustionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/qeustion")
 */
class QeustionController extends AbstractController
{
    /**
     * @Route("/", name="qeustion_index", methods={"GET"})
     */
    public function index(QeustionRepository $qeustionRepository): Response
    {
        return $this->render('qeustion/index.html.twig', [
            'qeustions' => $qeustionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="qeustion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $qeustion = new Qeustion();
        $form = $this->createForm(QeustionType::class, $qeustion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($qeustion);
            $entityManager->flush();

            return $this->redirectToRoute('qeustion_index');
        }

        return $this->render('qeustion/new.html.twig', [
            'qeustion' => $qeustion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="qeustion_show", methods={"GET"})
     */
    public function show(Qeustion $qeustion): Response
    {
        return $this->render('qeustion/show.html.twig', [
            'qeustion' => $qeustion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="qeustion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Qeustion $qeustion): Response
    {
        $form = $this->createForm(QeustionType::class, $qeustion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('qeustion_index');
        }

        return $this->render('qeustion/edit.html.twig', [
            'qeustion' => $qeustion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="qeustion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Qeustion $qeustion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$qeustion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($qeustion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('qeustion_index');
    }
}
