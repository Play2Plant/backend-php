<?php

namespace App\Controller;

use App\Entity\LeafTracker;
use App\Form\LeafTrackerType;
use App\Repository\LeafTrackerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/leaf/tracker')]
class LeafTrackerController extends AbstractController
{
    #[Route('/', name: 'leaf_tracker_index', methods: ['GET'])]
    public function index(LeafTrackerRepository $leafTrackerRepository): Response
    {
        return $this->render('leaf_tracker/index.html.twig', [
            'leaf_trackers' => $leafTrackerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'leaf_tracker_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $leafTracker = new LeafTracker();
        $form = $this->createForm(LeafTrackerType::class, $leafTracker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($leafTracker);
            $entityManager->flush();

            return $this->redirectToRoute('leaf_tracker_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('leaf_tracker/new.html.twig', [
            'leaf_tracker' => $leafTracker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'leaf_tracker_show', methods: ['GET'])]
    public function show(LeafTracker $leafTracker): Response
    {
        return $this->render('leaf_tracker/show.html.twig', [
            'leaf_tracker' => $leafTracker,
        ]);
    }

    #[Route('/{id}/edit', name: 'leaf_tracker_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, LeafTracker $leafTracker, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LeafTrackerType::class, $leafTracker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('leaf_tracker_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('leaf_tracker/edit.html.twig', [
            'leaf_tracker' => $leafTracker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'leaf_tracker_delete', methods: ['POST'])]
    public function delete(Request $request, LeafTracker $leafTracker, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$leafTracker->getId(), $request->request->get('_token'))) {
            $entityManager->remove($leafTracker);
            $entityManager->flush();
        }

        return $this->redirectToRoute('leaf_tracker_index', [], Response::HTTP_SEE_OTHER);
    }
}
