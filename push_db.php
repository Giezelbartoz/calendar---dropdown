<?php
  $tgl=$_POST['date'];
  $bln=$_POST['month'];
  $thn=$_POST['year'];
  echo $thn.' - '.$bln.' - '.$tgl;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dropdown";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO `input` (`calendar`) VALUES ('$thn-$bln-$tgl');";
    if ($conn->query($sql) === TRUE) {
        echo "<br> Add birth date successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  $conn->close();
?>
