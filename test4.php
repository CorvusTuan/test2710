<html>
<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$providers = $dbh->query('SELECT title, id from nv4_vi_location_province');

$valueProvider = $_POST['provider'];
$districts = $dbh->query('SELECT title, id from nv4_vi_location_district WHERE nv4_vi_location_district.idprovince ='. $valueProvider.';');

$valueDistrict = $_POST['district'];
$wards = $dbh->query('SELECT title, id from nv4_vi_location_ward WHERE nv4_vi_location_ward.iddistrict ='. $valueDistrict.';');

$nameErr = $emailErr = $phoneErr = $providerErr = $districtErr = $wardErr = "";
$name = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Email is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if(preg_replace('/[^0-9]/', '', $phone) && strlen($phone) != 10){
            $phoneErr = "Invalid phone number format";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["provider"])) {
        $providerErr = "Provider is required";
    }

    if (empty($_POST["district"])) {
        $districtErr = "District is required";
    }

    if (empty($_POST["ward"])) {
        $wardErr = "Ward is required";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Phone Number: <input type="text" name="phone">
    <span class="error">* <?php echo $phoneErr ; ?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Location:

    <label>
        <select name="provider" id="provider">
            <?php
            foreach ($providers as $provider){
                ?>
                <option value="<?= $provider[1] ?>"><?= $provider[0] ?></option>
                <?php
            }
            ?>
        </select>
        <span class="error">* <?php echo $providerErr; ?></span>
        <input type="BUTTON" name="submit" value="Select">
    </label>
    <label>
        <select name="district">
            <?php
            foreach ($districts as $district){
                ?>
                <option value="<?= $district[1] ?>"><?= $district[0] ?></option>
                <?php
            }
            ?>
        </select>
        <span class="error">* <?php echo $districtErr; ?></span>
        <input type="submit" name="submit" value="Select">
    </label>
    <label>
        <select name="ward">
            <?php
            foreach ($wards as $ward){
                ?>
                <option value="<?= $ward[1] ?>"><?= $ward[0] ?></option>
                <?php
            }
            ?>
        </select>
        <span class="error">* <?php echo $wardErr; ?></span>
    </label>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</html>
