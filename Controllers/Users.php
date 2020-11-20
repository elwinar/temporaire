<?php 

namespace Controllers;

class Users {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            render('user/login', []);
            return;
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            render('user/register', []); 
            return;
        } 
    }
}
