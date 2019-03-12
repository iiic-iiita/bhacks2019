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
	$loca = $_POST["location"];
	$username = $_SESSION['name'];
	$date = date("Y-m-d") ;
	$time = date("h:i:sa");
   $sql =<<<EOF
      UPDATE PROFESSOR set LOCATION = '$loca', TIME = '$date  $time' where NAME = '$username';
EOF;
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      header("Location: index.html"); 
		  
	  exit();
   }

   $db->close();
?>
