<?php
//getting user input from the form

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['fname'];

    $lastname = $_POST['lname'];

    $username = $_POST['uname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $confpassword = $_POST['confpass'];


    //database connection 

    $conn = mysqli_connect("localhost" , "root" , "" , "user_registration");

    if(!$conn)
    {
        die("connection failed:".mysqli_connect_error());
    }
    else if ($password != $confpassword){
        echo "<script type='text/javascript'>alert('the two passwords do not match!!'); window.location = 'signup.php';</script>";
    }


    // check if username already exists

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $query);

    if(mysqli_num_rows($result) > 0 ) {
        echo "<script type='text/javascript'>alert('Username exists!'); window.location = 'signup.php';</script>";

    }
    else
    {
        // inserting new user into the db
        
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO  users (firstname , lastname , username , email , password) VALUES ('$firstname', '$lastname' , '$username' , '$email' , '$password')";

        if(mysqli_query($conn , $query)){
            echo "<script type='text/javascript'>alert('signUp successfully kindly login pls'); window.location = 'sign_up_form.php';</script>";
        } else {
            echo "Error:".$query . "<br" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);


}


?>