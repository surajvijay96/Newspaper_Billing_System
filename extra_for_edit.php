/*$freezed = "select * from history where date like '".$date."'";
$resFreezed = mysqli_query($conn,$freezed);
if(mysqli_num_rows($resFreezed))
{
  $rowFreezed = mysqli_fetch_assoc($resFreezed);
  echo "<h3>Billing of ".$date." has been done</h3>";
  echo "<h2>For complete bill, click <a href='billing.php?date=".$date."'>here</a></h2>";
  $prev = $_SESSION['prev'];
  if($prev != '1')
  {
    echo "(Contact Admin to defreeze this document)";
  }
  else
  {
    echo "(Hi ".$username.", you can defreeze this in <a href='history.php'>History Section</a>)";
  }
  die();
}*/