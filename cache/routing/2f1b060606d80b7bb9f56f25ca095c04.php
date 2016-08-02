<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-30 05:54:13
 */

$app = Yee\Yee::getInstance();

$app->map("/articles", "articlesController::___indexAction")->via("GET")->name("articles.index");
$app->map("/articles2/:id", "articlesController::___articlesAction")->via("GET")->name("articles2.index");
$app->map("/articles2/category/:id", "articlesController::___categoryAction")->via("GET")->name("articles2/category.index");

