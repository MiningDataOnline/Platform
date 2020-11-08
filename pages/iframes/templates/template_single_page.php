
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










<div class="row">
<div class="col s12 m12 right">
<br>


        			<?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='Subcategory';
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
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=50;
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	

				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
				$subcategory_name=$variable_value;
				$subcategory_name_source=$variable_source_value;
        			?>																	
	
	

	
	
<br><br><br>	




       				 <?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='Paragraph 1';
				// variable name
				$variable='paragraph_1';
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
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=5000;
	
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	
	
				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
     				?>																	
																
	

	

	
	
	
				<br><br>
	
	
	
	
	
	
	
	



       				 <?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='Paragraph 2';
				// variable name
				$variable='paragraph_2';
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
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=5000;
	
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	
	
				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
     				?>																	
					

				<br><br>
	
	


       				 <?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='Paragraph 3';
				// variable name
				$variable='paragraph_3';
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
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=5000;
	
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	
	
				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
     				?>																	
					
	
	
	
				<br><br>


	
	
	


       				 <?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='Paragraph 4';
				// variable name
				$variable='paragraph_4';
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
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=5000;
	
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'administrador')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	
	
				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
     				?>																	
					
	
	
	
				<br><br>	
	
	
	


        			<?php
				// Name of the variable (the name will be viewable). It's not used for nothing other than to name the variable in a readable form
				$variable_designation='Image 1 Dropbox Link: ';
				// variable name
				$variable='image_1_dropbox_link';
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
				$show_public='yes';	
				//show variable input field?
				$show_input='yes';			
				//show unit input field?
				$show_input_unit='no';
				//Data type: int, varchar, text
				$variable_data_type='varchar';	
				$variable_max_lenght=500;
				if ($show_public=='yes' || $show_intern=='yes' && ($company_editor == 1 || $company_auditor == 1  ||  $user == 'admin')){
				?>				  	  
				<font size="3" color="grey"><?php echo $variable_designation; ?></font>	
				<?php 				
				} 	

				$back_page='/pages/iframes/templates/template_single_page.php?'.$input_id_name.'='.$input_id;		
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/modules/variable_varchar.php";
				include("$path");
				$image_1_dropbox_link_name_value=$variable_value;
				$image_1_dropbox_link_name_source_value=$variable_source_value;
				$image_1_dropbox_link_name_value = str_replace("dl=0","raw=1","$image_1_dropbox_link_name_value");
        			?>																	
	
				<center><img src="<?php echo $image_1_dropbox_link_name_value; ?>" height="100%" width="100%"></center>

	
	
					<br><br>
									
																
				
</div>
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
