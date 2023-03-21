<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\HttpFoundation\RedirectResponse;
class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TeacherController.php',
        ]);
        
    }
     #[Route('/teacher1/{name}', name: 'app_teacher1')]
    public function show($name):Response
    {
        
        
        return $this -> render('teacher.html.twig',["name"=>$name]);
        
    }
    #[Route('/teacher2', name: 'app_teacher2')]
    public function index1(): RedirectResponse
    {
        return $this->redirectToRoute('app_teacher');
        
    }
}
