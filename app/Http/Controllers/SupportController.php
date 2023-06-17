<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function index()
    {
        $users = User::join('chats', 'chats.id_user', '=', 'users.id')->orderBy('chats.created_at', 'desc')
            ->get();
        
         return view('Support.index', compact('users'));
    }

   

    public function repp($id)
    {
        $chats = chat::join('users', 'users.id', '=', 'chats.id_user')->where("email",$id)->orderBy('chats.created_at', 'desc')->get();

        
        
        return view('Support.show_msg', compact('chats'));
    }
    public function ret(){

        
    }
    public function repond($id,Request $request){
        $re = chat::select()->where('id',$id)->first();
        $re->returnMsg=$request->returnMsg;
        $re->save();
        return redirect()->route('Support.index');
      }
    
    
      public function reponds($id){
        $re = chat::select()->where('id',$id)->get();
        return view('Support.show_msg' , compact('re' ) );
      }
    
    

    

 


}

