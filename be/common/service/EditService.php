<?php
/**
 * Created by PhpStorm.
 * User: smzdm
 * Date: 2018/2/7
 * Time: 下午2:13
 */

namespace common\service;


use common\models\Article;

class EditService
{
    public static function editData($articleId) {
        $ret = [];
        if (empty($articleId)) {
            return $ret;
        }

        $article = Article::findArticle($articleId);
        if (empty($article)) {
            return $ret;
        }
        return $article;
    }

    public static function saveArticle($articleId, $fields) {
        $isNew = false;
        if (empty($articleId)) {
            $isNew = true;
        } else {
            $article = Article::findArticle($articleId);
            if (empty($article)) {
                $isNew = true;
            }
        }

        if ($isNew) {
            return Article::insertArticle($fields);
        }

        Article::updateArticle($fields, $articleId);
        return $articleId;
    }

    public static function unpubArticle($articleId) {
        return Article::updateArticle(['status' => 1], ['id' => $articleId]);
    }
}