<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Repositories\User\UserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function hello(){
        $hello = $this->userRepository->helloWorld();
        return json_encode($hello);
    }
}
