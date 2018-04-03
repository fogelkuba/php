<?php
require_once("GuestAbstract.php");

class Moderator extends GuestAbstract
{
    function __construct()
    {
        $this->permission = PermissionsInterface::READ_POST
        | PermissionsInterface::WRITE_POST
        | PermissionsInterface::DELETE_POST;
    }
}
    ?>
