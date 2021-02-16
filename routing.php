<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login');

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('files', 'HelloCtrl');
Utils::addRoute('blog', 'HelloCtrl');
Utils::addRoute('contact', 'HelloCtrl');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('panel', 'AuthorCtrl', ['author']);