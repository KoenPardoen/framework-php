<?php

function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month,day ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

 function deleteById($id) {
 	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
	return $query->fetchAll();
 }

  function createUser() {
 	$db = openDatabaseConnection();


 	$person = $_POST['person'];
 	$day = $_POST['day'];
 	$month = $_POST['month'];
 	$year = $_POST['year'];

	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES (:person, :day, :month, :year)";
	$query = $db->prepare($sql);
	$query->bindParam(":person",$person);
	$query->bindParam(":day",$day);
	$query->bindParam(":month",$month);
	$query->bindParam(":year",$year);
	$query->execute();

	$db = null;
 }


  function editBirthday($data) {
 	$db = openDatabaseConnection();

 	

 	$person = $data['person'];
 	$id = $data['id'];
 	$day = $data['day'];
 	$month = $data['month'];
 	$year = $data['year'];

	$sql = "UPDATE birthdays SET person = :person, day = :day, month = :month, year = :year WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":person",$person);
	$query->bindParam(":day",$day);
	$query->bindParam(":month",$month);
	$query->bindParam(":year",$year);
	$query->bindParam(":id",$id);
	$query->execute();

	$db = null;
 }

 function getBirthday($id) {
 	$db = openDatabaseConnection();

 	$sql = "SELECT * FROM birthdays WHERE id = :id";
 	$query = $db->prepare($sql);
	$query->bindParam(":id",$id);
	$query->execute();

	$db = null;
	return $query->fetch();
 }

