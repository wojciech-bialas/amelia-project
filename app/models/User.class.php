<?php

namespace app\models;

use core\App;
use core\Validator;

class User
{
    public static function login(): bool {
        if (User::validateUsername() && User::validatePassword()) {
            $user = App::getDB()->select("users", "*", [
                "login" => $_POST['login']
            ]);
            return password_verify($_POST['password'], $user[0]['password']);
        } else {
            App::getMessages()->addMessage("Walidacja niepomyślna.");
            return false;
        }
    }

    public static function logout() {
        session_destroy();
    }

    private static function validateUsername() {
        $v = new Validator();
        $login = $v->validateFromPost('login', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
        ]);
        App::getMessages()->addMessage("Nazwa użytkownika niepoprawna.", "login");
        return ($v->isLastOK());
    }

    private static function validatePassword() {
        $v = new Validator();
        $password = $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
        ]);
        App::getMessages()->addMessage("Hasło niepoprawne.", "password");
        return ($v->isLastOK());
    }
}