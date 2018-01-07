<?php
require_once("includes/config.php");
$q=$_GET['id'];
$table = 'plantlist';
$category = 'plantlist_categories';
$result = mysqli_query($connection, "SELECT * FROM ".$table. " WHERE plantlist_id = ".$q);
$numrows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$type = "SELECT * FROM ".$category." WHERE plantlist_category_id = ".$row['plantlist_type'];
$type = mysqli_query($connection, $type);
$type = mysqli_fetch_array($type);
print "<h2>".$row["plantlist_name"]."</h2>";
print "<p>Category: ".$type["plantlist_category_title"]."</p>";
print "<p>".$row["plantlist_desc"]."</p>";
?>
