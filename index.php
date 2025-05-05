<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <script>
        function hitung(operasi) {
            var angka1 = parseFloat(document.getElementById('angka1').value);
            var angka2 = parseFloat(document.getElementById('angka2').value);
            var hasil = 0;

            if (isNaN(angka1) || isNaN(angka2)) {
                hasil = "Masukkan angka yang valid!";
            } else {
                switch (operasi) {
                    case 'tambah':
                        hasil = angka1 + angka2;
                        break;
                    case 'kurang':
                        hasil = angka1 - angka2;
                        break;
                    case 'kali':
                        hasil = angka1 * angka2;
                        break;
                    case 'bagi':
                        hasil = angka1 / angka2;
                        break;
                }
            }

            document.getElementById('hasil').innerText = "Hasil: " + hasil;
        }
    </script>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <input type="text" id="angka1" placeholder="Angka pertama">
    <input type="text" id="angka2" placeholder="Angka kedua">
    <button onclick="hitung('tambah')">Tambah</button>
    <button onclick="hitung('kurang')">Kurang</button>
    <button onclick="hitung('kali')">Kali</button>
    <button onclick="hitung('bagi')">Bagi</button>
    <p id="hasil">Hasil: 0</p>
</body>
</html>
