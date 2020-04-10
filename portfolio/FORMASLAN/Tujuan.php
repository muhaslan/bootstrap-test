<?php
parse_str($_POST['dataku'], $hasil);

/*
echo 'firstName : ' . $hasil['firstName'];
echo 'lastName  : ' . $hasil['lastName'];
echo 'username : ' . $hasil['username'];
echo 'email : ' . $hasil['email'];
echo 'address : ' . $hasil['address'];
*/

//$hostname = "localhost";
//$username = "root";
//$password = "";
//$databaseName = "billing";

$sqlcon = mysqli_connect("localhost","root","","form");
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil','$hasil','$hasil','$hasil','$hasil')";
//$sql = "INSERT INTO tbl_user ('firstname','lastname','username','email','address') VALUES ('$hasil[firstname]','$hasil[lastname]','$hasil[username]','$hasil[email]','$hasil[address]')";
$sql = "INSERT INTO `registrasi`(`firstName`, `lastName`, `username`, `email`, `address`) VALUES ('$hasil[firstName]','$hasil[lastName]','$hasil[username]','$hasil[email]','$hasil[address]')";

//create, update, delete query($syntaxsql) -> true false
/*if ($sqlcon->query($syntaxsql) === TRUE) {
	echo "Query $action with syntax $syntaxsql suceeded !";
}
elseif ($sqlcon->query($syntaxsql) === FALSE){
	echo "Error: $syntaxsql" .$sqlcon->error;
}*/


if(mysqli_query($sqlcon,$sql))
{
  echo "records added successfully.";}
  else
  {
    echo "ERROR: Could not able to execute $sql.".
    mysqli_error($sqlcon);
  }
mysqli_close($sqlcon);

?>