<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<a href="http://localhost:8080/php/Laravel/Controller/th-task_manager1/public/customer/add">Thêm khách hàng</a><br>
<table border="1">
  <thead>
  <tr>
      <th>STT</th>
      <th>Họ và tên</th>
      <th>Số điện thoại</th>
      <th>Email</th>
      <th>Thao tác</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <?php
    foreach ($customers as $value ) {
    ?>
      <td><?php echo $value['id']; ?></td>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['sdt']; ?></td>
      <td><?php echo $value['email']; ?></td>
      <td>
      <a href="http://localhost:8080/php/Laravel/Controller/th-task_manager1/public/customer/show/<?php echo $value['id']; ?>">Xem</a> | 
      <a href="http://localhost:8080/php/Laravel/Controller/th-task_manager1/public/customer/edit/<?php echo $value['id']; ?>">Sửa</a> | 
      <a href="http://localhost:8080/php/Laravel/Controller/th-task_manager1/public/customer/index/<?php echo $value['id']; ?>"">Xóa</a>
      </td>
  </tr>
  <?php 
      } 
    ?>

  
  </tbody>
</table>
</body>
</html>