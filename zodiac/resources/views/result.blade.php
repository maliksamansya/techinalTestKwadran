<!-- result.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .result-container {
            text-align: center;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result-container p {
            margin: 10px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Result</h1>
        <p>Hallo {{ $nama }},</p>
        <p>Usia anda saat ini adalah: {{ $usia['tahun'] }} Tahun, {{ $usia['bulan'] }} Bulan, {{ $usia['hari'] }} Hari</p>
        <p>Bintang anda adalah: {{ $zodiac_name }}</p>
    </div>
</body>
</html>
