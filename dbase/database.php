<?php
require_once 'server/dbase/config.php';//this configuration script

$db_conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($db_conn));
mysqli_select_db($db_conn, DB_NAME) or die(mysqli_error($db_conn));

//this get data from a particular table in a database
//e.g
//getAll('email, phonenumber', 'users', "id='4'")
function getAll($what, $tableName, $where=null)
{
	global $db_conn;

	if($where == null)
	{
		$query = mysqli_query($db_conn, "SELECT  $what  FROM `$tableName`");
		return $query;
	}
	else
	{
		$query = mysqli_query($db_conn, "SELECT  $what  FROM `$tableName` WHERE  $where");
		return $query;
	}
	
	mysqli_close($db_conn);
}

//this delete data from a particular table in a database
function delete($tableName, $where=null)
{
	global $db_conn;
	if($where == null)
	{
		$query = mysqli_query($db_conn, "DELETE FROM `$tableName`");
		return $query;
	}
	else
	{
		$query = mysqli_query($db_conn, "DELETE FROM `$tableName` WHERE  $where");
		return $query;
	}
	mysqli_close($db_conn);
}

//this update a particular table in a database
function update($tableName, $set, $where)
{
	global $db_conn;
	$query = mysqli_query($db_conn, "UPDATE `$tableName` SET $set WHERE  $where");
	return $query;
	mysqli_close($db_conn);
}

//this insert data into a particular table in a database
function insert($tableName, $rows, $values)
{
	global $db_conn;
	$query = mysqli_query($db_conn, "INSERT INTO `$tableName` ($rows) VALUES ($values)");
	return $query;
	mysqli_close($db_conn);
}

//get specific value or values from a table in a  database
function getSingle($what, $tableName, $where=null)
{
	global $db_conn;
	$result = getAll($what, $tableName, $where);
	$row = mysqli_fetch_array($result);
	return $row["$what"];
	mysqli_close($db_conn);
}

//get specific value in row  from a table in a  database
function getFirst($tableName, $where=null)
{
	global $db_conn;
	$result = getAll('*', $tableName, $where);
	$row = mysqli_fetch_array($result);
	return $row;
	mysqli_close($db_conn);
}

//get row count of a particular table in a database
function getCount($tableName, $where=null)
{
	global $db_conn;
	$result = getAll('*', $tableName, $where);
	return mysqli_num_rows($result);
	mysqli_close($db_conn);
}

