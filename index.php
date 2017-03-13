<?php
	include('config/config.php');
	include('lib/Database.php');
	$db=new Database();
	$query = "select * from countries";
	$students = $db->select($query);

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8' />

	<link href="asset/css/bootstrap.min.css"  rel='stylesheet' />
	<link href="asset/css/jquery.datatable.min.css"  rel='stylesheet' />
	<link href='//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css' rel='stylesheet' media='print' />

	<script src='asset/js/jquery.1.11.1.js'></script>
	<script src='//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
	<script src='asset/js/mydatatable.js'></script>
	<script>



	</script>
	</head>
	<body>
		<div class="col-md-8 col-md-offset-2" style = "margin-top:100px;">
			<table class="table table-bordered table-hover datatable">

				<thead>
				<tr>
					<th style="display:none"></th>
					<th style="display:none">ID</th>
					<th>Country Name</th>
					<th>Country_code</th>
					<th style="display:none">Publication Status</th>
					<th style="display:none">Status</th>
					<th style="display:none">world</th>


					<th>Action</th>
				</tr>
				</thead>
				<tbody>

				<?php $i=1;
				while($row = $students->fetch_assoc()):?>


				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['country_code']; ?></td>
					<td style="display:none"></td>
					<td style="display:none"></td>
					<td  style="display:none" class="text-right">
					<td  style="display:none" class="text-right">

					</td>
					<td style="display:none;"><span class="label label-success">Active</span></td>
					<td class="text-right">
						<a href="" class="btn btn-default btn-xs"><i class="icon-pencil"></i>Edit</a>
						<a onclick=" return confirm('Are you sure to delete'); " href="" class="btn btn-danger btn-xs"><i class="icon-remove"></i>Delete</a>

					</td>
				</tr>
				<?php endwhile; ?>
				<?php $i++; ?>








				</tbody>
			
		    </table>
		</div>

	</body>
</html>
