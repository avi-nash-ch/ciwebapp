<?php
class Hello 
{
public function test(){
    $CI =& get_instance();
    $CI->load->library('Email');
    echo "This is Hello Library";
    }
}

?>