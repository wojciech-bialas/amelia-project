<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use app\models\Post;
use app\models\File;

class AuthorCtrl
{
    public function action_create_post() {
        // brzydkie rowiązanie tymczasowe
        if ($_SERVER['REQUEST_METHOD'] === 'POST' &&
            isset($_POST['art-title']) && isset($_POST['editordata'])) {

            Post::create($_POST['art-title'], $_POST['editordata']);
            App::getRouter()->redirectTo('panel');
        }
        App::getSmarty()->display("Editor.tpl");
    }

    public function action_create_file() {
        // brzydkie rowiązanie tymczasowe
        if ($_SERVER['REQUEST_METHOD'] === 'POST'
            && isset($_FILES['userfile']) && isset($_POST['title']) && isset($_POST['description'])) {

            $uploadfile = 'C:\xampp74\htdocs\amelia\public\downloadable' . $_FILES['userfile']['name'];
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                File::create($_POST['title'], $_POST['description'], $_FILES['userfile']['name']);
            }
            App::getRouter()->redirectTo('panel');
        }
        App::getSmarty()->display("Upload.tpl");
    }

    public function action_panel() {
        App::getSmarty()->display("Panel.tpl");
    }
}