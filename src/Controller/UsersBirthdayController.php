<?php

namespace App\Controller;

use App\Entity\UsersBirthday;
use App\Repository\UsersBirthdayRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersBirthdayController extends AbstractController
{
    #[Route('/', name: 'app_users_birthday')]
    public function index(UsersBirthdayRepository $usersBirthdayRepository): Response
    {
        $users = $usersBirthdayRepository->findBy(array(), array('pension' => 'ASC'));

        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);

    }
}
