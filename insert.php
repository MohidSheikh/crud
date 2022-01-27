<?php
require('connection.php');
if(isset($_POST['SubmitBtn'])) {

    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $Age = $_POST['age'];
    $Gender = $_POST['gender'];
    $Phone = $_POST['num'];
    $City = $_POST['city'];
    $Salary = $_POST['salary'];
    $Designation = $_POST['des'];
    
    $query = "insert into emp (FirstName,LastName,Email,Age,Gender,Phone,City,Salary,Designation)
    values('$FirstName','$LastName','$Email','$Age','$Gender','$Phone','$City','$Salary','$Designation')";

    $run = mysqli_query($con,$query);

    if($run) {
        echo 'Data inserted';
    }
    else {
        echo 'Data not inserted';
    }
}

?>