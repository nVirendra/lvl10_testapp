<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function test(){
        $users = User::with('posts')->get();
        foreach($users as $user){
            foreach($user->posts as $post){
                dd($user->name, $post->title);
            }
            
        }

    }
}
