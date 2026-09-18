<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        // Each inner array represents one user record with consistent fields.
        $users = [
            ['username' => 'jacob', 'full_name' => 'Jian Acob', 'role' => 'Administrator'],
            ['username' => 'ivicencio', 'full_name' => 'Isaiah Vicencio', 'role' => 'Store Manager'],
            ['username' => 'abarcelona', 'full_name' => 'Aaron Barcelona', 'role' => 'Cashier'],
            ['username' => 'ajamito', 'full_name' => 'Amiel Jamito', 'role' => 'Cashier'],
            ['username' => 'smacaldo', 'full_name' => 'Sean Macaldo', 'role' => 'Inventory Staff'],
        ];

        // The complete users array is sent to the view for rendering.
        return view('users/index', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
