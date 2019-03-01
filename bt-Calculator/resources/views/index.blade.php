<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1>Ứng dụng máy tính</h1>
	<form method="get">
		<input type="text" name="number1" placeholder="Nhập số đầu tiên" value="{{request('number1')}}">
		<input type="text" name="number2" placeholder="Nhập số thứ hai" value="{{request('number2')}}">	<br><br>
		<input type="submit" name="pheptinh" value="+">
		<input type="submit" name="pheptinh" value="-">
		<input type="submit" name="pheptinh" value="*">
		<input type="submit" name="pheptinh" value="/">

	</form>
	<h3>Result: {{$result}}</h3>
</body>
</html>