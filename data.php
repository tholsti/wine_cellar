<?php

require "DBBlackbox.php";
require "edit.php";

$wines = [
  "producer" => "",
  "name" => "",
  "vintage" => "",
  "grape" => [],
  "region" => [
    "country" => "",
    "area" => "",
    "terroir" => ""],
  "description" => [
    "body" => "",
    "bouquet" => "",
    "alcohol_content" => "",
    "maturation" => "",
    "comments" => "",
  ],
  "price" => ""
];


    

var_dump(select());