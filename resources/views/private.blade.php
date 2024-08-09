<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Privata</title>
</head>
<body>
    <h1>Area Privata</h1>
    <p>Questa sezione è accessibile solo da te, {{ Auth::user()->name }}.</p>
    <p><a href="{{ route('home') }}">Torna alla Home</a></p>
</body>
</html>
