<?php
    
    $user = 'root';
    $password = 'root';
    $db = 'mysql';
    $host = 'localhost';
    $port = 8889;
    
 
    
    // Create connection
    $conn = new mysqli("$host:$port", $user, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    $sql = sprintf("INSERT INTO `Invites` (`email`, `fname`, `sname`, `attending`, `cambo`, `bbq`, `diet`, `song`, `comments`, `timestamp`) VALUES ('%s', '%s', '%s', '%u', '%u', '%u', '%s', '%s', '%s', CURRENT_TIMESTAMP)",
                   $_POST['email'],
                   $_POST['fname'],
                   $_POST['sname'],
                   $_POST['attending'],
                   $_POST['cambo'],
                   $_POST['bbq'],
                   $_POST['diet'],
                   $_POST['song'],
                   $_POST['comment']
                   );
    
//    echo $sql;
    if ($conn->query($sql) === TRUE) {
//      echo "New record created successfully";
    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    
    
//    print_r($_POST);
    
   
header( 'Location: index.html#RSVP' ) ;
?>
