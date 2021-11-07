<?php
$conn = pg_connect("postgres://zvrfuztpdwgnze:098ada228f1a82c1b2c6456e81870d1debc84a91a76e660db7c684d3d0d45cdc@ec2-35-169-49-157.compute-1.amazonaws.com:5432/ddd0a0ev0ed4tn");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>