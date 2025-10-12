{{-- form.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata anpundung</title>
</head>
<body>
    <h2>Input Biodata anpundung</h2>
    <form action="/proses" method="post">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>Umur:</label>
        <input type="number" name="umur"><br><br>

        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br><br>

        <label>Agama:</label>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select><br><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
