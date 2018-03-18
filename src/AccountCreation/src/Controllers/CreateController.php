<?php

namespace OpenAAC\Account\Creation\Controllers;

use OpenAAC\Contracts\Account;

class CreateController
{
    public function show(Account $account)
    {
        $account = $account->find(1);

        return view('account-creation::hello', [
            'name' => $account->name,
        ]);
    }
}
