<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registracija korisnika</h1>

    <form action="/registracija" method="POST">
        @csrf
        <label>Ime i prezime</label>
        <input type="text" name="name" value="{{old('name')}}" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" value="{{old('email')}}" required>
        <br>
        <label>Lozinka</label>
        <input type="password" name="password" required>
        <br>
        <label>Ponovljena lozinka</label>
        <input type="password" name="password_Confirmation" required>
        <br>
        <button type="submit">Registrirajte se</button>
        

    </form>
    <p>Imate račun?<a href="/prijava">Prijavite se</a></p>
</body>
</html>