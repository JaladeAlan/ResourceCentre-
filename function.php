<?php

function selectAll ($table)
{
	global $mysqli;
	$sql = "SELECT * FROM $table";
	$stmt = $mysqli->prepare($sql);
	$stmt->execute();
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
}

function delete($table, $id)
		{
			global $mysqli;
			$sql = "DELETE FROM $table WHERE id=?";

			$stmt = executeQuery($sql, ['id' => $id]);
			return $stmt->affected_rows;
	} 	
	