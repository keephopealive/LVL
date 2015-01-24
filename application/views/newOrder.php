<html>
<head>
	<title>Create New Order (Add Productitems)</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>
	<h1>Create New Order (Add Productitems)</h1>
	First Name <?= $user['first_name']; ?><br>
	Last Name <?= $user['last_name']; ?><br>
	Email <?= $user['email']; ?><br>
	
	Order_id: <?= $order_id; ?>
	<button class='btn btn-primary'>Add Item (Modal)</button>
	<a href="/productitem/newProductitem/keypad"><button class='btn btn-primary'>Add Keypad</button></a>
	<a href="/productitem/newProductitem/outlet"><button class='btn btn-primary'>Add Outlet</button></a>
	<a href="/dashboard"><button class='btn btn-primary'>Save Order</button></a>
	<a href="/order/deleteOrder/<?= $order_id; ?>"><button class='btn btn-danger'>Delete/Cancel Order</button></a>
	<table class='table table-bordered'>
		<thead>
			<th>Reference No</th>
			<th>Note</th>
			<th>Qunatity</th>
			<th>PDF</th>
			<th>Actions</th>
		</thead>
<?php	foreach($productitems as $productitem)
		{
?>			<tr>
				<td><?= $productitem['reference_no']?></td> 
				<td><?= $productitem['note']?></td>
				<td><?= $productitem['quantity']?></td>
				<td>PDF LINK HERE</td>
				<td>
					<form method='post' action='/productitem/destroyProductitem'>
						<input type='hidden' name='productitem_id' value="<?= $productitem['id']; ?>">
						<input type='submit' value='Delete'>
					</form>
				</td>
			</tr>
<?php	}
?>	</table>	
	<h4>Set Order Note:</h4>
	<form method='post' action='/order/saveNote'>
		<input type='hidden' name='order_id' value="<?= $order['id'] ?>">
		<input type='text' name='client_note' value="<?= $order['client_note'] ?>">
		<input type='submit' value='Save Note'>
	</form>
</body>
</html>