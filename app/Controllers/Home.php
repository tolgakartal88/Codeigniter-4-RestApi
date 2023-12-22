<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $users = new \App\Models\UsersModel();
        $this->data['users'] = $users->findAll();
        return view('home/index',$this->data);
    }
}
