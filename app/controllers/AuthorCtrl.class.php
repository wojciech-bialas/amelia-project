<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;

class AuthorCtrl
{
    public function action_panel() {
        App::getSmarty()->display("Panel.tpl");
    }
}