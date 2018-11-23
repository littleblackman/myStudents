<?php

// configuration
include_once('_config.php');




if($_GET['action'] == 'home')
{
    include_once(CONTROLLER.'home.php');
}

if($_GET['action'] == 'new')
{
    include_once(CONTROLLER.'new.php');
}

