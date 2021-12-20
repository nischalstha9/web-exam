<?php
    $conn = new mysqli ("localhost", "root", "", "exam");

    if (isset($_POST['postBtn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
        $gender = $_POST['gender'];

        mysqli_query ($conn, 
        "INSERT INTO user (username, password, firstname, lastname, address, telephone, gender) VALUES
        $username, 
        $password,
        $firstname,
        $lastname,
        $address,
        $telephone,
        $gender"
        );
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Please fill up the following details</h1>
    <form action="./registration.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="firstname">firstname</label></td>
                <td><input type="text" id="firstname" name="firstname"></td>
            </tr>
            <tr>
                <td><label for="lastname">lastname</label></td>
                <td><input type="text" id="lastname" name="lastname"></td>
            </tr>
            <tr>
                <td><label for="address">address</label></td>
                <td><input type="text" id="address" name="address"></td>
            </tr>
            <tr>
                <td><label for="telephone">telephone</label></td>
                <td><input type="text" id="telephone" name="telephone"></td>
            </tr>
            <tr>
                <td><label for="gender">gender</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male">Male
                    <input type="radio" id="female" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="postBtn"></td>
            </tr>
            
        </table>
    </form>
    
</body>
</html>