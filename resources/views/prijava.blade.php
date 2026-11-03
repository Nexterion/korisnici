<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prijava korisnika</h1>

    @if($errors->any())
    <p>{{$errors->first()}}</p>
    @endif

    <form action="/prijava" method="POST">
        @csrf
        
        <label>Email</label>
        <input type="email" name="email" value="{{old('email')}}" required>
        <br>
        <label>Lozinka</label>
        <input type="password" name="password" required>
        <br>
        
        <button type="submit">Prijavite se</button>
        

    </form>
    <p>Nemate račun?<a href="/registracija">Registrirajte se</a></p>
</body>
</html>