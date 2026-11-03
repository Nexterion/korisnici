<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Moje bilješke</h1>
    <p>Prijavljen korisnik: {{auth()->user()->name}}</p>
    <h3>Dodavanje bilješke</h3>
    <form action="/biljeske"method="POST">
        @csrf
        <label>Naziv:</label>
        <input type="text" name="naslov" required>
        <br>
        <label>Sadržaj:</label>
        <textarea name="sadrzaj" required></textarea>
        <button type="submit">Dodaj bilješku</button>
    </form>
</body>
</html>