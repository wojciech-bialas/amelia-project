<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;

class LoginCtrl
{
    public function action_login() {
        if(isset($_POST['login'])) {
            $user = App::getDB()->select("users", "*", [
                "login" => $_POST['login']
            ]);
            if(password_verify($_POST['password'], $user[0]['password'])) {
                RoleUtils::addRole("author");
                App::getRouter()->redirectTo("panel");
            } else {
                App::getSmarty()->assign("message", "Niepoprawne dane logowania!");
            }
        }
        App::getSmarty()->assign("url", App::getConf()->app_url);
        App::getSmarty()->display("Login.tpl");
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo("Hello.tpl");
    }
}