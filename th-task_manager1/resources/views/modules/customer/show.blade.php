<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
</head>
<body>
	<h1>Xem thông tin khách hàng</h1>
	<form method="get">
		@csrf
		<table border="1">
			<tr>
				<th>STT</th>
				<th>Họ và tên</th>
				<th>Số điện thoại</th>
				<th>Email</th>
			</tr>
			<tr>
				<td>
					  <input type="text" name="id" value="<?php echo $customer['id']; ?>">
				</td>
				<td>
					  <input type="text" name="hoTen" value="<?php echo $customer['name']; ?>">
				</td>
				<td>
					<input type="text" name="sdt" value="<?php echo $customer['sdt']; ?>">
				</td>
				<td>
					<input type="text" name="email" value="<?php echo $customer['email']; ?>">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>