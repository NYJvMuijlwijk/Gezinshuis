<?php
/**
 * Created by PhpStorm.
 * User: Arthur Rooijen
 * Date: 28/10/2018
 * Time: 00:33
 */

class Verify
{
    public function role($role_required)
    {
//        check if user is admin
        if (password_verify('admin', $_SESSION["role"])) {
            return true;
//        check if user has $role_required role
        } elseif (password_verify($role_required, $_SESSION["role"])) {
            return true;
        } else {
            return false;
        }
    }


    //checks id required returs true if passed, false if denied
    public function id($id_required)
    {
    //        check if user is admin
        if (password_verify('admin', $_SESSION["role"])) {
            return true;}
    //      check if user has $id_required
        elseif (password_verify($id_required, $_SESSION["id"])) {
            return true;
        } else{
            return false;
        }
}
}