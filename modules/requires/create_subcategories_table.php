<?php
		
      // create subcategories table if it doen't exist yet
			$table='subcategories';
			$query = "SELECT id FROM $table";
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$query = "CREATE TABLE ".$table." (
						  ID int(11) AUTO_INCREMENT,
						  PRIMARY KEY  (id)
						  )";
				$result = mysqli_query($conn, $query);
			}

			// add subcategory_name column
			$query = mysqli_query("SHOW COLUMNS FROM `$table` LIKE 'subcategory_name'");
			$result = mysqli_query($conn, $query);
			if(empty($result)) {
				$sqlalt="alter table `$table` add `subcategory_name` varchar(50)";
				$conn->query($sqlalt);
			}

?>
