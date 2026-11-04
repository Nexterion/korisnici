<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Moj profil</h1>
    <p>Dobrodošli, {{auth()->user()->name}}</p>
    <br>
    <p>Vaš email je{{auth()->user()->email}}</p>

    <h2>Izbornik</h2>
    <a href="/biljeske">Moje bilješke</a>

    <form action="/odjava" method="POST">
    @csrf
    <button type="submit">Odjavite se></button>
    </form>
</body>
</html>