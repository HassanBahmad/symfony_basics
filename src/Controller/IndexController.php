<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\Type\OffreType;
use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(EntityManagerInterface $entityManager , Request $request , OffreRepository $repository): Response
    {
        $offres = $repository->findAll();
        $offre = new Offre();
        $form = $this->createForm(OffreType::class , $offre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_index');
        }
        return $this->render('index/index.html.twig', [
            'form' => $form,
            'offres' => $offres,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_delete')]
    public function delete(EntityManagerInterface $entityManager ,  OffreRepository $repository , $id): Response
    {
        $offre = $repository->find($id);
        $entityManager->remove($offre);
        $entityManager->flush();
        return $this->redirectToRoute('app_index');

    }
}
