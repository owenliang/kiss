<?php
/**
 * Created by PhpStorm.
 * User: smzdm
 * Date: 2018/2/7
 * Time: 下午1:32
 */

namespace common\service;

use common\lib\helpers\Pager;
use common\models\Article;

class ListService
{
    public static function listArticles($page, $size = 20) {
        $page = $page < 1 ? 1 : $page;

        $articles = Article::listArticle($page - 1, $size);
        $total = Article::countArticle();

        $pager = Pager::calc($page, $size, count($articles), $total);

        $ret = ['articles' => $articles];
        return array_merge($ret, $pager);
    }

    public static function deleteArticle($articleId) {
        Article::deleteArticle($articleId);
    }
}