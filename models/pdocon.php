<?php 
/*** mysql hostname ***/
$hostname = 'localhost';
/*** mysql username ***/
$username = 'root';
/*** mysql password ***/
$password = '';
$dbname='mat_kostec';

try {
    /*** connect to MYSQL database ***/
    $pdo=new PDO("mysql:dbname=$dbname;host=$hostname",$username,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo 'Connected to database';
} catch(PDOException $e){
    echo $e->getMessage();
}

?>
