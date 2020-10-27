<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Validation</title>
</head>
<body>
	<?php
	include('config.php');
	$hoten = $email = $phone = $province = $district = $ward = "";
	$nameErr = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["hoten"])){
	$hoten = test_input($_POST["hoten"]);
}
if(isset($_POST["phone"])){
$phone = $_POST["phone"];
}
if(isset($_POST["email"])){
$email = $_POST["email"];
}
if(isset($_POST["province"])){
$province = $_POST["province"];
}
if(isset($_POST["district"])){
$district = $_POST["district"];
}
if(isset($_POST["ward"])){
$ward = $_POST["ward"];
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<label for="hoten">Họ tên:</label><br>
	<input type="text" id="hoten" name="hoten" required><br>
	<label for="phone">Điện thoại:</label><br>
	<input type="number" id="phone" name="phone"><br>
	<label for="email">Email:</label><br>
	<input type="email" name="email" id="email" required><br>
	<label for="province">Tỉnh thành</label><br>
	<select id="province" name="province" required>
		<option value="">--Chọn--</option>
		<option value="Hà Nội">Hà Nội</option>
		<option value="Hải Phòng">Hải Phòng</option>
		<option value="Hải Dương">Hải Dương</option>
		<option value="Hưng Yên">Hưng Yên</option>
		<option value="Hà Nam">Hà Nam</option>
		<option value="Nam Định">Nam Định</option>
		<option value="Thái Bình">Thái Bình</option>
		<option value="Ninh Bình">Ninh Bình</option>
		<option value="Hà Giang">Hà Giang</option>
		<option value="Cao Bằng">Cao Bằng</option>
		<option value="Lào Cai">Lào Cai</option>
		<option value="Bắc Cạn">Bắc Cạn</option>
		<option value="Lạng Sơn">Lạng Sơn</option>
		<option value="Tuyên Quang">Tuyên Quang</option>
		<option value="Yên Bái">Yên Bái</option>
		<option value="Thái Nguyên">Thái Nguyên</option>
		<option value="Phú Thọ">Phú Thọ</option>
		<option value="Vĩnh Phúc">Vĩnh Phúc</option>
		<option value="Bắc Giang">Bắc Giang</option>
		<option value="Bắc Ninh">Bắc Ninh</option>
		<option value="Quảng Ninh">Quảng Ninh</option>
		<option value="Điện Biên">Điện Biên</option>
		<option value="Lai Châu">Lai Châu</option>
		<option value="Sơn La">Sơn La</option>
		<option value="Hòa Bình">Hòa Bình</option>
	</select><br>
	<label for="district">Quận huyện</label><br>
	<select id="district" name="district" required>
		<option value="">--Chọn--</option>
		<option value=“Quận Ba Đình”>Quận Ba Đình
		</option”>


		<option value=“Quận Tây Hồ”>Quận Tây Hồ
		</option”>


		<option value=“Quận Hoàn Kiếm”>Quận Hoàn Kiếm
		</option”>


		<option value=“Quận Long Biên”>Quận Long Biên
		</option”>


		<option value=“Quận Hai Bà Trưng”>Quận Hai Bà Trưng
		</option”>


		<option value=“Quận Hoàng Mai”>Quận Hoàng Mai
		</option”>


		<option value=“Quận Đống đa”>Quận Đống đa
		</option”>


		<option value=“Quận Thanh Xuân”>Quận Thanh Xuân
		</option”>


		<option value=“Quận Cầu Giấy”>Quận Cầu Giấy
		</option”>


		<option value=“Huyện Sóc Sơn”>Huyện Sóc Sơn
		</option”>


		<option value=“Huyện Đông Anh”>Huyện Đông Anh
		</option”>


		<option value=“Huyện Gia Lâm”>Huyện Gia Lâm
		</option”>


		<option value=“Huyện Từ Liêm”>Huyện Từ Liêm
		</option”>


		<option value=“Huyện Thanh Trì”>Huyện Thanh Trì
		</option”>


		<option value=“Huyện Mê Linh”>Huyện Mê Linh
		</option”>


		<option value=“Quận Hà Đông”>Quận Hà Đông
		</option”>


		<option value=“Thị Xã Sơn Tây”>Thị Xã Sơn Tây
		</option”>


		<option value=“Huyện Phúc Thọ”>Huyện Phúc Thọ
		</option”>


		<option value=“Huyện Đan Phượng”>Huyện Đan Phượng
		</option”>


		<option value=“Huyện Thạch Thất”>Huyện Thạch Thất
		</option”>


		<option value=“Huyện Hòai Đức”>Huyện Hòai Đức
		</option”>


		<option value=“Huyện Quốc Oai”>Huyện Quốc Oai
		</option”>


		<option value=“Huyện Thanh Oai”>Huyện Thanh Oai
		</option”>


		<option value=“Huyện Thường Tín”>Huyện Thường Tín
		</option”>


		<option value=“Huyện Mỹ Đức”>Huyện Mỹ Đức
		</option”>


		<option value=“Huyện ứng Hòa”>Huyện ứng Hòa
		</option”>


		<option value=“Huyện Phú Xuyên”>Huyện Phú Xuyên
		</option”>


		<option value=“Huyện Ba Vì”>Huyện Ba Vì
		</option”>


		<option value=“Huyện Chương Mỹ”>Huyện Chương Mỹ
		</option”>


		<option value=“Quận Nam Từ Liêm”>Quận Nam Từ Liêm
		</option”>


		<option value=“Quận Bắc Từ Liêm”>Quận Bắc Từ Liêm
		</option”>


		<option value=“Quận Hồng Bàng”>Quận Hồng Bàng
		</option”>


		<option value=“Quận Ngô Quyền”>Quận Ngô Quyền
		</option”>


		<option value=“Quận Hải An”>Quận Hải An
		</option”>


		<option value=“Quận Lê Chân”>Quận Lê Chân
		</option”>


		<option value=“Quận Kiến An”>Quận Kiến An
		</option”>


		<option value=“Quận Đồ Sơn”>Quận Đồ Sơn
		</option”>


		<option value=“Huyện Thuỷ Nguyên”>Huyện Thuỷ Nguyên
		</option”>


		<option value=“Huyện An Dương”>Huyện An Dương
		</option”>


		<option value=“Huyện An Lão”>Huyện An Lão
		</option”>


		<option value=“Huyện Kiến Thuỵ”>Huyện Kiến Thuỵ
		</option”>


		<option value=“Huyện Tiên Lãng”>Huyện Tiên Lãng
		</option”>


		<option value=“Huyện Vĩnh Bảo”>Huyện Vĩnh Bảo
		</option”>


		<option value=“Huyện Cát Hải”>Huyện Cát Hải
		</option”>


		<option value=“Huyện Bạch Long Vĩ”>Huyện Bạch Long Vĩ
		</option”>


		<option value=“Quận Dương Kinh”>Quận Dương Kinh
		</option”>


		<option value=“Thành phố Hải Dương”>Thành phố Hải Dương
		</option”>


		<option value=“Thị xã Chí Linh”>Thị xã Chí Linh
		</option”>


		<option value=“Huyện Nam Sách”>Huyện Nam Sách
		</option”>


		<option value=“Huyện Thanh Hà”>Huyện Thanh Hà
		</option”>


		<option value=“Huyện Kinh Môn”>Huyện Kinh Môn
		</option”>


		<option value=“Huyện Kim Thành”>Huyện Kim Thành
		</option”>


		<option value=“Huyện Gia Lộc”>Huyện Gia Lộc
		</option”>


		<option value=“Huyện Tứ Kỳ”>Huyện Tứ Kỳ
		</option”>


		<option value=“Huyện Cẩm Giàng”>Huyện Cẩm Giàng
		</option”>


		<option value=“Huyện Bình Giang”>Huyện Bình Giang
		</option”>


		<option value=“Huyện Thanh Miện”>Huyện Thanh Miện
		</option”>


		<option value=“Huyện Ninh Giang”>Huyện Ninh Giang
		</option”>


		<option value=“Thành phố Hưng yên”>Thành phố Hưng yên
		</option”>


		<option value=“Huyện Mỹ Hào”>Huyện Mỹ Hào
		</option”>


		<option value=“Huyện Khoái Châu”>Huyện Khoái Châu
		</option”>


		<option value=“Huyện Ân Thi”>Huyện Ân Thi
		</option”>


		<option value=“Huyện Kim Động”>Huyện Kim Động
		</option”>


		<option value=“Huyện Phù Cừ”>Huyện Phù Cừ
		</option”>


		<option value=“Huyện Tiên Lữ”>Huyện Tiên Lữ
		</option”>


		<option value=“Huyện Văn Giang”>Huyện Văn Giang
		</option”>


		<option value=“Huyện Văn Lâm”>Huyện Văn Lâm
		</option”>


		<option value=“Huyện Yên Mỹ”>Huyện Yên Mỹ
		</option”>


		<option value=“Thành phố Phủ Lý”>Thành phố Phủ Lý
		</option”>


		<option value=“Huyện Duy Tiên”>Huyện Duy Tiên
		</option”>


		<option value=“Huyện Kim Bảng”>Huyện Kim Bảng
		</option”>


		<option value=“Huyện Lý Nhân”>Huyện Lý Nhân
		</option”>


		<option value=“Huyện Thanh Liêm”>Huyện Thanh Liêm
		</option”>


		<option value=“Huyện Bình Lục”>Huyện Bình Lục
		</option”>


		<option value=“Thành phố Nam Định”>Thành phố Nam Định
		</option”>


		<option value=“Huyện Vụ Bản”>Huyện Vụ Bản
		</option”>


		<option value=“Huyện Mỹ Lộc”>Huyện Mỹ Lộc
		</option”>


		<option value=“Huyện ý Yên”>Huyện ý Yên
		</option”>


		<option value=“Huyện Nam Trực”>Huyện Nam Trực
		</option”>


		<option value=“Huyện Trực Ninh”>Huyện Trực Ninh
		</option”>


		<option value=“Huyện Xuân Trường”>Huyện Xuân Trường
		</option”>


		<option value=“Huyện Giao Thuỷ”>Huyện Giao Thuỷ
		</option”>


		<option value=“Huyện Nghĩa Hưng”>Huyện Nghĩa Hưng
		</option”>


		<option value=“Huyện Hải Hậu”>Huyện Hải Hậu
		</option”>


		<option value=“Thành phố Thái Bình”>Thành phố Thái Bình
		</option”>


		<option value=“Huyện Quỳnh Phụ”>Huyện Quỳnh Phụ
		</option”>


		<option value=“Huyện Hưng Hà”>Huyện Hưng Hà
		</option”>


		<option value=“Huyện Thái Thụy”>Huyện Thái Thụy
		</option”>


		<option value=“Huyện Đông Hưng”>Huyện Đông Hưng
		</option”>


		<option value=“Huyện Vũ Thư”>Huyện Vũ Thư
		</option”>


		<option value=“Huyện Kiến Xương”>Huyện Kiến Xương
		</option”>


		<option value=“Huyện Tiền Hải”>Huyện Tiền Hải
		</option”>


		<option value=“Thành phố Ninh Bình”>Thành phố Ninh Bình
		</option”>


		<option value=“Thị xã Tam Điệp”>Thị xã Tam Điệp
		</option”>


		<option value=“Huyện Nho quan”>Huyện Nho quan
		</option”>


		<option value=“Huyện Gia Viễn”>Huyện Gia Viễn
		</option”>


		<option value=“Huyện Hoa Lư”>Huyện Hoa Lư
		</option”>


		<option value=“Huyện Yên Mô”>Huyện Yên Mô
		</option”>


		<option value=“Huyện Yên Khánh”>Huyện Yên Khánh
		</option”>


		<option value=“Huyện Kim Sơn”>Huyện Kim Sơn
		</option”>


		<option value=“TP Hà Giang”>TP Hà Giang
		</option”>


		<option value=“Huyện Đồng Văn”>Huyện Đồng Văn
		</option”>


		<option value=“Huyện Mèo Vạc”>Huyện Mèo Vạc
		</option”>


		<option value=“Huyện Yên Minh”>Huyện Yên Minh
		</option”>


		<option value=“Huyện Quản Bạ”>Huyện Quản Bạ
		</option”>


		<option value=“Huyện Bắc Mê”>Huyện Bắc Mê
		</option”>


		<option value=“Huyện Hoàng Su Phì”>Huyện Hoàng Su Phì
		</option”>


		<option value=“Huyện Vị Xuyên”>Huyện Vị Xuyên
		</option”>


		<option value=“Huyện Xín Mần”>Huyện Xín Mần
		</option”>


		<option value=“Huyện Quang Bình”>Huyện Quang Bình
		</option”>


		<option value=“Huyện Bắc Quang”>Huyện Bắc Quang
		</option”>


		<option value=“Thành phố Cao Bằng”>Thành phố Cao Bằng
		</option”>


		<option value=“Huyện Bảo Lạc”>Huyện Bảo Lạc
		</option”>


		<option value=“Huyện Hà Quảng”>Huyện Hà Quảng
		</option”>


		<option value=“Huyện Thông Nông”>Huyện Thông Nông
		</option”>


		<option value=“Huyện Trà Lĩnh”>Huyện Trà Lĩnh
		</option”>


		<option value=“Huyện Trùng Khánh”>Huyện Trùng Khánh
		</option”>


		<option value=“Huyện Nguyên Bình”>Huyện Nguyên Bình
		</option”>


		<option value=“Huyện Hòa An”>Huyện Hòa An
		</option”>


		<option value=“Huyện Quảng Uyên”>Huyện Quảng Uyên
		</option”>


		<option value=“Huyện Phục Hòa”>Huyện Phục Hòa
		</option”>


		<option value=“Huyện Hạ Lang”>Huyện Hạ Lang
		</option”>


		<option value=“Huyện Thạch An”>Huyện Thạch An
		</option”>


		<option value=“Huyện Bảo Lâm”>Huyện Bảo Lâm
		</option”>


		<option value=“Thành phố Lào Cai”>Thành phố Lào Cai
		</option”>


		<option value=“Huyện Mường Khương”>Huyện Mường Khương
		</option”>


		<option value=“Huyện Bát Xát”>Huyện Bát Xát
		</option”>


		<option value=“Huyện Bắc Hà”>Huyện Bắc Hà
		</option”>


		<option value=“Huyện Bảo Thắng”>Huyện Bảo Thắng
		</option”>


		<option value=“Huyện Sa Pa”>Huyện Sa Pa
		</option”>


		<option value=“Huyện Bảo Yên”>Huyện Bảo Yên
		</option”>


		<option value=“Huyện Văn Bàn”>Huyện Văn Bàn
		</option”>


		<option value=“Huyện Si Ma Cai”>Huyện Si Ma Cai
		</option”>


		<option value=“Thị xã Bắc Cạn”>Thị xã Bắc Cạn
		</option”>


		<option value=“Huyện Ba Bể”>Huyện Ba Bể
		</option”>


		<option value=“Huyện Pác Nặm”>Huyện Pác Nặm
		</option”>


		<option value=“Huyện Ngân Sơn”>Huyện Ngân Sơn
		</option”>


		<option value=“Huyện Chợ Đồn”>Huyện Chợ Đồn
		</option”>


		<option value=“Huyện Na Rì”>Huyện Na Rì
		</option”>


		<option value=“Huyện Bạch Thông”>Huyện Bạch Thông
		</option”>


		<option value=“Huyện Chợ mới”>Huyện Chợ mới
		</option”>


		<option value=“Thành phố Lạng Sơn”>Thành phố Lạng Sơn
		</option”>


		<option value=“Huyện Tràng Định”>Huyện Tràng Định
		</option”>


		<option value=“Huyện Văn Lãng”>Huyện Văn Lãng
		</option”>


		<option value=“Huyện Bình Gia”>Huyện Bình Gia
		</option”>


		<option value=“Huyện Bắc Sơn”>Huyện Bắc Sơn
		</option”>


		<option value=“Huyện Văn Quan”>Huyện Văn Quan
		</option”>


		<option value=“Huyện Cao Lộc”>Huyện Cao Lộc
		</option”>


		<option value=“Huyện Lộc Bình”>Huyện Lộc Bình
		</option”>


		<option value=“Huyện Chi Lăng”>Huyện Chi Lăng
		</option”>


		<option value=“Huyện Đình Lập”>Huyện Đình Lập
		</option”>


		<option value=“Huyện Hữu Lũng”>Huyện Hữu Lũng
		</option”>


		<option value=“Thành Phố Tuyên Quang”>Thành Phố Tuyên Quang
		</option”>


		<option value=“Huyện Na Hang”>Huyện Na Hang
		</option”>


		<option value=“Huyện Chiêm Hoá”>Huyện Chiêm Hoá
		</option”>


		<option value=“Huyện Hàm Yên”>Huyện Hàm Yên
		</option”>


		<option value=“Huyện Yên Sơn”>Huyện Yên Sơn
		</option”>


		<option value=“Huyện Sơn Dương”>Huyện Sơn Dương
		</option”>


		<option value=“Huyện Lâm Bình”>Huyện Lâm Bình
		</option”>


		<option value=“Thành phố Yên Bái”>Thành phố Yên Bái
		</option”>


		<option value=“Thị xã Nghĩa Lộ”>Thị xã Nghĩa Lộ
		</option”>


		<option value=“Huyện Lục Yên”>Huyện Lục Yên
		</option”>


		<option value=“Huyện Văn Yên”>Huyện Văn Yên
		</option”>


		<option value=“Huyện Mù Cang Chải”>Huyện Mù Cang Chải
		</option”>


		<option value=“Huyện Trấn Yên”>Huyện Trấn Yên
		</option”>


		<option value=“Huyện Yên Bình”>Huyện Yên Bình
		</option”>


		<option value=“Huyện Văn Chấn”>Huyện Văn Chấn
		</option”>


		<option value=“Huyện Trạm Tấu”>Huyện Trạm Tấu
		</option”>


		<option value=“Thành phố Thái Nguyên”>Thành phố Thái Nguyên
		</option”>


		<option value=“Thành phố Sông Công”>Thành phố Sông Công
		</option”>


		<option value=“Huyện Định Hoá”>Huyện Định Hoá
		</option”>


		<option value=“Huyện Võ Nhai”>Huyện Võ Nhai
		</option”>


		<option value=“Huyện Phú Lương”>Huyện Phú Lương
		</option”>


		<option value=“Huyện Đồng Hỷ”>Huyện Đồng Hỷ
		</option”>


		<option value=“Huyện Đại Từ”>Huyện Đại Từ
		</option”>


		<option value=“Huyện Phú Bình”>Huyện Phú Bình
		</option”>


		<option value=“Thị xã Phổ Yên”>Thị xã Phổ Yên
		</option”>


		<option value=“Thành phố Việt Trì”>Thành phố Việt Trì
		</option”>


		<option value=“Thị xã Phú Thọ”>Thị xã Phú Thọ
		</option”>


		<option value=“Huyện Đoan Hùng”>Huyện Đoan Hùng
		</option”>


		<option value=“Huyện Hạ Hòa”>Huyện Hạ Hòa
		</option”>


		<option value=“Huyện Thanh Ba”>Huyện Thanh Ba
		</option”>


		<option value=“Huyện Phù Ninh”>Huyện Phù Ninh
		</option”>


		<option value=“Huyện Cẩm Khê”>Huyện Cẩm Khê
		</option”>


		<option value=“Huyện Yên Lập”>Huyện Yên Lập
		</option”>


		<option value=“Huyện Tam Nông”>Huyện Tam Nông
		</option”>


		<option value=“Huyện Thanh Sơn”>Huyện Thanh Sơn
		</option”>


		<option value=“Huyện Tân Sơn”>Huyện Tân Sơn
		</option”>


		<option value=“Huyện Lâm Thao”>Huyện Lâm Thao
		</option”>


		<option value=“Huyện Thanh Thuỷ”>Huyện Thanh Thuỷ
		</option”>


		<option value=“Thành phố Vĩnh Yên”>Thành phố Vĩnh Yên
		</option”>


		<option value=“Thị xã Phúc Yên”>Thị xã Phúc Yên
		</option”>


		<option value=“Huyện Lập Thạch”>Huyện Lập Thạch
		</option”>


		<option value=“Huyện Tam đảo”>Huyện Tam đảo
		</option”>


		<option value=“Huyện Tam Dương”>Huyện Tam Dương
		</option”>


		<option value=“Huyện Vĩnh Tường”>Huyện Vĩnh Tường
		</option”>


		<option value=“Huyện Yên Lạc”>Huyện Yên Lạc
		</option”>


		<option value=“Huyện Bình Xuyên”>Huyện Bình Xuyên
		</option”>


		<option value=“Huyện Sông Lô”>Huyện Sông Lô
		</option”>


		<option value=“Thành phố Bắc Giang”>Thành phố Bắc Giang
		</option”>


		<option value=“Huyện Yên Thế”>Huyện Yên Thế
		</option”>


		<option value=“Huyện Tân Yên”>Huyện Tân Yên
		</option”>


		<option value=“Huyện Lục Ngạn”>Huyện Lục Ngạn
		</option”>


		<option value=“Huyện Hiệp Hòa”>Huyện Hiệp Hòa
		</option”>


		<option value=“Huyện Lạng Giang”>Huyện Lạng Giang
		</option”>


		<option value=“Huyện Sơn Động”>Huyện Sơn Động
		</option”>


		<option value=“Huyện Lục Nam”>Huyện Lục Nam
		</option”>


		<option value=“Huyện Việt Yên”>Huyện Việt Yên
		</option”>


		<option value=“Huyện Yên Dũng”>Huyện Yên Dũng
		</option”>


		<option value=“Thành phố Bắc Ninh”>Thành phố Bắc Ninh
		</option”>


		<option value=“Huyện Yên Phong”>Huyện Yên Phong
		</option”>


		<option value=“Huyện Quế Võ”>Huyện Quế Võ
		</option”>


		<option value=“Huyện Tiên Du”>Huyện Tiên Du
		</option”>


		<option value=“Huyện Thuận Thành”>Huyện Thuận Thành
		</option”>


		<option value=“Huyện Lương Tài”>Huyện Lương Tài
		</option”>


		<option value=“Thị xã Từ Sơn”>Thị xã Từ Sơn
		</option”>


		<option value=“Huyện Gia Bình”>Huyện Gia Bình
		</option”>


		<option value=“Thành phố Hạ Long”>Thành phố Hạ Long
		</option”>


		<option value=“Thành phố Cẩm Phả”>Thành phố Cẩm Phả
		</option”>


		<option value=“Thành phố Uông Bí”>Thành phố Uông Bí
		</option”>


		<option value=“Huyện Bình Liêu”>Huyện Bình Liêu
		</option”>


		<option value=“Thành phố Móng cái”>Thành phố Móng cái
		</option”>


		<option value=“Huyện Hải Hà”>Huyện Hải Hà
		</option”>


		<option value=“Huyện Tiên Yên”>Huyện Tiên Yên
		</option”>


		<option value=“Huyện Ba Chẽ”>Huyện Ba Chẽ
		</option”>


		<option value=“Huyện Vân Đồn”>Huyện Vân Đồn
		</option”>


		<option value=“Huyện Hoành Bồ”>Huyện Hoành Bồ
		</option”>


		<option value=“Huyện Đông Triều”>Huyện Đông Triều
		</option”>


		<option value=“Huyện Cô Tô”>Huyện Cô Tô
		</option”>


		<option value=“Thị xã Quảng Yên”>Thị xã Quảng Yên
		</option”>


		<option value=“Huyện Đầm Hà”>Huyện Đầm Hà
		</option”>


		<option value=“Thành phố Điện Biên Phủ”>Thành phố Điện Biên Phủ
		</option”>


		<option value=“Thị xã Mường Lay”>Thị xã Mường Lay
		</option”>


		<option value=“Huyện Mường Nhé”>Huyện Mường Nhé
		</option”>


		<option value=“Huyện Mường Chà”>Huyện Mường Chà
		</option”>


		<option value=“Huyện Tủa Chùa”>Huyện Tủa Chùa
		</option”>


		<option value=“Huyện Tuần Giáo”>Huyện Tuần Giáo
		</option”>


		<option value=“Huyện Điện Biên”>Huyện Điện Biên
		</option”>


		<option value=“Huyện Điện Biên Đông”>Huyện Điện Biên Đông
		</option”>


		<option value=“Huyện Mường ảng”>Huyện Mường ảng
		</option”>


		<option value=“Huyện Nậm Pồ”>Huyện Nậm Pồ
		</option”>


		<option value=“Huyện Mường Tè”>Huyện Mường Tè
		</option”>


		<option value=“Thành Phố Lai Châu”>Thành Phố Lai Châu
		</option”>


		<option value=“Huyện Phong Thổ”>Huyện Phong Thổ
		</option”>


		<option value=“Huyện Tam Đường”>Huyện Tam Đường
		</option”>


		<option value=“Huyện Sìn Hồ”>Huyện Sìn Hồ
		</option”>


		<option value=“Huyện Than Uyên”>Huyện Than Uyên
		</option”>


		<option value=“Huyện Tân Uyên”>Huyện Tân Uyên
		</option”>


		<option value=“Huyện Nậm Nhùn”>Huyện Nậm Nhùn
		</option”>


		<option value=“Thành phố Sơn La”>Thành phố Sơn La
		</option”>


		<option value=“Huyện Quỳnh Nhai”>Huyện Quỳnh Nhai
		</option”>


		<option value=“Huyện Mường La”>Huyện Mường La
		</option”>


		<option value=“Huyện Thuận Châu”>Huyện Thuận Châu
		</option”>


		<option value=“Huyện Bắc Yên”>Huyện Bắc Yên
		</option”>


		<option value=“Huyện Phù Yên”>Huyện Phù Yên
		</option”>


		<option value=“Huyện Mai Sơn”>Huyện Mai Sơn
		</option”>


		<option value=“Huyện Sông Mã”>Huyện Sông Mã
		</option”>


		<option value=“Huyện Yên Châu”>Huyện Yên Châu
		</option”>


		<option value=“Huyện Mộc Châu”>Huyện Mộc Châu
		</option”>


		<option value=“Huyện Sốp Cộp”>Huyện Sốp Cộp
		</option”>


		<option value=“Huyện Vân Hồ”>Huyện Vân Hồ
		</option”>


		<option value=“Thành phố Hòa Bình”>Thành phố Hòa Bình
		</option”>


		<option value=“Huyện Đà Bắc”>Huyện Đà Bắc
		</option”>


		<option value=“Huyện Mai Châu”>Huyện Mai Châu
		</option”>


		<option value=“Huyện Kỳ Sơn”>Huyện Kỳ Sơn
		</option”>


		<option value=“Huyện Lương Sơn”>Huyện Lương Sơn
		</option”>


		<option value=“Huyện Cao Phong”>Huyện Cao Phong
		</option”>


		<option value=“Huyện Kim Bôi”>Huyện Kim Bôi
		</option”>


		<option value=“Huyện Tân Lạc”>Huyện Tân Lạc
		</option”>


		<option value=“Huyện Lạc Sơn”>Huyện Lạc Sơn
		</option”>


		<option value=“Huyện Lạc Thuỷ”>Huyện Lạc Thuỷ
		</option”>


		<option value=“Huyện Yên Thuỷ”>Huyện Yên Thuỷ
		</option”>


		<option value=“Thành phố Thanh Hoá”>Thành phố Thanh Hoá
		</option”>


		<option value=“Thị xã Bỉm Sơn”>Thị xã Bỉm Sơn
		</option”>


		<option value=“Thị xã Sầm Sơn”>Thị xã Sầm Sơn
		</option”>


		<option value=“Huyện Mường Lát”>Huyện Mường Lát
		</option”>


		<option value=“Huyện Quan Hoá”>Huyện Quan Hoá
		</option”>


		<option value=“Huyện Quan Sơn”>Huyện Quan Sơn
		</option”>


		<option value=“Huyện Bá Thước”>Huyện Bá Thước
		</option”>


		<option value=“Huyện Cẩm Thuỷ”>Huyện Cẩm Thuỷ
		</option”>


		<option value=“Huyện Lang Chánh”>Huyện Lang Chánh
		</option”>


		<option value=“Huyện Thạch Thành”>Huyện Thạch Thành
		</option”>


		<option value=“Huyện Ngọc Lặc”>Huyện Ngọc Lặc
		</option”>


		<option value=“Huyện Thường Xuân”>Huyện Thường Xuân
		</option”>


		<option value=“Huyện Như Xuân”>Huyện Như Xuân
		</option”>


		<option value=“Huyện Như Thanh”>Huyện Như Thanh
		</option”>


		<option value=“Huyện Vĩnh Lộc”>Huyện Vĩnh Lộc
		</option”>


		<option value=“Huyện Hà Trung”>Huyện Hà Trung
		</option”>


		<option value=“Huyện Nga Sơn”>Huyện Nga Sơn
		</option”>


		<option value=“Huyện Yên Định”>Huyện Yên Định
		</option”>


		<option value=“Huyện Thọ Xuân”>Huyện Thọ Xuân
		</option”>


		<option value=“Huyện Hậu Lộc”>Huyện Hậu Lộc
		</option”>


		<option value=“Huyện Thiệu Hoá”>Huyện Thiệu Hoá
		</option”>


		<option value=“Huyện Hoằng Hoá”>Huyện Hoằng Hoá
		</option”>


		<option value=“Huyện Đông Sơn”>Huyện Đông Sơn
		</option”>


		<option value=“Huyện Triệu Sơn”>Huyện Triệu Sơn
		</option”>


		<option value=“Huyện Quảng Xương”>Huyện Quảng Xương
		</option”>


		<option value=“Huyện Nông Cống”>Huyện Nông Cống
		</option”>


		<option value=“Huyện Tĩnh Gia”>Huyện Tĩnh Gia
		</option”>


		<option value=“Thành phố Vinh”>Thành phố Vinh
		</option”>


		<option value=“Thị xã Cửa Lò”>Thị xã Cửa Lò
		</option”>


		<option value=“Huyện Quế Phong”>Huyện Quế Phong
		</option”>


		<option value=“Huyện Quỳ Châu”>Huyện Quỳ Châu
		</option”>


		<option value=“Huyện Kỳ Sơn”>Huyện Kỳ Sơn
		</option”>


		<option value=“Huyện Quỳ Hợp”>Huyện Quỳ Hợp
		</option”>


		<option value=“Huyện Nghĩa Đàn”>Huyện Nghĩa Đàn
		</option”>


		<option value=“Thị xã Thái Hòa”>Thị xã Thái Hòa
		</option”>


		<option value=“Huyện Tương Dương”>Huyện Tương Dương
		</option”>


		<option value=“Huyện Quỳnh Lưu”>Huyện Quỳnh Lưu
		</option”>


		<option value=“Huyện Tân Kỳ”>Huyện Tân Kỳ
		</option”>


		<option value=“Huyện Con Cuông”>Huyện Con Cuông
		</option”>


		<option value=“Huyện Yên Thành”>Huyện Yên Thành
		</option”>


		<option value=“Huyện Diễn Châu”>Huyện Diễn Châu
		</option”>


		<option value=“Huyện Anh Sơn”>Huyện Anh Sơn
		</option”>


		<option value=“Huyện Đô Lương”>Huyện Đô Lương
		</option”>


		<option value=“Huyện Thanh Chương”>Huyện Thanh Chương
		</option”>


		<option value=“Huyện Nghi Lộc”>Huyện Nghi Lộc
		</option”>


		<option value=“Huyện Nam Đàn”>Huyện Nam Đàn
		</option”>


		<option value=“Huyện Hưng Nguyên”>Huyện Hưng Nguyên
		</option”>


		<option value=“Thị xã Hoàng Mai”>Thị xã Hoàng Mai
		</option”>


		<option value=“Thành phố Hà Tĩnh”>Thành phố Hà Tĩnh
		</option”>


		<option value=“Thị xã Hồng Lĩnh”>Thị xã Hồng Lĩnh
		</option”>


		<option value=“Huyện Nghi Xuân”>Huyện Nghi Xuân
		</option”>


		<option value=“Huyện Đức Thọ”>Huyện Đức Thọ
		</option”>


		<option value=“Huyện Hương Sơn”>Huyện Hương Sơn
		</option”>


		<option value=“Huyện Can Lộc”>Huyện Can Lộc
		</option”>


		<option value=“Huyện Thạch Hà”>Huyện Thạch Hà
		</option”>


		<option value=“Huyện Cẩm Xuyên”>Huyện Cẩm Xuyên
		</option”>


		<option value=“Huyện Hương Khê”>Huyện Hương Khê
		</option”>


		<option value=“Huyện Kỳ Anh”>Huyện Kỳ Anh
		</option”>


		<option value=“Thị Xã Kỳ Anh”>Thị Xã Kỳ Anh
		</option”>


		<option value=“Huyện Vũ Quang”>Huyện Vũ Quang
		</option”>


		<option value=“Huyện Lộc Hà”>Huyện Lộc Hà
		</option”>


		<option value=“Thành phố Đồng Hới”>Thành phố Đồng Hới
		</option”>


		<option value=“Huyện Tuyên Hoá”>Huyện Tuyên Hoá
		</option”>


		<option value=“Huyện Minh Hoá”>Huyện Minh Hoá
		</option”>


		<option value=“Huyện Quảng Trạch”>Huyện Quảng Trạch
		</option”>


		<option value=“Huyện Bố Trạch”>Huyện Bố Trạch
		</option”>


		<option value=“Huyện Quảng Ninh”>Huyện Quảng Ninh
		</option”>


		<option value=“Huyện Lệ Thuỷ”>Huyện Lệ Thuỷ
		</option”>


		<option value=“Thị Xã Ba Đồn”>Thị Xã Ba Đồn
		</option”>


		<option value=“Thành phố Đông Hà”>Thành phố Đông Hà
		</option”>


		<option value=“Thị xã Quảng Trị”>Thị xã Quảng Trị
		</option”>


		<option value=“Huyện Vĩnh Linh”>Huyện Vĩnh Linh
		</option”>


		<option value=“Huyện Gio Linh”>Huyện Gio Linh
		</option”>


		<option value=“Huyện Cam Lộ”>Huyện Cam Lộ
		</option”>


		<option value=“Huyện Triệu Phong”>Huyện Triệu Phong
		</option”>


		<option value=“Huyện Hải Lăng”>Huyện Hải Lăng
		</option”>


		<option value=“Huyện Hướng Hoá”>Huyện Hướng Hoá
		</option”>


		<option value=“Huyện Đa Krông”>Huyện Đa Krông
		</option”>


		<option value=“Huyện Đảo Cồn Cỏ”>Huyện Đảo Cồn Cỏ
		</option”>


		<option value=“Thành phố Huế”>Thành phố Huế
		</option”>


		<option value=“Huyện Phong Điền”>Huyện Phong Điền
		</option”>


		<option value=“Huyện Quảng Điền”>Huyện Quảng Điền
		</option”>


		<option value=“Thị Xã Hương Trà”>Thị Xã Hương Trà
		</option”>


		<option value=“Huyện Phú Vang”>Huyện Phú Vang
		</option”>


		<option value=“Thị xã Hương Thuỷ”>Thị xã Hương Thuỷ
		</option”>


		<option value=“Huyện Phú Lộc”>Huyện Phú Lộc
		</option”>


		<option value=“Huyện A Lưới”>Huyện A Lưới
		</option”>


		<option value=“Huyện Nam Đông”>Huyện Nam Đông
		</option”>


		<option value=“Quận Hải Châu”>Quận Hải Châu
		</option”>


		<option value=“Quận Thanh Khê”>Quận Thanh Khê
		</option”>


		<option value=“Quận Sơn Trà”>Quận Sơn Trà
		</option”>


		<option value=“Quận Ngũ Hành Sơn”>Quận Ngũ Hành Sơn
		</option”>


		<option value=“Quận Liên Chiểu”>Quận Liên Chiểu
		</option”>


		<option value=“Huyện Hòa Vang”>Huyện Hòa Vang
		</option”>


		<option value=“Huyện Đảo Hoàng Sa”>Huyện Đảo Hoàng Sa
		</option”>


		<option value=“Quận Cẩm Lệ”>Quận Cẩm Lệ
		</option”>


		<option value=“Thành phố Tam Kỳ”>Thành phố Tam Kỳ
		</option”>


		<option value=“Huyện Phú Ninh”>Huyện Phú Ninh
		</option”>


		<option value=“Thành phố Hội An”>Thành phố Hội An
		</option”>


		<option value=“Huyện Tây Giang”>Huyện Tây Giang
		</option”>


		<option value=“Huyện Đông Giang”>Huyện Đông Giang
		</option”>


		<option value=“Huyện Đại Lộc”>Huyện Đại Lộc
		</option”>


		<option value=“Huyện Điện Bàn”>Huyện Điện Bàn
		</option”>


		<option value=“Huyện Duy Xuyên”>Huyện Duy Xuyên
		</option”>


		<option value=“Huyện Nam Giang”>Huyện Nam Giang
		</option”>


		<option value=“Huyện Thăng Bình”>Huyện Thăng Bình
		</option”>


		<option value=“Huyện Quế Sơn”>Huyện Quế Sơn
		</option”>


		<option value=“Huyện Nông Sơn”>Huyện Nông Sơn
		</option”>


		<option value=“Huyện Hiệp Đức”>Huyện Hiệp Đức
		</option”>


		<option value=“Huyện Tiên Phước”>Huyện Tiên Phước
		</option”>


		<option value=“Huyện Phước Sơn”>Huyện Phước Sơn
		</option”>


		<option value=“Huyện Núi Thành”>Huyện Núi Thành
		</option”>


		<option value=“Huyện Bắc Trà My”>Huyện Bắc Trà My
		</option”>


		<option value=“Huyện Nam Trà My”>Huyện Nam Trà My
		</option”>


		<option value=“Thành phố Quảng Ngãi”>Thành phố Quảng Ngãi
		</option”>


		<option value=“Huyện Lý Sơn”>Huyện Lý Sơn
		</option”>


		<option value=“Huyện Bình Sơn”>Huyện Bình Sơn
		</option”>


		<option value=“Huyện Trà Bồng”>Huyện Trà Bồng
		</option”>


		<option value=“Huyện Tây Trà”>Huyện Tây Trà
		</option”>


		<option value=“Huyện Sơn Tịnh”>Huyện Sơn Tịnh
		</option”>


		<option value=“Huyện Sơn Tây”>Huyện Sơn Tây
		</option”>


		<option value=“Huyện Sơn Hà”>Huyện Sơn Hà
		</option”>


		<option value=“Huyện Tư Nghĩa”>Huyện Tư Nghĩa
		</option”>


		<option value=“Huyện Nghĩa Hành”>Huyện Nghĩa Hành
		</option”>


		<option value=“Huyện Minh Long”>Huyện Minh Long
		</option”>


		<option value=“Huyện Mộ Đức”>Huyện Mộ Đức
		</option”>


		<option value=“Huyện Đức Phổ”>Huyện Đức Phổ
		</option”>


		<option value=“Huyện Ba Tơ”>Huyện Ba Tơ
		</option”>


		<option value=“Thành phố Quy Nhơn”>Thành phố Quy Nhơn
		</option”>


		<option value=“Huyện An Lão”>Huyện An Lão
		</option”>


		<option value=“Huyện Hòai Nhơn”>Huyện Hòai Nhơn
		</option”>


		<option value=“Huyện Hòai Ân”>Huyện Hòai Ân
		</option”>


		<option value=“Huyện Phù Mỹ”>Huyện Phù Mỹ
		</option”>


		<option value=“Huyện Vĩnh Thạnh”>Huyện Vĩnh Thạnh
		</option”>


		<option value=“Huyện Phù Cát”>Huyện Phù Cát
		</option”>


		<option value=“Huyện Tây Sơn”>Huyện Tây Sơn
		</option”>


		<option value=“Thị Xã An Nhơn”>Thị Xã An Nhơn
		</option”>


		<option value=“Huyện Tuy Phước”>Huyện Tuy Phước
		</option”>


		<option value=“Huyện Vân Canh”>Huyện Vân Canh
		</option”>


		<option value=“TP Tuy Hòa”>TP Tuy Hòa
		</option”>


		<option value=“Huyện Đồng Xuân”>Huyện Đồng Xuân
		</option”>


		<option value=“Thị xã Sông Cầu”>Thị xã Sông Cầu
		</option”>


		<option value=“Huyện Tuy An”>Huyện Tuy An
		</option”>


		<option value=“Huyện Sơn Hòa”>Huyện Sơn Hòa
		</option”>


		<option value=“Huyện Đông Hòa”>Huyện Đông Hòa
		</option”>


		<option value=“Huyện Tây Hòa”>Huyện Tây Hòa
		</option”>


		<option value=“Huyện Sông Hinh”>Huyện Sông Hinh
		</option”>


		<option value=“Huyện Phú Hòa”>Huyện Phú Hòa
		</option”>


		<option value=“Thành phố Nha Trang”>Thành phố Nha Trang
		</option”>


		<option value=“Huyện Vạn Ninh”>Huyện Vạn Ninh
		</option”>


		<option value=“Thị xã Ninh Hòa”>Thị xã Ninh Hòa
		</option”>


		<option value=“Huyện Diên Khánh”>Huyện Diên Khánh
		</option”>


		<option value=“Thành phố Cam Ranh”>Thành phố Cam Ranh
		</option”>


		<option value=“Huyện Khánh Vĩnh”>Huyện Khánh Vĩnh
		</option”>


		<option value=“Huyện Khánh Sơn”>Huyện Khánh Sơn
		</option”>


		<option value=“Huyện Trường Sa”>Huyện Trường Sa
		</option”>


		<option value=“Huyện Cam Lâm”>Huyện Cam Lâm
		</option”>


		<option value=“Thành phố Kon Tum”>Thành phố Kon Tum
		</option”>


		<option value=“Huyện Đắk Glei”>Huyện Đắk Glei
		</option”>


		<option value=“Huyện Ngọc Hồi”>Huyện Ngọc Hồi
		</option”>


		<option value=“Huyện Đắk Tô”>Huyện Đắk Tô
		</option”>


		<option value=“Huyện Kon Rẫy”>Huyện Kon Rẫy
		</option”>


		<option value=“Huyện Kon Plông”>Huyện Kon Plông
		</option”>


		<option value=“Huyện Đắk Hà”>Huyện Đắk Hà
		</option”>


		<option value=“Huyện Sa Thầy”>Huyện Sa Thầy
		</option”>


		<option value=“Huyện Ia H'Drai”>Huyện Ia H'Drai
		</option”>


		<option value=“Huyện Tu Mơ Rông”>Huyện Tu Mơ Rông
		</option”>


		<option value=“Thành phố Pleiku”>Thành phố Pleiku
		</option”>


		<option value=“Huyện Kbang”>Huyện Kbang
		</option”>


		<option value=“Huyện Mang Yang”>Huyện Mang Yang
		</option”>


		<option value=“Huyện Chư Păh”>Huyện Chư Păh
		</option”>


		<option value=“Huyện Ia Grai”>Huyện Ia Grai
		</option”>


		<option value=“Thị xã An Khê”>Thị xã An Khê
		</option”>


		<option value=“Huyện Kông Chro”>Huyện Kông Chro
		</option”>


		<option value=“Huyện Đức Cơ”>Huyện Đức Cơ
		</option”>


		<option value=“Huyện Chư Prông”>Huyện Chư Prông
		</option”>


		<option value=“Huyện Chư Sê”>Huyện Chư Sê
		</option”>


		<option value=“Huyện IaPa”>Huyện IaPa
		</option”>


		<option value=“Thị xã Ayun Pa”>Thị xã Ayun Pa
		</option”>


		<option value=“Huyện Krông Pa”>Huyện Krông Pa
		</option”>


		<option value=“Huyện Đak Đoa”>Huyện Đak Đoa
		</option”>


		<option value=“Huyện Đắk Pơ”>Huyện Đắk Pơ
		</option”>


		<option value=“Huyện Phú Thiện”>Huyện Phú Thiện
		</option”>


		<option value=“Huyện Chư Pưh”>Huyện Chư Pưh
		</option”>


		<option value=“Thành phố Buôn Ma Thuột”>Thành phố Buôn Ma Thuột
		</option”>


		<option value=“Huyện Ea H'leo”>Huyện Ea H'leo
		</option”>


		<option value=“Huyện Ea Súp”>Huyện Ea Súp
		</option”>


		<option value=“Huyện Krông Năng”>Huyện Krông Năng
		</option”>


		<option value=“Thị xã Buôn Hồ”>Thị xã Buôn Hồ
		</option”>


		<option value=“Huyện Buôn Đôn”>Huyện Buôn Đôn
		</option”>


		<option value=“Huyện Cư M'gar”>Huyện Cư M'gar
		</option”>


		<option value=“Huyện Ea Kar”>Huyện Ea Kar
		</option”>


		<option value=“Huyện M'ĐrắK”>Huyện M'ĐrắK
		</option”>


		<option value=“Huyện Krông Pắk”>Huyện Krông Pắk
		</option”>


		<option value=“Huyện Krông A Na”>Huyện Krông A Na
		</option”>


		<option value=“Huyện Krông Bông”>Huyện Krông Bông
		</option”>


		<option value=“Huyện Lắk”>Huyện Lắk
		</option”>


		<option value=“Huyện Cư Kuin”>Huyện Cư Kuin
		</option”>


		<option value=“Huyện Krông Búk”>Huyện Krông Búk
		</option”>


		<option value=“Huyện Cư Jút”>Huyện Cư Jút
		</option”>


		<option value=“Huyện Krông Nô”>Huyện Krông Nô
		</option”>


		<option value=“Huyện Đắk Mil”>Huyện Đắk Mil
		</option”>


		<option value=“Huyện Đắk Song”>Huyện Đắk Song
		</option”>


		<option value=“Huyện Đắk R'Lấp”>Huyện Đắk R'Lấp
		</option”>


		<option value=“Thị xã Gia Nghĩa”>Thị xã Gia Nghĩa
		</option”>


		<option value=“Huyện Đắk Glong”>Huyện Đắk Glong
		</option”>


		<option value=“Huyện Tuy Đức”>Huyện Tuy Đức
		</option”>


		<option value=“Quận 1”>Quận 1
		</option”>


		<option value=“Quận 2”>Quận 2
		</option”>


		<option value=“Quận 3”>Quận 3
		</option”>


		<option value=“Quận 4”>Quận 4
		</option”>


		<option value=“Quận 5”>Quận 5
		</option”>


		<option value=“Quận 6”>Quận 6
		</option”>


		<option value=“Quận 7”>Quận 7
		</option”>


		<option value=“Quận 8”>Quận 8
		</option”>


		<option value=“Quận 9”>Quận 9
		</option”>


		<option value=“Quận 10”>Quận 10
		</option”>


		<option value=“Quận 11”>Quận 11
		</option”>


		<option value=“Quận 12”>Quận 12
		</option”>


		<option value=“Quận Gò Vấp”>Quận Gò Vấp
		</option”>


		<option value=“Quận Tân Bình”>Quận Tân Bình
		</option”>


		<option value=“Quận Tân phú”>Quận Tân phú
		</option”>


		<option value=“Quận Bình Thạnh”>Quận Bình Thạnh
		</option”>


		<option value=“Quận Phú Nhuận”>Quận Phú Nhuận
		</option”>


		<option value=“Quận Thủ Đức”>Quận Thủ Đức
		</option”>


		<option value=“Quận Bình Tân”>Quận Bình Tân
		</option”>


		<option value=“Huyện Củ Chi”>Huyện Củ Chi
		</option”>


		<option value=“Huyện Hóc Môn”>Huyện Hóc Môn
		</option”>


		<option value=“Huyện Bình Chánh”>Huyện Bình Chánh
		</option”>


		<option value=“Huyện Nhà Bè”>Huyện Nhà Bè
		</option”>


		<option value=“Huyện Cần Giờ”>Huyện Cần Giờ
		</option”>


		<option value=“Thành phố Đà Lạt”>Thành phố Đà Lạt
		</option”>


		<option value=“Thành phố Bảo Lộc”>Thành phố Bảo Lộc
		</option”>


		<option value=“Huyện Lạc Dương”>Huyện Lạc Dương
		</option”>


		<option value=“Huyện Đơn Dương”>Huyện Đơn Dương
		</option”>


		<option value=“Huyện Đức Trọng”>Huyện Đức Trọng
		</option”>


		<option value=“Huyện Lâm Hà”>Huyện Lâm Hà
		</option”>


		<option value=“Huyện Bảo Lâm”>Huyện Bảo Lâm
		</option”>


		<option value=“Huyện Di Linh”>Huyện Di Linh
		</option”>


		<option value=“Huyện Đạ Huoai”>Huyện Đạ Huoai
		</option”>


		<option value=“Huyện Đạ Tẻh”>Huyện Đạ Tẻh
		</option”>


		<option value=“Huyện Cát Tiên”>Huyện Cát Tiên
		</option”>


		<option value=“Huyện Đam Rông”>Huyện Đam Rông
		</option”>


		<option value=“TP. Phan Rang-Tháp Chàm”>TP. Phan Rang-Tháp Chàm
		</option”>


		<option value=“Huyện Ninh Sơn”>Huyện Ninh Sơn
		</option”>


		<option value=“Huyện Ninh Hải”>Huyện Ninh Hải
		</option”>


		<option value=“Huyện Ninh Phước”>Huyện Ninh Phước
		</option”>


		<option value=“Huyện Bác ái”>Huyện Bác ái
		</option”>


		<option value=“Huyện Thuận Bắc”>Huyện Thuận Bắc
		</option”>


		<option value=“Huyện Thuận Nam”>Huyện Thuận Nam
		</option”>


		<option value=“Huyện Đồng Phú”>Huyện Đồng Phú
		</option”>


		<option value=“Thị xã Phước Long”>Thị xã Phước Long
		</option”>


		<option value=“Huyện Lộc Ninh”>Huyện Lộc Ninh
		</option”>


		<option value=“Huyện Bù Đốp”>Huyện Bù Đốp
		</option”>


		<option value=“Huyện Bù Đăng”>Huyện Bù Đăng
		</option”>


		<option value=“Thị xã Bình Long”>Thị xã Bình Long
		</option”>


		<option value=“Huyện Chơn Thành”>Huyện Chơn Thành
		</option”>


		<option value=“Thị xã Đồng Xoài”>Thị xã Đồng Xoài
		</option”>


		<option value=“Huyện Hớn Quản”>Huyện Hớn Quản
		</option”>


		<option value=“Huyện Bù Gia Mập”>Huyện Bù Gia Mập
		</option”>


		<option value=“Huyện Phú Riềng”>Huyện Phú Riềng
		</option”>


		<option value=“Thành phố Tây Ninh”>Thành phố Tây Ninh
		</option”>


		<option value=“Huyện Tân Biên”>Huyện Tân Biên
		</option”>


		<option value=“Huyện Tân Châu”>Huyện Tân Châu
		</option”>


		<option value=“Huyện Dương Minh Châu”>Huyện Dương Minh Châu
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Hòa Thành”>Huyện Hòa Thành
		</option”>


		<option value=“Huyện Bến Cầu”>Huyện Bến Cầu
		</option”>


		<option value=“Huyện Gò Dầu”>Huyện Gò Dầu
		</option”>


		<option value=“Huyện Trảng Bàng”>Huyện Trảng Bàng
		</option”>


		<option value=“Thành phố Thủ Dầu Một”>Thành phố Thủ Dầu Một
		</option”>


		<option value=“Thị Xã Bến Cát”>Thị Xã Bến Cát
		</option”>


		<option value=“Thị xã Tân Uyên”>Thị xã Tân Uyên
		</option”>


		<option value=“Thị xã Thuận An”>Thị xã Thuận An
		</option”>


		<option value=“Thị xã Dĩ An”>Thị xã Dĩ An
		</option”>


		<option value=“Huyện Phú Giáo”>Huyện Phú Giáo
		</option”>


		<option value=“Huyện Dầu Tiếng”>Huyện Dầu Tiếng
		</option”>


		<option value=“Huyện Bàu Bàng”>Huyện Bàu Bàng
		</option”>


		<option value=“Huyện Bắc Tân Uyên”>Huyện Bắc Tân Uyên
		</option”>


		<option value=“Thành phố Biên Hòa”>Thành phố Biên Hòa
		</option”>


		<option value=“Thị xã Long khánh”>Thị xã Long khánh
		</option”>


		<option value=“Huyện Tân Phú”>Huyện Tân Phú
		</option”>


		<option value=“Huyện Định Quán”>Huyện Định Quán
		</option”>


		<option value=“Huyện Vĩnh Cửu”>Huyện Vĩnh Cửu
		</option”>


		<option value=“Huyện Trảng Bom”>Huyện Trảng Bom
		</option”>


		<option value=“Huyện Thống Nhất”>Huyện Thống Nhất
		</option”>


		<option value=“Huyện Cẩm Mỹ”>Huyện Cẩm Mỹ
		</option”>


		<option value=“Huyện Xuân Lộc”>Huyện Xuân Lộc
		</option”>


		<option value=“Huyện Long Thành”>Huyện Long Thành
		</option”>


		<option value=“Huyện Nhơn Trạch”>Huyện Nhơn Trạch
		</option”>


		<option value=“Thành phố Phan Thiết”>Thành phố Phan Thiết
		</option”>


		<option value=“Huyện Tuy Phong”>Huyện Tuy Phong
		</option”>


		<option value=“Huyện Bắc Bình”>Huyện Bắc Bình
		</option”>


		<option value=“Huyện Hàm Thuận Bắc”>Huyện Hàm Thuận Bắc
		</option”>


		<option value=“Huyện Hàm Thuận Nam”>Huyện Hàm Thuận Nam
		</option”>


		<option value=“Huyện Tánh Linh”>Huyện Tánh Linh
		</option”>


		<option value=“Thị xã La Gi”>Thị xã La Gi
		</option”>


		<option value=“Huyện Hàm Tân”>Huyện Hàm Tân
		</option”>


		<option value=“Huyện Đức Linh”>Huyện Đức Linh
		</option”>


		<option value=“Huyện Phú Quý”>Huyện Phú Quý
		</option”>


		<option value=“Thành Phố Vũng Tàu”>Thành Phố Vũng Tàu
		</option”>


		<option value=“Thành phố Bà Rịa”>Thành phố Bà Rịa
		</option”>


		<option value=“Huyện Châu Đức”>Huyện Châu Đức
		</option”>


		<option value=“Huyện Xuyên Mộc”>Huyện Xuyên Mộc
		</option”>


		<option value=“Huyện Tân Thành”>Huyện Tân Thành
		</option”>


		<option value=“Huyện Long Điền”>Huyện Long Điền
		</option”>


		<option value=“Huyện Đất đỏ”>Huyện Đất đỏ
		</option”>


		<option value=“Huyện Côn Đảo”>Huyện Côn Đảo
		</option”>


		<option value=“Thành phố Tân An”>Thành phố Tân An
		</option”>


		<option value=“Huyện Tân Hưng”>Huyện Tân Hưng
		</option”>


		<option value=“Huyện Vĩnh Hưng”>Huyện Vĩnh Hưng</option”>
		<option value=“Huyện Mộc Hoá”>Huyện Mộc Hoá</option”>
		<option value=“Huyện Tân Thạnh”>Huyện Tân Thạnh</option”>
		<option value=“Huyện Thạnh Hoá”>Huyện Thạnh Hoá
		</option”>
		<option value=“Huyện Đức Huệ”>Huyện Đức Huệ
		</option”>


		<option value=“Huyện Đức Hòa”>Huyện Đức Hòa
		</option”>


		<option value=“Huyện Bến Lức”>Huyện Bến Lức
		</option”>


		<option value=“Huyện Thủ Thừa”>Huyện Thủ Thừa
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Tân Trụ”>Huyện Tân Trụ
		</option”>


		<option value=“Huyện Cần Đước”>Huyện Cần Đước
		</option”>


		<option value=“Huyện Cần Giuộc”>Huyện Cần Giuộc
		</option”>


		<option value=“Thị xã Kiến Tường”>Thị xã Kiến Tường
		</option”>


		<option value=“Thành phố Cao Lãnh”>Thành phố Cao Lãnh
		</option”>


		<option value=“Thành phố Sa Đéc”>Thành phố Sa Đéc
		</option”>


		<option value=“Huyện Tân Hồng”>Huyện Tân Hồng
		</option”>


		<option value=“Huyện Hồng Ngự”>Huyện Hồng Ngự
		</option”>


		<option value=“Huyện Tam Nông”>Huyện Tam Nông
		</option”>


		<option value=“Huyện Thanh Bình”>Huyện Thanh Bình
		</option”>


		<option value=“Huyện Tháp Mười”>Huyện Tháp Mười
		</option”>


		<option value=“Huyện Cao Lãnh”>Huyện Cao Lãnh
		</option”>


		<option value=“Huyện Lấp Vò”>Huyện Lấp Vò
		</option”>


		<option value=“Huyện Lai Vung”>Huyện Lai Vung
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Thị xã Hồng Ngự”>Thị xã Hồng Ngự
		</option”>


		<option value=“Thành phố Long Xuyên”>Thành phố Long Xuyên
		</option”>


		<option value=“Thành phố Châu Đốc”>Thành phố Châu Đốc
		</option”>


		<option value=“Huyện An Phú”>Huyện An Phú
		</option”>


		<option value=“Thị xã Tân Châu”>Thị xã Tân Châu
		</option”>


		<option value=“Huyện Phú Tân”>Huyện Phú Tân
		</option”>


		<option value=“Huyện Châu Phú”>Huyện Châu Phú
		</option”>


		<option value=“Huyện Tịnh Biên”>Huyện Tịnh Biên
		</option”>


		<option value=“Huyện Tri Tôn”>Huyện Tri Tôn
		</option”>


		<option value=“Huyện Chợ Mới”>Huyện Chợ Mới
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Thoại Sơn”>Huyện Thoại Sơn
		</option”>


		<option value=“Thành phố Mỹ Tho”>Thành phố Mỹ Tho
		</option”>


		<option value=“Thị xã Gò Công”>Thị xã Gò Công
		</option”>


		<option value=“Huyện Tân Phước”>Huyện Tân Phước
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Cai Lậy”>Huyện Cai Lậy
		</option”>


		<option value=“Huyện Chợ Gạo”>Huyện Chợ Gạo
		</option”>


		<option value=“Huyện Cái Bè”>Huyện Cái Bè
		</option”>


		<option value=“Huyện Gò Công Tây”>Huyện Gò Công Tây
		</option”>


		<option value=“Huyện Gò Công Đông”>Huyện Gò Công Đông
		</option”>


		<option value=“Huyện Tân Phú Đông”>Huyện Tân Phú Đông
		</option”>


		<option value=“Thị Xã Cai Lậy”>Thị Xã Cai Lậy
		</option”>


		<option value=“Thành phố Vĩnh Long”>Thành phố Vĩnh Long
		</option”>


		<option value=“Huyện Long Hồ”>Huyện Long Hồ
		</option”>


		<option value=“Huyện Mang Thít”>Huyện Mang Thít
		</option”>


		<option value=“Thị xã Bình Minh”>Thị xã Bình Minh
		</option”>


		<option value=“Huyện Bình Tân”>Huyện Bình Tân
		</option”>


		<option value=“Huyện Tam Bình”>Huyện Tam Bình
		</option”>


		<option value=“Huyện Trà Ôn”>Huyện Trà Ôn
		</option”>


		<option value=“Huyện Vũng Liêm”>Huyện Vũng Liêm
		</option”>


		<option value=“Thành phố Bến Tre”>Thành phố Bến Tre
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Chợ Lách”>Huyện Chợ Lách
		</option”>


		<option value=“Huyện Mỏ Cày Nam”>Huyện Mỏ Cày Nam
		</option”>


		<option value=“Huyện Mỏ Cày Bắc”>Huyện Mỏ Cày Bắc
		</option”>


		<option value=“Huyện Giồng Trôm”>Huyện Giồng Trôm
		</option”>


		<option value=“Huyện Bình Đại”>Huyện Bình Đại
		</option”>


		<option value=“Huyện Ba Tri”>Huyện Ba Tri
		</option”>


		<option value=“Huyện Thạnh Phú”>Huyện Thạnh Phú
		</option”>


		<option value=“Thành phố Rạch Giá”>Thành phố Rạch Giá
		</option”>


		<option value=“Huyện Kiên Lương”>Huyện Kiên Lương
		</option”>


		<option value=“Huyện Giang Thành”>Huyện Giang Thành
		</option”>


		<option value=“Huyện Hòn Đất”>Huyện Hòn Đất
		</option”>


		<option value=“Huyện Tân Hiệp”>Huyện Tân Hiệp
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Giồng Riềng”>Huyện Giồng Riềng
		</option”>


		<option value=“Huyện Gò Quao”>Huyện Gò Quao
		</option”>


		<option value=“Huyện An Biên”>Huyện An Biên
		</option”>


		<option value=“Huyện An Minh”>Huyện An Minh
		</option”>


		<option value=“Huyện Vĩnh Thuận”>Huyện Vĩnh Thuận
		</option”>


		<option value=“Huyện Phú Quốc”>Huyện Phú Quốc
		</option”>


		<option value=“Huyện Kiên Hải”>Huyện Kiên Hải
		</option”>


		<option value=“Thị xã Hà Tiên”>Thị xã Hà Tiên
		</option”>


		<option value=“Huyện U Minh Thượng”>Huyện U Minh Thượng
		</option”>


		<option value=“Quận Thốt Nốt”>Quận Thốt Nốt
		</option”>


		<option value=“Quận Ô Môn”>Quận Ô Môn
		</option”>


		<option value=“Quận Ninh Kiều”>Quận Ninh Kiều
		</option”>


		<option value=“Quận Bình Thuỷ”>Quận Bình Thuỷ
		</option”>


		<option value=“Quận Cái Răng”>Quận Cái Răng
		</option”>


		<option value=“Huyện Vĩnh Thạnh”>Huyện Vĩnh Thạnh
		</option”>


		<option value=“Huyện Cờ Đỏ”>Huyện Cờ Đỏ
		</option”>


		<option value=“Huyện Phong Điền”>Huyện Phong Điền
		</option”>


		<option value=“Huyện Thới Lai”>Huyện Thới Lai
		</option”>


		<option value=“Tp Vị Thanh”>Tp Vị Thanh
		</option”>


		<option value=“Huyện Châu Thành A”>Huyện Châu Thành A
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Thị Xã Ngã Bảy”>Thị Xã Ngã Bảy
		</option”>


		<option value=“Huyện Phụng Hiệp”>Huyện Phụng Hiệp
		</option”>


		<option value=“Huyện Vị Thủy”>Huyện Vị Thủy
		</option”>


		<option value=“Huyện Long Mỹ”>Huyện Long Mỹ
		</option”>


		<option value=“Thị Xã Long Mỹ”>Thị Xã Long Mỹ
		</option”>


		<option value=“Thành phố Trà Vinh”>Thành phố Trà Vinh
		</option”>


		<option value=“Huyện Càng Long”>Huyện Càng Long
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Cầu Kè”>Huyện Cầu Kè
		</option”>


		<option value=“Huyện Tiểu Cần”>Huyện Tiểu Cần
		</option”>


		<option value=“Huyện Cầu Ngang”>Huyện Cầu Ngang
		</option”>


		<option value=“Huyện Trà Cú”>Huyện Trà Cú
		</option”>


		<option value=“Huyện Duyên Hải”>Huyện Duyên Hải
		</option”>


		<option value=“Thành phố Sóc Trăng”>Thành phố Sóc Trăng
		</option”>


		<option value=“Huyện Kế Sách”>Huyện Kế Sách
		</option”>


		<option value=“Huyện Long Phú”>Huyện Long Phú
		</option”>


		<option value=“Huyện Cù Lao Dung”>Huyện Cù Lao Dung
		</option”>


		<option value=“Huyện Mỹ Tú”>Huyện Mỹ Tú
		</option”>


		<option value=“Huyện Mỹ Xuyên”>Huyện Mỹ Xuyên
		</option”>


		<option value=“Huyện Thạnh Trị”>Huyện Thạnh Trị
		</option”>


		<option value=“Thị Xã Ngã Năm”>Thị Xã Ngã Năm
		</option”>


		<option value=“Thị Xã Vĩnh Châu”>Thị Xã Vĩnh Châu
		</option”>


		<option value=“Huyện Châu Thành”>Huyện Châu Thành
		</option”>


		<option value=“Huyện Trần Đề”>Huyện Trần Đề
		</option”>


		<option value=“Thành Phố Bạc Liêu”>Thành Phố Bạc Liêu
		</option”>


		<option value=“Huyện Hồng Dân”>Huyện Hồng Dân
		</option”>


		<option value=“Huyện Vĩnh Lợi”>Huyện Vĩnh Lợi
		</option”>


		<option value=“Huyện Hòa Bình”>Huyện Hòa Bình
		</option”>


		<option value=“Thị xã Giá Rai”>Thị xã Giá Rai
		</option”>


		<option value=“Huyện Phước Long”>Huyện Phước Long
		</option”>


		<option value=“Huyện Đông Hải”>Huyện Đông Hải
		</option”>


		<option value=“Thành phố Cà Mau”>Thành phố Cà Mau
		</option”>


		<option value=“Huyện Thới Bình”>Huyện Thới Bình
		</option”>


		<option value=“Huyện U Minh”>Huyện U Minh</option”>


			<option value=“Huyện Trần Văn Thời”>Huyện Trần Văn Thời</option”>


				<option value=“Huyện Phú Tân”>Huyện Phú Tân
				</option”>


				<option value=“Huyện Cái Nước”>Huyện Cái Nước
				</option”>


				<option value=“Huyện Đầm Dơi”>Huyện Đầm Dơi
				</option”>


				<option value=“Huyện Năm Căn”>Huyện Năm Căn
				</option”>


				<option value=“Huyện Ngọc Hiển”>Huyện Ngọc Hiển
				</option”>


			</select><br>
			<label for="ward">Xã phường</label><br>
			<select id="ward" name="ward" required>
				<option value="">--Chọn--</option>
				<option value="Phường Phúc Xá">Phường Phúc Xá</option>
				<option value="Phường Trúc Bạch">Phường Trúc Bạch</option>
				<option value="Phường Vĩnh Phúc">Phường Vĩnh Phúc</option>
				<option value="Phường Cống Vị">Phường Cống Vị</option>
				<option value="Phường Liễu Giai">Phường Liễu Giai</option>
				<option value="P. Nguyễn Trung Trực">P. Nguyễn Trung Trực</option>
				<option value="Phường Ngọc Hà">Phường Ngọc Hà</option>
				<option value="Phường Đội Cấn">Phường Đội Cấn</option>
				<option value="Phường Kim Mã">Phường Kim Mã</option>
				<option value="Phường Giảng Võ">Phường Giảng Võ</option>
				<option value="Phường Thành Công">Phường Thành Công</option>
				<option value="Phường Điện Biên">Phường Điện Biên</option>
				<option value="Phường Quán Thánh">Phường Quán Thánh</option>
				<option value="Phường Ngọc Khánh">Phường Ngọc Khánh</option>
				<option value="Phường Nhật Tân">Phường Nhật Tân</option>
				<option value="Phường Tứ Liên">Phường Tứ Liên</option>
				<option value="Phường Quảng An">Phường Quảng An</option>
				<option value="Phường Xuân La">Phường Xuân La</option>
				<option value="Phường Bưởi">Phường Bưởi</option>
				<option value="Phường Thuỵ Khuê">Phường Thuỵ Khuê</option>
				<option value="Phường Phú Thượng">Phường Phú Thượng</option>
				<option value="Phường Yên Phụ">Phường Yên Phụ</option>
				<option value="Phường Phúc Tân">Phường Phúc Tân</option>
				<option value="Phường Hàng Mã">Phường Hàng Mã</option>
				<option value="Phường Hàng Buồm">Phường Hàng Buồm</option>
			</select><br><br>
			<input type="submit" name="submit" value="Submit">  
		</form>
		<?php
		if(isset($_POST["hoten"]) && isset($_POST["email"]) && isset($_POST["province"]) 
		&& isset($_POST["district"]) && isset($_POST["ward"])){
		$sql = "INSERT INTO persion (name, phone, email, province, district, ward)
		VALUES ('$hoten', '$phone', '$email', '$province', '$district', '$ward')";
		// use exec() because no results are returned
		$conn->exec($sql);
		echo "<br>" . "Thêm thông tin người dùng thành công";
	}
	?>
</body>
</html>