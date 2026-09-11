<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['name' => 'Clarence Evasco', 'email' => 'cevasco@email.com', 'phone' => '09171112222'],
            ['name' => 'Lhinzie Alcarion', 'email' => 'lalcarion@email.com', 'phone' => '09173334444'],
            ['name' => 'Amei Shi', 'email' => 'ashi@email.com', 'phone' => '09175556666'],
            ['name' => 'Samantha Apolinar', 'email' => 'sapolinar@email.com', 'phone' => '09177778888'],
            ['name' => 'Alexander Hamilton', 'email' => 'ahamilton@email.com', 'phone' => '09179990000']
        ];

        return view('templates/header')
             . view('pages/customers', $data)
             . view('templates/footer');
    }
}