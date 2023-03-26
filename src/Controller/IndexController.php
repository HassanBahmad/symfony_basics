<?php

namespace App\Controller;

use App\Form\Type\OffreType;
use App\Model\OffreForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $offre = new OffreForm();
        $form = $this->createForm(OffreType::class , $offre);
        return $this->render('index/index.html.twig', [
            'form' => $form,
        ]);
    }
}
