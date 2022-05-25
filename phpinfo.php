<?php
    $host = '127.0.0.1';
    $user = 'root';
    $pw = 'gangyj0711';
    $dbName = 'sys';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
 
    if($mysqli){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
 $jb_connect = mysqli_connect( '127.0.0.1', 'root', 'gangyj0711', 'sys' );
  var_dump( $jb_connect );
phpinfo();
?>
