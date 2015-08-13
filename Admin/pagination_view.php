<html>
	<head>
		<title>Shruti_pagination</title>
	</head>
	<body align="center" bgcolor="#BDB76B">
		<h3 align="center">Enquiry List Details</h3>
		<table align="center" border='1'>
		<tr>
			<th>Id</th>
			<th>User_Id</th>
			<th>Description</th>
			<th>Date</th>
		</tr>
		
		<?php
			foreach($details as $data) {
         ?>
            <tr>
                <td><?php echo $data->id; ?></td>
                <td><?php echo $data->user_id; ?></td>
				<td><?php echo $data->description; ?></td>
				<td><?php echo $data->date; ?></td>
			</tr>	
		<?php 
			}
		?>
		</table>
 
   <h2 align="center"><?php echo $links; ?></h2>
  
	</body>
</html>