<?php

namespace App\Controller;

use App\Model\AccountModel;
use Framework\Controller;

class HomeController extends Controller
{
    public function homepage()
    {
        $articleModel = new AccountModel();
        $accounts = $articleModel->getAll();

        $username = 'Alex';

        $this->renderTemplate('homepage.html.twig', [
            'username' => $username,
            'accounts' => $accounts
        ]);
    }
}