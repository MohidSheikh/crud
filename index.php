<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>


<form action="insert.php" method="post">
        <label>First name</label>
        <input type="text" name="fname" id="" class="form-control form-control-sm">

        <label>Last name</label>
        <input type="text" name="lname" id="" class="form-control form-control-sm">

        <label>Email</label>
        <input type="email" name="email" id="" class="form-control form-control-sm">

        <label>Age</label>
        <input type="number" name="age" id="" class="form-control form-control-sm">
            <input type="radio" name="gender" id="" value="Male">Male
            <input type="radio" name="gender" id="" value="Female">Female

        <label>Phone</label>
        <input type="number" name="num" id="" class="form-control form-control-sm">


        <label>City</label>
        <select name="city" class="form-control form-control-sm">
            <option value="Karachi">Karachi</option>
            <option value="Peshawar">Peshawar</option>
            <option value="Islamabad">Islamabad</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Multan">Multan</option>
        </select>
        
        <label>Salary</label>
        <input type="number" name="salary" id="" class="form-control form-control-sm">

        <label>Designation</label>
        <input type="text" name="des" id="" class="form-control form-control-sm">

        <input type="submit" value="Submit" name="SubmitBtn" class="form-control btn btn-primary">
    </form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>