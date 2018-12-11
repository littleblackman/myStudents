<?php


class Routeur
{

    private $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function render()
    {
        $action = $this->action;
        if($action == 'home')
        {
            include_once(CONTROLLER.'home.php');
        }

        if($action == 'create')
        {
            include_once(CONTROLLER.'create.php');
        }

        if($action == 'update')
        {
            include_once(CONTROLLER.'update.php');
        }

    }

}
