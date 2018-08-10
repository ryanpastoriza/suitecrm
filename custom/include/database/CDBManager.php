<?php

class CDBManager {
	public function fetch($query){
		global $db;
		$res = [];
		$result = $db->query($query);  
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $res[] = $row;
		    }
		} 
		return $res;
	}

	public function fetchOne($query){
		global $db;
		$res = [];
		$result = $db->query($query);  
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        return $row;
		    }
		} 
		return $res;
	}

	public function insertOne($query){
		global $db;
		if ($db->query($query) === TRUE) {
		    return 1;
		} else {
		    return 0;
		}
	}
}