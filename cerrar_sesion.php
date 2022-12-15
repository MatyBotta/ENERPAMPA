<?php
if(!isset($_SESSION))
{
    session_start();
}
$_SESSION['mail'] = null;
header("Location:index.html");