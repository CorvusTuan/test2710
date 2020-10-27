<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<!-- Nhúng file CSS -->
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<form action="" method="POST" onsubmit="return validate()">
		<div class="register">
			<h1>Đăng ký</h1>
			<p>Vui lòng điền thông tin để đăng ký</p>

			<hr>
			<label for="username"><b>Họ và Tên</b></label>
			<input type="text" placeholder="Họ và tên" name="username" id="username">
			<label for="phone"><b>Số điện thoại</b></label>
			<input type="number" placeholder="Số điện thoại" name="phone" id="phone">
			<label for="email"><b>Email</b></label>
			<input type="email" placeholder="Email" name="email" id="email">

			<label for="email"><b>Địa chỉ</b></label>
			<input type="text" placeholder="Thành phố" name="province" id="province">
			<input type="text" placeholder="Quận/Huyện" name="district" id="district">
			<input type="text" placeholder="Xã/Phường" name="ward" id="ward">
			

			<label for=""></label>
			<hr>

			<button type="submit" class="submit">SAVE</button>
		</div>
		<div class="register login">
			<script language="javascript" src="kiemtra.js"></script>
		</div>
	</form>
</body>
</html>