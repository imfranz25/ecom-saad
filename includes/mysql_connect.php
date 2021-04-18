<?php

    // function mysql connect
    function mysql_connect(){

        // Initialization
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'ecommerce';

        // mysql connection
        return mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
        
    }//end
    
?>