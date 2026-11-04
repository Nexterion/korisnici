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

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $greska)
                <li>{{$greska}}</li>
                @endforeach
            </ul>
        @endif

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

    <hr>
    <h3>Moje bilješke</h3>
    @forelse ($biljeske as $biljeska)
    <h3>{{$biljeska->naslov}}</h3>
    <p>{{$biljeska->sadrzaj}}</p>

    <h4>Uredi bilješku</h4>
        <form action="/biljeske/{{$biljeska->id}}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="naslov" value="{{$biljeska->naslov}}" required>
            <br>
            <textarea name="sadrzaj" required>{{$biljeska->sadrzaj}}</textarea>
            <br>
            <button type="submit">Spremi izmjene</button>

            <form action="/biljeske/{{$biljeska->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Obriši</button>
            </form>
            <hr>
            @empty
            <p>Još nemate bilješki.</p>
            @endforelse

            <a href="/profil">Povratak na profil</a>
        </form>



</body>
</html>