<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1,
        h3 {
            text-align: center;
            margin-bottom: 30px;
        }

        .admin {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            display: block;
            /*margin: 0 auto;*/
            margin: 10px 10px 50px 50px;
        }

        a:hover {
            background-color: #45a049;
        }

        a {
            transition: background-color 0.3s ease;
        }
    </style>
</head>

<body>
    <?php include 'auth.php'; ?>
    <h1>Admin Panel</h1>
    <h3>Welcome
        <?php echo $email; ?>
    </h3>
    <div class="admin">
        <div class="form-group">
            <a href='./logout.php' id="a4">
                <button class="button">
                    LogOut
                </button>
            </a>
        </div>
    </div>
</body>

</html>