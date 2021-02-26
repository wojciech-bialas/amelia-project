<?php

namespace app\controllers;

use core\App;
use core\Messages;
use core\RoleUtils;
use app\models\User;
use core\Validator;

class LoginCtrl
{
    public function action_login() {
        if (RoleUtils::inRole('author')) App::getRouter()->redirectTo("panel");
        App::getSmarty()->display("Login.tpl");
    }

    public function action_check_login() {
        if (User::login()) {
            RoleUtils::addRole("author");
            App::getRouter()->redirectTo("panel");
        } else {
            App::getRouter()->redirectTo("login");
        }
    }

    public function action_logout() {
        User::logout();
        App::getRouter()->redirectTo("Hello.tpl");
    }
}