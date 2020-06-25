<?php
  $task=$_POST['task'];

  // Db connection
  $conn=new mysqli('localhost','root','','todo_app');
  if($conn->connect_error){
     die('Connection Failed :' .$conn->connect_error);
  }else{
      $stmt=$conn->prepare("insert into tasks(task) values(?)");
      $stmt->bind_param("s",$task);
      $stmt->execute();
      echo 'Task added..!!';
      $stmt->close();
      $conn->close();
  }
?>