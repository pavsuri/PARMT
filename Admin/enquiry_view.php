<html>
<head>
<title>Shruti_Enquiry_List</title>
</head>
<body align="center" bgcolor="#BDB76B">
<?php 
	if(!isset($details))
	{	
		echo form_open('enquiry_list/getData');
		echo form_submit('submit','EnquiryList'); 
		echo form_close();
		
	}
	
	
?>
 
	
<?php

	if(isset($details)) 
	{
	?>
	<h3 align="center">Enquiry List Details</h3>
	<table align="center" border='1'>
	<tr>
		<th>Id</th>
		<th>User_Id</th>
		<th>Description</th>
		<th>Date</th>
	</tr>
     <?php
	
		foreach($details as $list) {
         ?>
            <tr>
                <td><?php echo $list['id']; ?></td>
                <td><?php echo $list['user_id']; ?></td>
				<td><?php echo $list['description']; ?></td>
				<td><?php echo $list['date']; ?></td>
			</tr>	
	<?php 
		}
	}
		?>
	</table>

</body>
</html>