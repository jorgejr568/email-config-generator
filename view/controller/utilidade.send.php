<?php
require_once PATH."model/class.tutorial.php";
$tClass=new tutorial();
$tClass->analyticIt($_POST['log'],$_POST['f']);