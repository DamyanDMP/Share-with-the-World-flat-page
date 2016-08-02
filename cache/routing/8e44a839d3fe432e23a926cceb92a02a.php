<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-31 11:49:53
 */

$app = Yee\Yee::getInstance();

$app->map("/addCategory", "addCategoryController::___indexAction")->via("GET")->name("addcategory.index");
$app->map("/addCategory", "addCategoryController::___postAction")->via("POST")->name("post.index");

