<?php
	
		$conn=mysqli_connect("localhost", "root", "", "libaaz", "3306");
		if(!$conn)
		{
			die("Connection Failed: ".mysql_connect_error());
		}
