<?php
/**
 * Created by PhpStorm.
 * User: smzdm
 * Date: 2018/2/7
 * Time: 下午3:32
 */

namespace common\service;


use common\lib\helpers\Pager;
use common\models\Article;

class ArticleService
{
    public static function getArticle($articleId) {
        return Article::findArticle($articleId);
    }

    public static function listArticles($page, $size = 20) {
        $page = $page < 1 ? 1 : $page;

        $articles = Article::listArticle($page - 1, $size);
        $total = Article::countArticle();

        $pager = Pager::calc($page, $size, count($articles), $total);

        $ret = ['articles' => $articles];
        return array_merge($ret, $pager);
    }
}