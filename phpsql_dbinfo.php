<?php
$username="root";
$password="otW8irz1fG";
$database="root-hittaeko.nu";


@mysql_connect ("$database","$username","$password") or die ("Could not connect to MySQL");
@mysql_select_db("$database") or die("No database");
echo "Succesful Connection";

?>