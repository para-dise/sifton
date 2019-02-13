<?php
//vars
$email = $_POST["email"];
if(isset($email)) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email.");
  }
}
if(!isset($email)) {
  die("No params set.");
}
$dbh = new PDO('mysql:host=localhost;dbname=dbname', "dbuser", "dbpass");
$res = $dbh->query('SHOW TABLES');
$tables = $res->fetchAll(PDO::FETCH_COLUMN);
foreach ($tables as $table) {
  $stmt2 = $dbh->prepare("SELECT * FROM " . $table . " WHERE email=:em LIMIT 50");
  $stmt2->bindParam(':em', $email, PDO::PARAM_STR);
  $stmt2->execute();
  $result2 = $stmt2->fetchAll();
  foreach ($result2 as $row) {
    echo "<br />";
    $returnusername = $row["username"];
    $returnpassword = $row["pass"];
    $returnemail = $row["email"];
    $returnhash = $row["hash"];
    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $address = $row["address"];
    $ip = $row["ip"];
    $lastip = $row["lastip"];
    $returnsalt = $row["salt"];
    if(!is_null($returnusername) || !is_null($returnpassword) || !is_null($returnemail) || !is_null($returnhash) || !is_null($fname) || !is_null($lname)) {
      if(strpos($table, '_')) {
        $echome = str_replace("_",".",$table);
      } else {
        $echome = $table;
      }
      echo "<h1>Database Name: " . $echome . "</h1>";
    }
    if(!is_null($returnusername)) {
      echo "Username: " . htmlspecialchars($returnusername) . "<br />";
    }
    if(!is_null($returnemail)) {
      echo "E-Mail: " . htmlspecialchars($returnemail) . "<br />";
    }
    if(!is_null($fname)) {
      echo "First Name: " . htmlspecialchars($fname) . "<br />";
    }
    if(!is_null($lname)) {
      echo "Last Name: " . htmlspecialchars($lname) . "<br />";
    }
    if(!is_null($returnpassword)) {
      echo "Password: " . htmlspecialchars($returnpassword) . "<br />";
    }
    if(!is_null($returnhash)) {
      echo "Hash: " . htmlspecialchars($returnhash) . "<br />";
    }
    if(!is_null($returnsalt)) {
      echo "Salt: " . htmlspecialchars($returnsalt) . "<br />";
    }
    if(!is_null($address)) {
      echo "Address: " . htmlspecialchars($address) . "<br />";
    }
    if(!is_null($ip)) {
      echo "IP: " . htmlspecialchars($ip) . "<br />";
    }
    if(!is_null($lastip)) {
      echo "IP: " . htmlspecialchars($lastip) . "<br />";
    }
  }
  $result2 = null;
}
$dbh = null;
?>
