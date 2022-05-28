<?php

// Getting user uploaded files

$file = $_FILES["file"];

//Saving files in upload folder

move_uploaded_file($file["tmp_name"], "uploads/". $file["name"]);

// Redirecting back to home

header("Location: index.php");