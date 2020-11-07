
<?php
// connect to database db_1
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/db_conn/conn.php";
require_once("$path");
?>




<?php
// start user session
session_start();
$user = $_SESSION["user"];
?>




<?php
/*
// find out wich permissions the user has, in case the user is signed in
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/code/config/user_permissions.php";
require("$path");*/
?>
	
	



<?php
// include header
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/modules/includes/header.php";
include("$path"); 
?>



<?php
$subcategory_id = mysqli_real_escape_string($conn, $_GET['subcategory_id']);
if (empty($subcategory_id))
{
$subcategory_id = mysqli_real_escape_string($conn, $_POST['subcategory_id']);
}
echo $subcategory_id;
?>



<?php
// get subcategory name and show it
$sql = "SELECT subcategory_name FROM subcategories WHERE ID=$subcategory_id";
$result4 = $conn->query($sql);
if ($result4->num_rows > 0) {
while($row = $result4->fetch_assoc()) {
$subcategory_name =  $row["subcategory_name"];
}
}
?>
<center><font size="8"  class ="deep-orange-text" ><?php echo $subcategory_name; ?></font></center><br><br>













															
	
        <?php
				// variable name
				$variable='paragraph_1';
				// table
				$table='template_single_page';
				//name of ID columm
				$id_column_name='ID';
				//Name of input-ID
				$input_id=$subcategory_id;
				//Name of input-ID
				$input_id_name='subcategory_id';
				//show variable for admin + contributers?
				$show_intern='yes';
				//show variable for public view?
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
					 $variable_data_type='varchar';	
					$variable_max_lenght=5000;						
				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
				$paragraph_1=$variable_value;
				$paragraph_1_source=$variable_source_value;
        ?>																	
																
																
				


















<?php
// include footer
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/modules/includes/footer.php";
include ("$path"); 
?>



<?php
// close db connection
$conn->close();
?>
