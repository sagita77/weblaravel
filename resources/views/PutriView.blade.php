<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Daftar Mhs</h1>
    @foreach ($putri as $p)
<h2>{{ $p->Nama }}</h2>
<p>{{ $p->Hobi }}</p>    
    @endforeach
</body>
</html>