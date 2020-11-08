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
// check witch page template to use
$sql55 = "SELECT template FROM config";
$result55 = $conn->query($sql55);
if ($result55->num_rows > 0) {
while($row55 = $result55->fetch_assoc()) {
$template = $row55["template"];
} 
} 
?>	
		
		
		
		
		
		
<?php
// search and show all subcategories 
// editor, auditor and admin get the variable with the option to change and verrify them

$sql55 = "SELECT * FROM subcategories";
$result55 = $conn->query($sql55);
if ($result55->num_rows > 0) {
    while($row55 = $result55->fetch_assoc()) {
	$subcategory_id = $row55["ID"];
	$link = '/pages/iframes/templates/'.$template.'.php?subcategory_id='.$id;
	?>		   
	    


	
	
	
	    
	    
      	<?php    
	if ($name_activate == 3 || $user == 'admin'){
	?>
      	<br><br>
	
	
	
<center>
        			<?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='';
				// variable name
				$variable='subcategory_name';
				// table
				$table='subcategories';
				//name of ID columm
				$id_column_name='ID';
				//Name of input-ID
				$input_id=$subcategory_id;
				//Name of input-ID
				$input_id_name='subcategory_id';
				//show variable for admin + contributers?
				$show_intern='yes';
				//show variable for public view?
				$show_public='no';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=50;
				$variable_font_color='#5acefa';
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	

				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
			 	$subcategory_name_value=$variable_value;

        			?>		
	
	
	
	
            <center><a  class ="#5acefa-text" href="<?php echo $link;?>" target='pages_iframe'><font size="3"><?php echo $subcategory_name_value; ?></font></a></center><br>		
     	
</center>	
	
	<?php
            }
      	else if($name_activate == 2)
      	{?>	
	
	
	

	

        			<?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='';
				// variable name
				$variable='subcategory_name';
				// table
				$table='subcategories';
				//name of ID columm
				$id_column_name='ID';
				//Name of input-ID
				$input_id=$subcategory_id;
				//Name of input-ID
				$input_id_name='subcategory_id';
				//show variable for admin + contributers?
				$show_intern='yes';
				//show variable for public view?
				$show_public='no';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=50;
				$variable_font_color='#5acefa';
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	

				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
	 			$subcategory_name_value=$variable_value;
        			?>			
	
	
	
           			 <center><font size="3" color="grey"><?php echo $subcategory_name_value; ?></font></center><br>	
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
