<!DOCTYPE html>
<html>
<head>
    <title>Payment System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 400px;
            text-align: center;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            border: none;
            background-color: #008CBA;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #005f73;
        }
        .team {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Paystack Payment System Project</h2>
        <form action="pay.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required><br>
            <input type="number" name="amount" placeholder="Amount (NGN)" required><br>
            <button type="submit">Pay Now</button>
        </form>

        <div class="team">
            <strong>Group Members:</strong><br>
            Victor<br>
            Kelvin I<br>
            Nafisat<br>
            DEDE <br>
            Dada
        </div>
    </div>
</body>
</html>
