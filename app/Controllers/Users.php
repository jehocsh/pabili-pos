<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'jehocsh', 'name' => 'Josh Herrera', 'role' => 'Administrator'],
            ['username' => 'mimi.kyun', 'name' => 'Samantha Ching', 'role' => 'Cashier'],
            ['username' => 'rovyxcube', 'name' => 'Rovic Bilbao', 'role' => 'Store Manager'],
            ['username' => 'curtyy', 'name' => 'Curt Segismundo', 'role' => 'Inventory Clerk'],
            ['username' => 'stohlas', 'name' => 'Gervin Sison', 'role' => 'Cashier']
        ];

        return view('templates/header')
             . view('pages/users', $data)
             . view('templates/footer');
    }
}