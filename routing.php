<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login');

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('files', 'HelloCtrl');
Utils::addRoute('blog', 'HelloCtrl');
Utils::addRoute('contact', 'HelloCtrl');
Utils::addRoute('article', 'HelloCtrl');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('check_login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('panel', 'AuthorCtrl', ['author']);
Utils::addRoute('create_post', 'AuthorCtrl', ['author']);
Utils::addRoute('create_file', 'AuthorCtrl', ['author']);