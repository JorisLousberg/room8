<?php
if( !isset($_SESSION)) 
{ 
  session_start(); 
} 

if ( !isset($_SESSION["total"]) )
{
  $_SESSION["total"] = 0;
  for ($i=0; $i<60; $i++)
  {
    $_SESSION["product"][$i] = 0;
    $_SESSION["price"][$i] = 0;
  }
}

if ( isset($_GET["add"]) )
{
  $i = $_GET["add"];
  $product = $_SESSION["product"][$i] + 1;
  $_SESSION["cart"][$i] = $i;
  $_SESSION["product"][$i] = $product;
  $_SESSION["total"] = $_SESSION["total"] + 1;
  echo $_SESSION["cart"][$i] . "<br>";
  echo $_SESSION["product"][$i] . "<br>";
  echo $_SESSION["total"];
}

