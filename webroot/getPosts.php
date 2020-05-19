<?php

// return published posts
function getPublished()
{
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getUsers()
{
	global $conn;
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $users;
}

function getLatest()
{
	global $conn;
	$sql = "SELECT * FROM posts ORDER BY date DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$latest = mysqli_fetch_assoc($result);

	return $latest;
}

?>
