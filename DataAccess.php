<?php


class DataAccess {
    

    function GetOracleConnection(){
        try{
            //database connection settings With Pear Oracle
	    ini_set('include_path', 'C:/wamp64/bin/php/php5.6.25/pear');
            require_once 'MDB2.php';

            //Database Connection Settings Using Pear Oracle, Declared once and used across all pages by just calling DataAccess.php file.
	    $dsn = array(
		'phptype' => 'oci8',
		'hostspec' => '10.0.0.57:1521/trn.bac.ac.bw',  
		'username' => 'busani', 
		'password' => 'martinjames', 
	    );

	    $conn = MDB2::factory($dsn);

            return $conn;  
            
        } catch (Exception $ex) {
            throw $ex;
        }
    }
    
    
    
}
