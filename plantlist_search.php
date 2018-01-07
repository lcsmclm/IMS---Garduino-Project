<?php

require_once("includes/config.php");
$q=$_GET['searchstring'];
$table = 'plantlist';
$category = 'plantlist_categories';
if($q!=NULL) {

$sql="SELECT * FROM ".$table." WHERE plantlist_name LIKE '%".$q."%'";
$result = mysqli_query($connection, $sql);
$numrows = mysqli_num_rows($result);

if($numrows > 0) {
  while($row = mysqli_fetch_array($result)) {
   //print "<div class='single-row'><a href=\"#\" onclick=\"displayInfo(event, ".$row['album_id'].")\"><div class='single-cover'><img src='images/".$row['album_cover']."' alt='".$row['album_title']."'/></div><div class='single-info'><h3>".$row['album_title']."</h3><h4>".$row['album_track']."</h4><h5>By ".$row['album_artist']."</h5><p>".$row['album_release']."</p><p class='preview-bio'>".$row['album_bio']."</p><p class='play-preview'>Play Song</p></div></a></div>";
print "<div class='plantlist-single-container'><a data-id='".$row['plantlist_id']."' href='#'><div class='plantlist-single-preview'><h3>".$row['plantlist_name']."</h3></a></div></div>";
   }

}else{
//print "<h3 class='no-result'><i class='fa fa-search' aria-hidden='true'></i> No results match your search</h3>";
}

} else{
  // echo"<div class='default-play'><h2>Album Previews</h2><p><a class='shuffle' href='#'>Random Song</a></p></div>";
  $sql="SELECT * FROM ".$table;
  $result = mysqli_query($connection, $sql);
  while($row = mysqli_fetch_array($result)) {
   print "<div class='plantlist-single-container'><a data-id='".$row['plantlist_id']."' href='#'><div class='plantlist-single-preview'><h3>".$row['plantlist_name']."</h3></a></div></div>";
   }

}

 ?>
