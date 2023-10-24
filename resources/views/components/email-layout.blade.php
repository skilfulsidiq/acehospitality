<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            background-color: #8e4f27;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #8e4f27;
            color: #ffffff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $header }}</h1>
        </div>
        <div class="content">
            {{ $body }}
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }} All rights reserved.</p>
        </div>
    </div>
</body>
</html>
