<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-29 01:49:38
 */

$app = Yee\Yee::getInstance();

$app->map("/addArticle", "addArticleController::___indexAction")->via("GET")->name("addarticle.index");
$app->map("/addArticle", "addArticleController::___postAction")->via("POST")->name("post.index");

