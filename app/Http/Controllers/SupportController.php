<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chats;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function index()
    {
        $users = User::join('chats', 'chats.id_user', '=', 'users.id')
            ->get();
        
         return view('Support.index', compact('users'));
    }

    public function show_msg()
    {
        
        
         return view('Support.show_msg');
    }

 


}

