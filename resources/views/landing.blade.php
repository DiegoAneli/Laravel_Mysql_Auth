<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f9f9f9;
            color: #333;
        }
        .navbar {
            background-color: #800000; /* Rosso Modena */
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 40px auto;
            max-width: 400px;
            border-radius: 8px;
        }
        .main-content img {
            max-width: 100px;
            margin-bottom: 20px;
        }
        .main-content h1 {
            font-size: 1.5em;
            color: #800000; /* Rosso Modena */
            text-align: center;
            margin-bottom: 20px;
        }
        .main-content p {
            text-align: center;
            margin-bottom: 15px;
        }
        .main-content a {
            color: #800000; /* Rosso Modena */
            text-decoration: none;
            font-weight: bold;
        }
        footer {
            background-color: #800000; /* Rosso Modena */
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Corte del Bergamino</div>
        <div>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Registrati</a>
        </div>
    </div>

    <div class="main-content">
        <img src="logo-condominio.png" alt="Logo Condominio">
        <h1>Benvenuto nella gestione della Corte del Bergamino</h1>
        <p><a href="{{ route('login') }}">Effettua il Login</a> per accedere al tuo account.</p>
        <p>Se non hai un account, <a href="{{ route('register') }}">registrati qui</a>.</p>
    </div>

    <footer>
        <p>&copy; 2024 Corte del Bergamino. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
