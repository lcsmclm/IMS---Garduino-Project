<!--Remove once implemented into real build-->
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--Remove once implemented into real build-->


<div class='plant-list'>
  <div class='search-form'>
    <form method='get' action='index.php'>
        <label  for="searchstring"><i class="fa fa-search" aria-hidden="true"></i></label>
        <input type="search" placeholder='Search...' name="searchstring" id="searchstring" value='<?php if(isset($_GET['searchstring'])){echo$q;}?>'>
    </form>
  </div>
  <h2>Browse All Plants</h2>
  <div class='plantlist-feed'>
<?php
require_once("includes/config.php");
$table = 'plantlist';
$category = 'plantlist_categories';
$result = mysqli_query($connection, "SELECT * FROM ".$table);
$numrows = mysqli_num_rows($result);
// $category1 = mysqli_query($connection, "SELECT * FROM ".$category." WHERE plantlist_category_id = 1");
// $category1 = mysqli_fetch_array($category);
if($numrows > 0) {
  while($row = mysqli_fetch_array($result)) {
    $type = "SELECT * FROM ".$category." WHERE plantlist_category_id = ".$row['plantlist_type'];
    $type = mysqli_query($connection, $type);
    $type = mysqli_fetch_array($type);
      print "<div class='plantlist-single-container'><a data-id='".$row['plantlist_id']."' href='#'><div class='plantlist-single-preview'><h3>".$row['plantlist_name']."</h3></a></div><div class='arrow'><i class='fa fa-chevron-right' aria-hidden='true'></i></div></div>";
   // print "<div  class='single-row' ><a href=\"#\" onclick=\"displayInfo(".$row['customer_id'].")\">".$row['customer_lastname'].", ".$row['customer_firstname']."</a></div>";
   }
}
 ?>
</div>
 <article class='plantlist-details'></article>

 <!--Remove once implemented into real build-->
 <script src='js/utils.js'></script>
 <script src='js/plantlist.js'></script>
 <!--Remove once implemented into real build-->
</div>
