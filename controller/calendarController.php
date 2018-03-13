<?php

require(ROOT . "model/calendarModel.php");

function index()
{
	//$birthdays<getAllBirthdays();
	render("calendar/overview", array('birthdays' => getAllBirthdays()
	));
}

function delete($id) {
	deleteById($id);

	header("Location: /framework");
}

function create() {
	render("calendar/create");
}

function postCreate() {
	createUser();
	header("Location: /framework");
}

function editSave() {
	editBirthday($_POST);
	header("Location: /framework");

}

function edit($id) {
	render("calendar/edit", array('birthday' => getBirthday($id)
	));
}
