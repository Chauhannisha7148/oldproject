<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 600px;
            padding: 20px;
            margin: 50px auto;
            background-color:whitesmoke ;
            border-radius: 1rem;
        }
        h3{
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group{
            margin-bottom: 20px;
        }
        .form-group label{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input{
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Registration Form</h3>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="father">Fathername</label>
                <input type="text" id="father" name="father">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <input type="submit"  value="Submit">
            </div>
        </form>
    </div>
    
</body>
</html>