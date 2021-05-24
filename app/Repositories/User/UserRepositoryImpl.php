<?php
namespace App\Repositories\User;
use Illuminate\Support\Facades\DB;
use App\Repositories\User\UserRepository;
use App\Models\User;


class UserRepositoryImpl implements UserRepository
{
    public function insert($params){
        
    }
    public function delete($id){
        
    }
    public function update($params){
        
    }
    public function findUser($id){
        
    }

    public function helloWorld(){
        return "Hello World";
    }
}