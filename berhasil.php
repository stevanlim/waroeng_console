<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesanan Berhasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ffe9;
            padding: 50px;
        }
        .container {
            background: #fff;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            border-radius: 10px;
            border: 2px solid #4CAF50;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #4CAF50;
            text-align: center;
        }
        .info {
            margin-top: 20px;
            line-height: 1.6;
        }
        .btn-center {
            text-align: center;
            margin-top: 30px;
        }
        .cart-btn {
            background-color: #e53935;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .cart-btn:hover {
            background-color: #c62828;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>✅ Pesanan Anda Berhasil!</h2>

        <div class="info">
            <?php
                echo "<strong>Produk:</strong> " . htmlspecialchars($_POST['produk']) . "<br>";
                echo "<strong>Harga:</strong> Rp " . htmlspecialchars($_POST['harga']) . "<br><br>";

                echo "<strong>Nama:</strong> " . htmlspecialchars($_POST['nama']) . "<br>";
                echo "<strong>Alamat:</strong> " . nl2br(htmlspecialchars($_POST['alamat'])) . "<br>";
                echo "<strong>Telepon:</strong> " . htmlspecialchars($_POST['telepon']) . "<br>";
                echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
                echo "<strong>Pembayaran melalui:</strong> " . htmlspecialchars($_POST['bank']) . "<br>";
            ?>
            <h2>Nanti kamu akan diberikan resi pengiriman barang melalui email toko kami :)</h2>
            
            <div class="btn-center">
                <a href="index.php" class="cart-btn">Kembali Ke Halaman Utama</a>
            </div>
        </div>
    </div>
</body>
</html>
