<?php
//overwrite the email
// system folder se na call ho kr ke hmne jo class diya vo call ho jayegi 
class CI_email
{
    public function mytest(){
        echo "I am just extending email library";
    }
    
}

?>