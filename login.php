<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1,p {
            text-align: center;
            margin-bottom: 30px;
        }

        .registration-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"]{
            width: 85%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .registration-form {
            border: 1px solid #ccc;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            border-color: #4CAF50;
        }
        #mybutton
        {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
            transition: background-color 0.3s ease;
        }
        #mybutton:hover{
            background-color: #3e8e41;
        }
        .password-input-wrapper {
            position: relative;
        }

        .show-password-btn {
            position: absolute;
            right: 10px;
            top: 60%;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            cursor: pointer;
            outline: none;
            font-size: 16px;
            color: #555;
        }
        .show-password-btn i {
            color: #555;
        }
    </style>
</head>
<body>
<h1>Login</h1>
    <div class="registration-form">
    <div class="form-group">
				<a href="index.php">Register Here</a>
		</div>
        <form method="post" action="login_data.php" autocomplete="off">
            <div class="form-group">
                <label for="name">Email:<sup style="color:red">*</sup></label>
                <input type="text" id="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group password-input-wrapper">
                <label for="password">Password:<sup style="color:red">*</sup></label>
                <div style="position: relative; display: flex;">
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" required oninput="toggleShowPasswordButton()">
                    <button type="button" class="show-password-btn" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" id="mybutton">Login</button>
            </div>
        </form>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const showPasswordBtn = document.querySelector('.show-password-btn');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }

        function toggleShowPasswordButton() {
            const passwordInput = document.getElementById('password');
            const showPasswordBtn = document.querySelector('.show-password-btn');

            if (passwordInput.value.length > 0) {
                showPasswordBtn.classList.add('active');
            } else {
                showPasswordBtn.classList.remove('active');
            }
        }
    </script>
</body>
</html>