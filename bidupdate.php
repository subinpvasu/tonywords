<?php

/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google AdWords API Developer - PHP
 *  Created On : 30 Nov, 2018 
 */


require_once './Advertising.php';
use adwords\Advertising;
$data = new Advertising();

$adgroupid = '64705340520';
$bid = array();
$bid[$adgroupid] =  array('294682000766'=>77,'415352181484'=>88,'372732145389'=>99,'372732145429'=>55);

foreach($bid as $k=>$v)
{
    $data->BidUpdate($data->getAdwordsServices(), $data->createSession(Credentials::$MASTER_ID), intval($k), $v);
}

