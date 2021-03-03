<html>
	<head>
		<title>APPROVE_FORM</title>
	</head>
		<style>
			th,td{border:1px solid;
			padding:15px;border-collapse:collapse;text-align:center;}
			table{border-collapse:collapse;}
		</style>
			<body>
				<form method="post" action="">	
				<table>
					
						<tr>
							<th>NAME</th>
							<th>LASTNAME</th>
							<th>EMAIL</th>
							<th>MOBILE</th>
							<th>DATE OF BIRTH</th>
							<th>ADDRESS</th>
							<th>DISTRICT</th>
							<th>PINCODE</th>
							<th colspan="1">status</th>
						</tr>
							
							<?php
				
					if (isset($n))
					{
						foreach ($n->result() as $row)
						{
				?>
							<tr>
								<td><?php echo $row->fname;?></td>
								<td><?php echo $row->lname;?></td>
								<td><?php echo $row->email;?></td>
								<td><?php echo $row->phone;?></td>
								<td><?php echo $row->dob;?></td>
								<td><?php echo $row->address;?></td>
								<td><?php echo $row->district;?></td>
								<td><?php echo $row->pincode;?></td>
								<td><a href="#" class="delete_data" id="<?php echo $row->id;?>">Delete</a></td>
								<?php
								}
								?>
									
								}
								</tr>
						<?php
						}
						}
						?>		
							
				</form>
			</body>
</html>