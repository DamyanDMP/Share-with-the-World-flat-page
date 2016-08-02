<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-28 07:27:05
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "MyAccountController::___indexAction")->via("GET")->name("myaccount.index");

