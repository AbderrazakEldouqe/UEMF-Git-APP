<?php
  
     class Database
     {
     private static	$dbHost="tmdm1.systemee.ma";
     private static	$dbName="hamzaDataBase";
     private static	$dbUser="hamza";
     private static	$dbUserPassword="123456";
     private static	$connection=null;

       
   public static  function connect()
     {
     	try
       {
      // self:: $connection= new PDO("host=".self::$dbHost ." dbname=".self::$dbName ." user=".self::$dbUser ." password=".self::$dbUserPassword);
      self:: $connection=new PDO("pgsql:host=".self::$dbHost .";dbname=".self::$dbName,self::$dbUser,self::$dbUserPassword);
       }
       catch(PDOException $e)
       {
       	die($e->getMessage());
       }
       return self::$connection;
     }
   public static  function disconnect()
     {
     	$connection=null;
     }


     }

     Database::connect();

 ?>