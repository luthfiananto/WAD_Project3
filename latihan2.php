<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <!-- Menggunakan Bootstrap untuk tampilan yang lebih menarik -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Latihan 2</h1>

        <form method="post" action="latihan3.php">
            <div class="form-group">
                <label for="angka">Angka 1:</label>
                <input type="number" class="form-control" id="angka" name="InputAngka" required>
            </div>
<!--            <div class="form-group"> 
                <label for="angka">Angka 2:</label>
                <input type="number" class="form-control" id="angka" name="angka" required>
                </div> -->
            <div class="form-group">
                <label for="operasi">Operasi:</label>
                <select class="form-control" id="operasi" name="operasi">
                    <option value="tambah">Tambah</option>
                    <option value="kurang">Kurang</option>
                    <option value="kali">Kali</option>
                    <option value="bagi">Bagi</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
        </form>
    </div>
</body>
</html>
