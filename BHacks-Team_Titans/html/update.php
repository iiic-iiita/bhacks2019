<?php
 session_start();
?>
<html>
    <head>
    <title>Location Update</title>
    </head>
    <body>
        <form action="updateloc.php" method="POST">
        <p>Location</p><input type="text" name="location"/>
        <br/>
        <input type="submit" value="login"/>
        </form>
    </body>
</html>
