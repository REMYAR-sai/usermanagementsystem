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
							<th colspan="3">status</th>
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
								<?php
								if($row->is_email_verified==1)
								{
									?>
									<td>Approved<td>
									
									<a href="<?php echo base_url()?>main/rejectit/<?php echo $row->id;?>">reject</a></td>
									<?php

								}
								elseif($row->is_email_verified==0)
								{
									?>
										
									<td><a href="<?php echo base_url()?>main/delete/<?php echo $row->id;?>">delete</a></td>
									<?php
								}
								elseif($row->is_email_verified==2)
								{
									?>
									<td>Rejected</td>
									
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									<?php
								}
								
								else
								{
									?>
									<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">approve</a></td>
									
									<td><a href="<?php echo base_url()?>main/delete/<?php echo $row->id;?>">delete</a></td>

									<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
									<?php
								}
								?>

							</tr>
						<?php
						}
						}
						?>		
							
				</form>
				<a class="navbar-brand" href="<?php echo base_url()?>Main/index">home</a>
			</body>
</html>