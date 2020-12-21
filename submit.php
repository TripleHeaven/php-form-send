<?php
  function OpenAndWriteCon()
  {
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "12345";
  $db = "inputInformation";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
  }
 function CloseCon($conn)
  {
  $conn -> close();
  }


  echo "Name: " . $_POST['name'] . "\n";
  echo "Email: " . $_POST['email'] . "\n";
  echo "Phone: " . $_POST['phone'] . "\n";
  echo "Text: " . $_POST['textT'] . "\n";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $text = $_POST['textT'] ;
  mail("test@example.com","Test", "Hello its a test email");

  // connection to db
  $conn = OpenAndWriteCon();
  echo "Connected to db succesfully";
  $sql = "INSERT INTO persons (fullname , email , phone , textT) VALUES ('$name' , '$email', '$phone', '$text')";
  if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}
  CloseCon($conn);


?>