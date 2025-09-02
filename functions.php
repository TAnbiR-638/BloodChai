<?php 
include("config.php");


if(isset($_POST['G_CITY_ID']))
{
$sql="Select state.STATE_ID, state.STATE_NAME, city.CITY_NAME, city.CITY_ID
From state Inner Join
city On city.STATE_ID = state.STATE_ID
Where city.CITY_ID ={$_POST['G_CITY_ID']}";

$result=$con->query($sql);
if($result->num_rows>0)
{

if($row=$result->fetch_assoc())
{
echo "<option value='{$row['STATE_NAME']}'>{$row['STATE_NAME']}</option>";
}

}

}




	
if(isset($_POST['G_STATE_ID']))
{
$sql="Select area.AREA_ID, area.AREA_NAME, state.STATE_NAME, state.STATE_ID
From state Inner Join
city On city.STATE_ID = state.STATE_ID
Where city.CITY_ID ={$_POST['G_CITY_ID']}";

$result=$con->query($sql);
if($result->num_rows>0)
{

if($row=$result->fetch_assoc())
{
echo "<option value='{$row['STATE_NAME']}'>{$row['STATE_NAME']}</option>";
}

}

}




// if(isset($_POST['G_AREA_ID']))
// {

// $sql="Select city.CITY_ID, city.CITY_NAME, area.CITY_NAME, area.CITY_ID
// From city Inner Join
// area On area.STATE_ID = area.STATE_ID
// Where area.CITY_ID ={$_POST['G_AREA_ID']}";

// $result=$con->query($sql);
// if($result->num_rows>0)
// {
// if($row=$result->fetch_assoc())
// {
// echo "<option value='{$row['STATE_NAME']}'>{$row['STATE_NAME']}</option>";
// }
// }

// }

	
	
	


?>