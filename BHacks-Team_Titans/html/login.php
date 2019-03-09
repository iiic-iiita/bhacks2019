
<?php
	session_start();
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('prof.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }
	$username = $_POST["username"];
	$password = $_POST["password"];
	
   $sql =<<<EOF
      SELECT * from USERS;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      if (($row['username'] == $username) && ($row['password'] == $password)) {
		  $_SESSION["name"] = $row['name'];
		  header("Location: update.php"); 
		  
		  exit();
		  }
   }
   $db->close();
?>
