<?php
class MY_controller extends CI_Controller{
    public function mytest(){
        echo "I just extended core controllers class.";
    }
 }

 class AdminController extends MY_controller{
    // you can define methods as per your admin requirement
     public function test(){
         echo "I am part of admin";
     }
 }

 class VendorController extends MY_controller{
    // you can define methods as per your vendor requirement
     public function test(){
         echo "I am part of vendor";
     }
 }

 class UserController extends MY_controller{
    // you can define methods as per your user requirement
     public function test(){
         echo "I am part of user";
     }
 
}


?>