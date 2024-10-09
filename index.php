<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Kopi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigasi -->
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="#">Kedai Kopi Saya</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bagian Beranda -->
    <div class="wrapper">
        <section id="home">
            <img src="https://www.pngplay.com/wp-content/uploads/9/Coffee-PNG-HD-Quality.png" alt="Pengembangan Web">
            <div class="kolom">
                <h2>Selamat Datang di Kedai Kopi Kami!</h2>
                <p>Rasakan kopi terbaik di kota. Bersantai, nikmati, dan hargai momen bersama kami.</p>
                <a href="#" class="cta-button">Mulai Sekarang</a>
            </div>
        </section>

        <!-- Bagian Tentang -->
        <section id="about">
            <div class="kolom">
                <p class="deskripsi">Anda Akan Membutuhkan Ini</p>
                <h2>Tentang</h2>
                <p>Tempat di mana pengunjung dapat menikmati berbagai jenis kopi yang disajikan oleh barista. Kedai kopi biasanya menawarkan suasana yang santai dan nyaman, sering kali menjadi tempat pertemuan sosial, bekerja, atau bersantai. Selain kopi, kedai kopi juga dapat menawarkan makanan ringan atau camilan untuk menemani minuman.</p>
                <p>Kedai kopi bisa bervariasi dari tempat yang kecil dan intim hingga ruang yang lebih besar dengan suasana yang lebih komunal. Mereka sering menjadi bagian dari budaya minum kopi yang berkembang di banyak kota besar di seluruh dunia.</p>
            </div>
            <img src="https://i.pinimg.com/474x/c2/2d/30/c22d30d8864c0cea77cb17e05fe8b652.jpg" alt="Pembelajaran Online">
        </section>

        <section class="services">
            <section id="services">
                <h2>Layanan Kami</h2>
                <div class="services-container">
                    <div class="services-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwpkjgu1gCW0C52ahuXeB3fIB0A6fvwVX8BA&s" alt="Biji Kopi Segar">
                        <h3>Biji Kopi Segar</h3>
                        <p>Biji kopi segar merujuk pada biji kopi yang baru dipanggang dan digunakan dalam waktu yang relatif singkat untuk menjaga kualitas rasa dan aroma alaminya. Biji kopi segar sangat penting bagi pecinta kopi karena kualitas rasa yang dihasilkan sangat dipengaruhi oleh seberapa lama biji kopi tersebut disimpan setelah dipanggang.</p>
                    </div>
                    <div class="services-item">
                        <img src="https://decode.uai.ac.id/wp-content/uploads/2017/12/EDITED24-150x150.jpg" alt="Suasana Nyaman">
                        <h3>Suasana</h3>
                        <p>Banyak kedai kopi modern mengadopsi gaya minimalis, dengan sedikit dekorasi namun tetap elegan. Rak buku kecil, tanaman hias, dan seni dinding (seperti lukisan atau poster retro) sering digunakan untuk mempercantik ruangan tanpa membuatnya terlihat penuh.</p>
                    </div>
                    <div class="services-item">
                        <img src="https://pearllemoncafe.com/wp-content/uploads/2024/08/background-brown-coffee-white-black_1303-1938-150x150.jpg" alt="Barista Ahli">
                        <h3>Barista Ahli</h3>
                        <p>Para profesional yang sangat terampil dalam menyeduh dan menyajikan kopi, khususnya minuman berbasis espresso. Mereka tidak hanya menguasai teknik pembuatan kopi, tetapi juga memiliki pemahaman mendalam tentang berbagai aspek kopi, mulai dari asal biji, proses pemanggangan, hingga penyajian yang sempurna.</p>
                    </div>
                </div>
            </section>
        </section>

        <!-- Bagian Kontak -->
        <section id="contact" class="contact">
            <h1>Hubungi Kami</h1>
            <p>"Jika Anda memiliki pertanyaan, umpan balik, atau ingin mengadakan acara bersama kami, jangan ragu untuk menghubungi kami!"</p>
            
            <div class="contact-container">
                <form action="index.php" method="post" class="contact-form">
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" id="name" name="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan:</label>
                        <textarea id="message" name="message" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-button">Kirim Pesan</button>
                </form>
                
                <div class="contact-info">
                    <h3>Visit Us</h3>
                    <p>123 Coffee Street, Coffeeville</p>
                    <p>Email: contact@mycoffeebar.com</p>
                    <p>Telepon: 085-458-7090</p>
                </div>
            </div>
        </section>

        <div id="copyright">
            <div class="wrapper">
                &copy; 2024. <b>Kedai Kopi</b>. Semua Hak Dilindungi.
            </div>
        </div>

    </div>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "coffee_bar"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Memproses pengiriman formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $message = $conn->real_escape_string($_POST['message']);

        // Menyisipkan data ke dalam basis data
        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Pesan berhasil dikirim!');</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }
    }

    $conn->close();
    ?>
</body>
</html>
