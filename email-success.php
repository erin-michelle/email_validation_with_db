<?php require_once('new-connection.php');

session_start();

echo "Your login was successful! <br><br>";

$query2 = 'SELECT * FROM emails';
$users = fetch_all($query2);

echo "Emails stored: <br><br>";

foreach ($users as $emails) {
	echo $emails['email']. " " .$emails['created_at']."<br>";
}

?>




