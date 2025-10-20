<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Input data</h2>
    <form action="/proses" method="post">
        @csrf
        <label>
            Nama : <input type="text" name="nama"/><br><br>
        </label>
         <label>
            Umur : <input type="text" name="umur"/><br><br>
        </label>
         <label>
            Alamat : <textarea name="alamat"></textarea><br><br>
        </label>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>