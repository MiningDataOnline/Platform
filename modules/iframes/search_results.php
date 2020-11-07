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


	<div class="#212121 grey darken-4">


<center><font size="5" color="#D8D8D8" >Books</font></center>			
		
		
		
		
<?php
// search and show all subcategories 
// editor, auditor and admin get the variable with the option to change and verrify them

$sql55 = "SELECT * FROM subcategories";
$result55 = $conn->query($sql55);
if ($result55->num_rows > 0) {
    while($row55 = $result55->fetch_assoc()) {
	$id_x = $row55["ID"];
	$subcategory_name = $row55["subcategory_name"];
	$output1 = '/project_pages/ownership/project_ownership.php?id=';
	$output2 = $output1 . $id_x;
	?>		   
	    
	    
				<?php
				// variable name
				$variable='subcategory_name';
				// table
				$table='subcategories';
				//name of ID columm
				$id_column_name='ID';
				//Name of input-ID
				$input_id=$id_x;
				//Name of input-ID
				$input_id_name='ID';
				//show variable for admin + contributers?
				$show_intern='yes';
				//show variable for public view?
				$show_public='no';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
	
				$show_input_source='no';	
				$show_source_information_words='no';
			
				// wenn nur admin verifizieren darf
				$admin_audit_only='yes';																																				   
			
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=100;	
		
				$back_page='/modules/iframes/search_results.php?'.$input_id_name.'='.$id_x;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variables_varchar.php";
				require("$path");
				$subcategory_name=$variable_value;
				$subcategory_name_activate=$variable_value;
				$subcategory_name_activate_source=$variable_source_value;
				?>	    
	    
	    
	    
      	<?php    
	if ($name_activate == 3 || $user == 'admin'){
	?>
      	<br><br>					
            <center><a  class ="deep-orange-text" href="<?php echo $output2;?>"><font size="3"><?php echo $subcategory_name; ?></font></a></center><br>		
     	 <?php
            }
      	else if($name_activate == 2)
      	{?>									
            <center><font size="3" color="grey"><?php echo $subcategory_name; ?></font></center><br>	
      	<?php
      	} 
      	else 
      	{?>									

      <?php
      } 
      }
} else {
echo "0 results";
}
?>




</div>	




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
