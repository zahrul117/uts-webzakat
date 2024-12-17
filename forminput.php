<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select dengan Disable Input</title>
</head>
<body>
    <h3>Contoh Form dengan Select dan Input Disable</h3>

    <!-- Elemen Select -->
    <label for="pilihan">Pilih Opsi:</label>
    <select id="pilihan" onchange="handleSelectChange()">
        <option value="">-- Pilih --</option>
        <option value="disable">Penghasilan</option>
        <option value="enable">Emas</option>
    </select>

    <br><br>

    <!-- Input yang akan dikendalikan -->
    <label>Nama:</label><br>
            <input type="text" name="nama" required><br><br>

            <label>Penghasilan Bulanan (Rp):</label><br>
            <input type="text" id="penghasilan" name="penghasilan" required><br><br>

            <label>Harga Emas Saat Ini (per gram, Rp):</label><br>
            <input type="text" id="harga_emas" name="harga_emas" required><br><br>

            <button type="submit">Hitung Zakat</button>

    <br><br>

    <label>Jumlah Emas (gram):</label><br>
            <input type="number" step="0.01" name="jumlah_emas" required><br><br>

            <label>Harga Buy Back Emas Saat Ini (Rp/gram):</label><br>
            <input type="number" step="0.01" name="harga_emas" required><br><br>

    <br><br>

    <!-- Script JavaScript -->
    <script>
        function handleSelectChange() {
            // Ambil nilai dari select
            const pilihan = document.getElementById("pilihan").value;

            // Ambil input-input yang ingin dikontrol
            const input1 = document.getElementById("penghasilan");
            const input2 = document.getElementById("harga_emas");

            // Cek nilai select dan aktifkan/nonaktifkan input
            if (pilihan === "penghasilan") {
                penghasilan.disabled = true;
                harga_emas.disabled = true;
            } else if (pilihan === "enable") {
                input1.disabled = false;
                input2.disabled = false;
            } else {
                // Jika opsi kosong, kembalikan ke kondisi default
                input1.disabled = false;
                input2.disabled = false;
            }
        }
    </script>
</body>
</html>
