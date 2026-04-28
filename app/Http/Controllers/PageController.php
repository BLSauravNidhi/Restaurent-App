<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HomePage() {
        return view('customer.welcome');
    }

    public function tableMenu(string $tableNum, string $token){
        return view('customer.table-menu', ['tableNum' => $tableNum, 'token' => $token]);
    }
}
