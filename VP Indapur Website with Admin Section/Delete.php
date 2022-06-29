
<?php
session_start();
include('connection.php');

$id=$_GET['serial'];


$delete="DELETE FROM  relation WHERE s='$id'";

$query=mysqli_query($conn,$delete);


if($query)
{
	?><script>
		alert("Deleted Successfully!");
	</script>
	<?php
}
else{
	?><script>
		alert("Sorry Incomplete deletion!");
	</script>
	<?php

}

header('location:Display.php');

?>