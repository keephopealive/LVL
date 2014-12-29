<html>
<head>
	<title>Admin Order Edit</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<h3>This is where the admin can edit/view an order</h3>
	<a href="/admin/dashboard"><button class='btn btn-primary'>Dashboard</button></a>
	<a href="/logout"><button class='btn btn-danger'>Logout</button></a>	
	<div>
		<label>Order ID: </label> <?= $order['id'] ?><br>
		<label>Order Client Note: </label> <?= $order['client_note'] ?><br>
		<label>Order Admin Note: 
		<form method='post' action='/order/saveAdminNote'>
			<input type='hidden' name='order_id' value="<?= $order['id'] ?>">
			<input type='text' name='admin_note' value="<?= $order['admin_note'] ?>">
			<input type='submit' value='Save Admin Note'>
		</form></label> <br>
		<label>Order Project Name: </label> <?= $order['project_name']?><br>
		<form action='/order/updateStatus' method='post'>
			<select name='status'>
<?php			if($order['status'] == 'Completed'){ ?>
					<option value='Completed' selected>Completed</option>
					<option value='Pending'>Pending</option>
<?php			}
				else if($order['status'] == 'Pending'){ ?>
					<option value='Pending' selected>Pending</option>
					<option value='Completed'>Completed</option>					
<?php			}
?>
			</select>
			<input type='hidden' name='order_id' value='<?= $order['id']?>'>
			<input type='submit' value='Save Order Status'>
		</form>
		<label>Order Status: </label> <?= $order['status']?><br>
		<label>Order Created Date: </label> <?= $order['created_at']?><br>
		<label>Client ID: </label> <?= $user['id']?> <br>
		<label>Client Name: </label> <?= $user['first_name']?> <?= $user['last_name'] ?><br>
	</div>
	<table class='table table-bordered'>
		<thead>
			<th>Reference No</th>
			<th>Status</th>
			<th>Note</th>
			<th>Quantity</th>
		</thead>
<?php	foreach($productitems as $productitem)
		{
?>			<tr>
				<td><?= $productitem['reference_no']?></td> 
				<td><?= $productitem['status']?></td> 
				<td><?= $productitem['note']?></td> 
				<td><?= $productitem['quantity']?></td>
			</tr>
<?php	}
?>	</table>
</body>
</html>