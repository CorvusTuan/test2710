
<!--




\\\\\
<?php 
    $mysqli = NEW MYSQLI('localhost','root','','test') or die('kết nối thất bại');
    $resultSET = $mysqli->query("SELECT alias FROM nv4_vi_location_province")
?>

<select name="nv4_vi_location_province" id="">

    <?php
    while($row = $resultSET -> fetch_assoc()){
        $alia = $row['alias'];
        
        echo "<option value='$alias' size=100px>$alias</option>";
    }
    while($row = mysqli_fetch_assoc($result)){
        echo "test:" .$row["alias"]."<br>";
    }
    ?>
    echo "<option value=\"".$row["alias"]."\"";
</select>
-->
<?php 
	$conn = new mysqli('localhost','root','','test') or die('kết nối thất bại');
	$sql = "SELECT alias FROM nv4_vi_location_province";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<option value=\"".$row["alias"]."\">".$row["alias"];
		}
	}else{
		echo "lỗi";
	}
	?>
