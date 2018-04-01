<?php
require_once("GuestAbstract.php");

class User extends GuestAbstract
{
    function __construct()
    {
        $this->permission = PermissionsInterface::READ_POST | PermissionsInterface::WRITE_POST;
    }
}
    ?>
