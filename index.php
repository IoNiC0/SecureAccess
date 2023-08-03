<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    h1
    {
      text-align: center;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 90%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .otp-section {
      display: none;
    }

    .error-message {
      color: red;
      margin-top: 5px;
    }
  </style>
</head>

<body>
  <h1>Registration Form</h1>
  <div class="container">
  <div class="form-group">
				<a href="login.php">Already Have an Account?</a>
		</div>
    <form id="registration-form" onsubmit="return validateForm()" method="post" action="register.php" autocomplete="off">
      <div class="form-group">
        <label for="first-name">First Name:<sup style="color:red">*</sup></label>
        <input type="text" id="first-name" name="first_name" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="middle-name">Middle Name:</label>
        <input type="text" id="middle-name" name="middle_name" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:<sup style="color:red">*</sup></label>
        <input type="text" id="last-name" name="last_name" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="email">Email:<sup style="color:red">*</sup></label>
        <input type="email" id="email" name="email" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="phone-number">Phone Number:<sup style="color:red">*</sup></label>
        <input type="tel" id="phone-number" name="phone_number" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="password">Password:<sup style="color:red">*</sup></label>
        <input type="password" id="password" name="password" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:<sup style="color:red">*</sup></label>
        <input type="password" id="confirm-password" name="confirm-password" required autocomplete="off">
        <p class="error-message" id="password-error"></p>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>

  </div>

  <script>
    function validateForm() {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
      const passwordError = document.getElementById('password-error');

      if (password !== confirmPassword) {
        passwordError.textContent = 'Passwords do not match.';
        return false;
      }
    }
  </script>
</body>

</html>