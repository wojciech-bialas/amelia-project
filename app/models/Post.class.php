<?php

namespace app\models;

use core\App;

class Post
{
    public static function create($title, $body) {
        $short = Post::makeAbbreviation($body);
        App::getDB()->insert('articles', [
            "title" => $title,
            "body" => $body,
            "abbreviation" => $short,
            "time" => time(),
        ]);
    }

    public function delete() {

    }

    public static function retrieveAll() {
        $articles = App::getDB()->select("articles", "*");
        $articles = Post::makeDate($articles);
        return array_reverse($articles, true);
    }

    public static function update() {

    }

    public static function retrieveOne($id) {
        $article = App::getDB()->select("articles", "*", [
            "ID" => $id,
        ]);
        return Post::makeDate($article);
    }

    private static function makeAbbreviation($string) {
        if (strlen($string) > 200) {
            return substr($string, 0, strrpos(substr($string, 0, 200), ' ')) . "(...)";
        } else {
            return $string;
        }
    }

    private static function makeDate($articles) {
        foreach($articles as &$article) {
            $article["time"] = date("l jS \of F Y h:i A", $article["time"]);
        }
        unset($article);
        return $articles;
    }
}