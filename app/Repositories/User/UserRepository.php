<?php

namespace App\Repositories\User;

interface UserRepository
{
    public function insert($params);
    public function delete($id);
    public function update($params);
    public function findUser($id);

    public function helloWorld();
}