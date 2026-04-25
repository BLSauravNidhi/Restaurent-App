<?php

namespace App\Http\Controllers;

// use App\Models\Table;
use App\Models\TableSession;

// use Illuminate\Http\Request;

class TableController extends Controller
{
    public function GetTableAccess(string $tableId){
        // check status 
        $hasSession = TableSession::where('table_id', $tableId)
            ->where('active', true)
            ->where('expires_at', '>', now())->first();

        if($hasSession){
            return $hasSession;
        } else {
            return "waiting for approval";
        }
    }
}
