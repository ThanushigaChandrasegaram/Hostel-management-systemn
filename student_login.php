<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student Login</title>
    
    <style>
      
      html, body {
    height: 100%;
    margin: 0;
}
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #4b0082, #87CEEB);
            text-align: center;
            margin: 0;
            padding: 50;
        }

        form {
            max-width: 400px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: darkblue;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: blue;
        }

        .register-link {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: blue;
            
        }
        .back-to-home {
            position: fixed;
            bottom: 10px;
            right: 10px;
            background-color: #bd72d5;
            color: rgb(54, 14, 52);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .back-to-home:hover {
            background-color: #bea5d0;
        }
        
    </style>
</head>

<body>
<header style="background-color: #d7bce1; color: rgb(90, 0, 126); text-align: left; padding: 10px; display: flex; justify-content: space-between; align-items: center; font-size: 25px; font-weight: bold; padding-right: 10px; width: 100%; margin: 0;">
        <img src="HMS.png" alt="University of Vavuniya Logo" style="height: 80px;">
        <div style="display: inline-block;">
            <div style="color: #4b0082;">Hostel Management System <br> University of Vavuniya</div>
        </div>
    </header>
    
    <br><br><form action="login_process.php" method="post">
        <h2>Student Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <a href="registration.php" class="register-link">Don't have an account? Click here to register.</a>
    </form>
    <a href="index.php" class="back-to-home">Go back</a>
</body>

</html>
