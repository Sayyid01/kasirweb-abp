<!DOCTYPE html>
<html>

<head>
    <title>Register Account</title>
    <style>
        body {
            background-color: #323164;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        .registerForm {
            margin-top: 15vh;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 1000px;
            margin: 10px auto;
            background-color: #D9D9D9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: px 0px 20px 0px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type=text],
        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type=submit] {
            background-color: #323164;
            color: #fff;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }

        button[type=submit]:hover {
            background-color: #fff;
            color: #323164;
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #000000;
        }

        .login-link a:hover {
            color: #323164;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="registerForm">
        <h1>Register Your Account!</h1>
        <form>
            <label for="name"><b>Nama</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="userid"><b>User ID</b></label>
            <input type="text" placeholder="Enter User ID" name="userid" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Register</button>
            <p class="login-link">Already have an account? <a href="{{ Route('customerLogin') }}">Log in</a></p>
        </form>
    </div>
</body>

</html>
