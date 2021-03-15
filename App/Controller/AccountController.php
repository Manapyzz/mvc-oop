<?php

namespace App\Controller;

use App\Model\AccountModel;
use Framework\Controller;

class AccountController extends Controller
{
    public function showAccountForm()
    {
        $account = null;

        if (isset($_POST['id'])) {
            $accountModel = new AccountModel();
            $account = $accountModel->getAccount($_POST['id']);

            $this->renderTemplate('account-view.html.twig', [
                'account' => $account
            ]);

            return;
        }

        $this->renderTemplate('account-create.html.twig');
    }
}