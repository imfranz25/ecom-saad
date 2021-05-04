


<?php

    function mysql_connect(){
    	//Initialization
	    $dbhost = 'localhost';
	    $dbuser = 'root';
	    $dbpass = '';
	    $dbname = 'ecommerce';

	    return  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    }

?>