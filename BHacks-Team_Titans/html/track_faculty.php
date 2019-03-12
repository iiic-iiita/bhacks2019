<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('prof.db');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   }

   $sql =<<<EOF
      SELECT * from PROFESSOR;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "NAME = ". $row['name'] ."\n";
      echo "LOCATION = ". $row['location'] ."\n";
      echo "TIME = ".$row['time'] ."\n\n";
      echo "<br>";
   }
   $db->close();
?>
