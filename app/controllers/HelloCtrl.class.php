<?php

namespace app\controllers;

use app\models\File;
use app\models\Post;
use core\App;
use core\Message;
use core\ParamUtils;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HelloCtrl {
    
    public function action_hello() {
        App::getSmarty()->display("Hello.tpl");
    }

    public function action_files() {
        App::getSmarty()->assign("list", File::retrieveAll());
        App::getSmarty()->display("Files.tpl");
    }

    public function action_blog() {
        App::getSmarty()->assign("articles", Post::retrieveAll());

        App::getSmarty()->display("Blog.tpl");
    }

    public function action_article() {
        $param = ParamUtils::getFromCleanURL(1);
        App::getSmarty()->assign("articles", Post::retrieveOne($param));
        App::getSmarty()->display("Article.tpl");
    }

    public function action_contact() {
        App::getSmarty()->display("Contact.tpl");
    }
}
