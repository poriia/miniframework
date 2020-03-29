<?php

class UserController
{
    public function index()
    {
        $pageTitle = 'Users List';
        $users = App::get('database')->selectAll('users');
        
        return View::load('client/users/index', compact('users', 'pageTitle'));
    }
    
    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
        ]);
        
        Redirect::route('users');
    }
    
}