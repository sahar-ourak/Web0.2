<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\StudentController;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function showTeacher(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'name' => 'Sahar',
        ]);
    }
    #[Route('/teacher2', name: 'app_teacher2')]
    public function goToIndex(): Response
    {
        $student = new StudentController;
        return $student->index();
    }
}
