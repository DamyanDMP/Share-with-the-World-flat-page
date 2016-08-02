<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-28 08:11:21
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___ajaxLogin")->via("POST")->name("ajaxlogin.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("updatemyaccount.index");

