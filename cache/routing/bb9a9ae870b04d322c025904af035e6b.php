<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-27 08:00:54
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___indexAction")->via("GET")->name("signup.index");
$app->map("/signup", "SignupController::___postAction")->via("POST")->name("post.index");

