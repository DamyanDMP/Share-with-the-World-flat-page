<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 07:58:37
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "myAccountController::___indexAction")->via("GET")->name("myaccount.index");

