<?php

namespace app\models;

use core\App;

class File
{
    public static function create($title, $desc, $path) {
        App::getDB()->insert('files', [
            "title" => $title,
            "path" => $path,
            "description" => $desc,
            "time" => time(),
        ]);
    }

    public static function retrieveAll() {
        return App::getDB()->select("files", "*");
    }
}