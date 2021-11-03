<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="FBB917">
    <h1>Blood Donation Camp</h1>
    <h2>Registration Form</h2>
    <form action="connect.php" method="POST">
       <label>Name: </label><br>
       <input type='text' name='name' id='name' required /><br> <br>

       <label>Email: </label><br>
       <input type='email' name='email' id='email' required /><br> <br>

       <label>Phone: </label><br>
       <input type='text' name='phone' id='phone' required /><br> <br>

       <label>Blood Group: </label><br>
       <input type='text' name='bgroup' id='bgroup' required /><br> <br>

       <input type='submit' name='submit' id='submit' />
    </form>
</body>
</html>