<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Sign Up</title>
    
</head>
<body>
<?php



session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
     
        'dob'=>$_POST['dob']
    );


    print_r($_SESSION["personal"]);
    header("location: create-account.php");




}

?>


<script>
function validateForm() {
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var address = document.getElementById('address').value;
    var dob = document.getElementById('dob').value;

    if (!/^[a-zA-Z]+$/.test(fname)) {
        alert("First name should contain only alphabetic characters.");
        return false;
    }

    // Check if last name contains only alphabetic characters
    if (!/^[a-zA-Z]+$/.test(lname)) {
        alert("Last name should contain only alphabetic characters.");
        return false;
    }

    // Check if address is empty
    if (!/^[a-zA-Z]+$/.test(address)) {
        alert("address should contain only alphabetic characters.");
        return false;
    }

    // Check if date of birth is empty
    if (dob.trim() == "") {
        alert("Please enter your date of birth.");
        return false;
    }

    return true;
}
</script>

<center>
<div class="container">
    <table border="0">
        <tr>
            <td colspan="2">
                <p class="header-text">Let's Get Started</p>
                <p class="sub-text">Add Your Personal Details to Continue</p>
            </td>
        </tr>
        <tr>
            <form action="" method="POST" onsubmit="return validateForm()">
            <td class="label-td" colspan="2">
                <label for="name" class="form-label">Name: </label>
            </td>
        </tr>
        <tr>
            <td class="label-td">
                <input type="text" name="fname" id="fname" class="input-text" placeholder="First Name" required>
            </td>
            <td class="label-td">
                <input type="text" name="lname" id="lname" class="input-text" placeholder="Last Name" required>
            </td>
        </tr>
        <tr>
            <td class="label-td" colspan="2">
                <label for="address" class="form-label">Address (city): </label>
            </td>
        </tr>
        <tr>
            <td class="label-td" colspan="2">
                <input type="text" name="address" id="address" class="input-text" placeholder="city" required>
            </td>
        </tr>
       
        <tr>
            <td class="label-td" colspan="2">
                <label for="dob" class="form-label">Date of Birth: </label>
            </td>
        </tr>
        <tr>
            <td class="label-td" colspan="2">
                <input type="date" name="dob" id="dob" class="input-text" required>
            </td>
        </tr>
        <tr>
            <td class="label-td" colspan="2">
            </td>
        </tr>

        <tr>
            <td>
                <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
            </td>
            <td>
                <input type="submit" value="Next" class="login-btn btn-primary btn">
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <br>
                <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                <a href="login.php" class="hover-link1 non-style-link">Login</a>
                <br><br><br>
            </td>
        </tr>

                </form>
        </tr>
    </table>

</div>
</center>
</body>
</html>