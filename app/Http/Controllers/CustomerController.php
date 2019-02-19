<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            '0' => [
                'id' => 1,
                'name' => 'customer1',
                'email' => 'customer1@mail.com',
                'phonenumber' => '098888888'
            ],
            '1' => [
                'id' => 2,
                'name' => 'customer2',
                'email' => 'customer2@mail.com',
                'phonenumber' => '099999999'
            ]
        ];
        return view('list', compact('customers'));
    }
}
