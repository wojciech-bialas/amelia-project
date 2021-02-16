<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HelloCtrl {
    
    public function action_hello() {
        
//        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
//        Utils::addInfoMessage("Or even easier message :-)");
        
//        App::getSmarty()->assign("bio",$bio);
        App::getSmarty()->assign("url",App::getConf()->app_url);
        App::getSmarty()->display("Hello.tpl");
        
    }

    public function action_files() {
        $files = App::getDB()->select("files", "*");
        App::getSmarty()->assign("list", $files);

        App::getSmarty()->assign("url", App::getConf()->app_url);
        App::getSmarty()->display("Files.tpl");
    }

    public function action_blog() {
        App::getSmarty()->assign("url", App::getConf()->app_url);
        $articles = App::getDB()->select("articles", "*");
        $articles = array_reverse($articles, true);
        App::getSmarty()->assign("articles", $articles);
        App::getSmarty()->display("Blog.tpl");
    }

    public function action_contact() {
        App::getSmarty()->assign("url",App::getConf()->app_url);
        App::getSmarty()->display("Contact.tpl");
    }
}
