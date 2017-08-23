<!DOCTYPE html>
<html>
<body>

<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT name, slack, github, email FROM display';
   mysql_select_db('github');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "NAME :{$row['name']}  <br> ".
         "SLACK : {$row['slack']} <br> ".
         "GITHUB : {$row['github']} <br> ".
         "EMAIL : {$row['email']} <br> ".
         "<br>";
   }
   
   
   mysql_close($conn);
?>

</body>
</html>