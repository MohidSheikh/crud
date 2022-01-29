<?php
require("connection.php");
    if(isset($_POST['SubmitBtn'])){
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $email = trim($_POST['email']);
        $age = trim($_POST['age']);
        $gender = trim($_POST['gender']);
        $phone = trim($_POST['num']);
        $city = trim($_POST['city']);
        $salary = trim($_POST['salary']);
        $des = trim($_POST['des']);
        

        $query = "insert into emp (FirstName,LastName,Email,Age,Gender,Phone,City,Salary,Designation) values ('$fname','$lname','$email','$age','$gender','$phone','$city','$salary','$des')";

        $result = mysqli_query($con, $query);

        if($result) {
            echo "inserted!!!";
        }
        else {
            echo "not inserted!!!";
        }
        
    }
?>