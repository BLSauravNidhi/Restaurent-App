<?php

namespace App\Http\Controllers;

use App\Models\TableSession;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HomePage() {
        return view('customer.welcome');
    }

    public function tableMenu(string $tableNum, string $token){
        $verifyTableAccess = TableSession::where('table_number', $tableNum)
            ->where('session_token',$token)
            ->where('expires_at','>', now())
            ->first();
        // return $verifyTableAccess ;
        if($verifyTableAccess){
            return view('customer.table-menu', ['tableNum' => $tableNum, 'token' => $token]);
        } else {
            return redirect()->route('HomePage');
        }
    }
}
