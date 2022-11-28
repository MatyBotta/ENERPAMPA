<?php
if(!isset($_SESSION))
{
    session_start();
}
$_SESSION['mail'] = null;
include("index.html");