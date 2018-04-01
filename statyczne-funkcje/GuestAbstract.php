<?php
require_once("PermissionsInterface.php");

abstract class GuestAbstract implements PermissionsInterface
{
    protected $permission = 0;

    abstract function __construct();

    static function checkPermission($userPermission, $permission){
        if ($userPermission & $permission) {
            return true;
        }
        return false;
    }

    function getPermission(){
        return $this->permission;
    }

    function isPermitted($permission){
        if ($this->permission & $permission) {
            return true;
        }
        return false;
    }
    function readPost($postId){
        if ($this->isPermitted(PermisionsInterface::READ_POST)) {
            echo "czytam post  mający ID: $postId"."<br />";
        }

    }
}
 ?>
