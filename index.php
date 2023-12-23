<!DOCTYPE html>
<html lang="en">
  <head>
  
<style>
  :root {
  --primary: #804000;
  --bg: black;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: "Poppins", sans-serif;
  background-color: var(--bg);
  color: aliceblue;
}

/*navbar*/
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.4rem 7%;
  background-color: rgba(0, 0, 0, 0.8);
  border-bottom: 1px solid #513c28;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}

.navbar .navbar-logo {
  font-size: 2rem;
  font-weight: 700;
  color: #cca300;
}

.navbar .navbar-logo span {
  color: #804000;
}

.navbar .navbar-nav a {
  color: #cca300;
  display: inline-block;
  font-size: 1.3rem;
  margin: 0 1rem;
}

.navbar .navbar-nav a:hover {
  color: var(--primary);
}

.navbar .navbar-nav a::after {
  content: "";
  display: block;
  padding-bottom: 0.5rem;
  border-bottom: 0.1rem solid var(--primary);
  transform: scaleX(0);
  transition: 0.2s linear;
}

.navbar .navbar-nav a:hover::after {
  transform: scaleX(0.5);
}

.navbar .navbar-extra a {
  color: #cca300;
  margin: 0 0.5rem;
}

.navbar .navbar-extra a:hover {
  color: var(--primary);
}

#hamburger-input {
  display: none;
}



/*Hero section */
.hero {
  min-height: 100vh;
  display:flex ;
  align-items: center;
  background-image: url("gambar/backTI.jpg");
  background-position: right center;
  background-size: 80%;
  position: relative;
}
/* CSS */

.hero::after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 30%;
  bottom: 0;
  background: linear-gradient(
    0deg,
    rgba(1, 1, 3, 1) 8%,
    rgba(255, 255, 255, 0) 50%
  );
}

.hero .content {
  padding: 1.4rem 7%;
  max-width: 60rem;
}

.hero .content h1 {
  font-size: 3.5em;
  color: #cca300;
  text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
  line-height: 1.2;
}

.hero .content h1 span {
  color: var(--primary);
}

.hero .content p {
  color: #cca300;
  font-size: 1.6rem;
  margin-top: 1rem;
  line-height: 1.4;
  font-weight: 100; 
}

.hero .content .cta {
  margin-top: 1rem;
  display: inline-block;
  padding: 1rem 3rem;
  font-size: 1.4rem;
  color: #cca300;
  background-color: var(--primary);
  border-radius: 0.5rem;
  box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
}

/*about section */

.about,
.input, 
.contact {
  padding: 8.5rem 7% 1.4rem;
}

.about h2,
.input h2,
.contact h2 {
  text-align: center;
  font-size: 2.6rem;
  margin-bottom: 3rem;
}

.about h2 span,
.input h2 span,
.contact h2 span {
  color: var(--primary);
}

.about .row {
  display: flex;
}

.about .row .about-fimg {
  flex: 1 1 45rem;
}

.about .row .about-img img {
  width: 100%;
}

.about .row .content {
  flex: 1 1 35rem;
  padding: 0 1rem;
}

.about .row .content h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

.about .row .content p {
  margin-bottom: 0.8rem;
  font-size: 1.3rem;
  font-weight: 100;
  line-height: 1.6;
}

/*input section*/
.table{
    position: inherit;
}
.input h2,
.contact h2 {
  margin-bottom: 1rem;
}
.input p,
.contact p {
  text-align: center;
  max-width: 30rem;
  margin: auto;
  font-weight: 150;
  line-height: 2;
}



.contact .row form {
  flex: 1 1 45rem;
  padding: 5rem 2rem;
  text-align: center;
  size: 25cm;
}

.contact .row form .input-group {
  display: flex;
  align-items: center;
  margin-top: 2rem;
  background-color: var(--bg);
  border: 1px solid #eee;
}

.contact .row form .input-group input {
  width: 100%;
  padding: 2rem;
  font-size: 1.7rem;
  background: none;
  color: antiquewhite;
}

.contact .row form .btn {
  margin-top: 3rem;
  display: inline-block;
  padding: 2rem 3rem;
  font-size: 1.7rem;
  color: #eee;
  background-color: #513c28;
  cursor: pointer;
}

/*Footer*/
footer {
  width: 100%;
  background-color: var(--primary);
  color: var(--primary);
  text-align: center;
  padding: 1rem 0;
  margin-top: 3rem;
  padding-bottom: 3rem;
}

footer .socials {
  padding: 1rem 0;
}

footer .socials a {
  color: #cca300;
  margin: 1rem;
}

footer .socials a:hover,
footer .links a:hover {
  color: var(--bg) ;
}

footer .links {
  margin-bottom: 1.4rem;
}
footer .links a {
  color: #cca300;
  padding: 0.7rem 1rem;
}

footer .credit {
  font-size: 0.8rem;
}

footer .credit a {
  color: var(--bg);
  font-weight: 700;
}
/*media queries*/


/*laptop*/
@media (max-width: 1366px) {
  html {
    font-size: 75%;
  }
}
/*tablet*/
@media (max-width: 768px) {
  html {
    font-size: 60%;
  }

  #hamburger-input {
    display: inline-block;
  }
  .navbar .navbar-nav {
    position: absolute;
    top: 100%;
    right: -100%;
    background-color: #cca300;
    width: 30rem;
    height: 100vh;
    transition: 0.3s;
  }

  .navbar .navbar-nav.active {
    right: 0;
  }

  .navbar .navbar-nav a {
    color: var(--bg);
    display: block;
    margin: 1.5rem;
    padding: 0.5rem;
    font-size: 2rem;
  }

  .navbar .navbar-nav a::after {
    transform-origin: 0 0;
  }

  .navbar .navbar-nav a:hover::after {
    transform: scaleX(0.2);
  }

  .navbar .search-form {
    width: 90%;
    right: 2rem;
  }

  .about .row {
    flex-wrap: wrap;
  }

  .about .row .about-img img {
    height: 24rem;
    object-fit: cover;
    object-position: center;
  }

  .about .row .content {
    padding: 0;
  }

  .about .row .content h3 {
    margin-top: 1rem;
    font-size: 1.6rem;
  }
  .contact .row {
    flex-wrap: wrap;
  }
}

/*handphone*/
@media (max-width: 450px) {
  html {
    font-size: 52%;
  }
}

table 
{
           max-width: 800px;
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }
    
        tr:hover {
            background-color: #f5f5f5;
        }
        form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 500px;
        margin: 20px auto;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
        color: black;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        margin-bottom: 10px;
        background-color: #fff;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
        
</style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Mahasiswa TI</title>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!--heather icons-->
    <script src="https://unpkg.com/feather-icons"></script>

  </head>
  <body>
    <!--navbar start-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Data<span> Mahasiswa</span> TI</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Data Mahasiswa</a>
        <a href="#input">Input Data Mahasiswa</a>
        
    </nav>
  
    <section class="hero" id="home">
  <main class="content">
    <h1>Data Mahasiswa<span> Teknologi Informasi 2023!</span></h1>
   
  </main>
</section>

    <!--Hero section end-->

    <!--About Section Start-->
    <section id="about" class="about">
      <h2><span>DATA</span> MAHASISWA</h2>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $data_per_halaman = 10;

        
        $halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
        
       
        $batas_awal = ($halaman - 1) * $data_per_halaman;
        $no=1;
        $ambildata = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa_TI");
        while($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[nama_mahasiswa]</td>
                <td>$tampil[NIM]</td>
                <td>$tampil[Kelas]</td>
                <td class='action-btns'>
                <td><a href='?aksi=hapus&kode=$tampil[NIM]'> Hapus </a></td>
                <td><a href='index.php?aksi=ubah&kode=$tampil[NIM]'> Ubah </a>
                
            <tr>";
            $no++;
        }
        ?>
    </table>
    <?php
include "koneksi.php";

if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] == "hapus" && isset($_GET['kode'])) {
      
        $kode = mysqli_real_escape_string($koneksi, $_GET['kode']);
        $query_delete = "DELETE FROM data_mahasiswa_TI WHERE NIM=?";
        
        $stmt = mysqli_prepare($koneksi, $query_delete);
        mysqli_stmt_bind_param($stmt, "s", $kode);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil dihapus";
            echo "<meta http-equiv=refresh content=2;URL='index.php'>";
        } else {
          
            echo "Error deleting record: " . mysqli_error($koneksi);
        }

        
        mysqli_stmt_close($stmt);
    } elseif ($_GET['aksi'] == "ubah" && isset($_GET['kode'])) {
        $data = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa_TI WHERE NIM='$_GET[kode]'");
        $tampil = mysqli_fetch_array($data);

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Ubah Data</title>
        </head>
        <body>
            <h2>Form Ubah Data Mahasiswa</h2>
            <form action="index.php?aksi=ubah&kode=<?php echo $tampil['NIM']; ?>" method="post">
                <input type="hidden" name="kode" value="<?php echo $tampil['NIM']; ?>">
                <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                <input type="text" name="nama_mahasiswa" value="<?php echo $tampil['nama_mahasiswa']; ?>">
                <br>
                <label for="NIM">NIM:</label>
                <input type="text" name="NIM" value="<?php echo $tampil['NIM']; ?>">
                <br>
                <label for="Kelas">Kelas:</label>
                <input type="text" name="Kelas" value="<?php echo $tampil['Kelas']; ?>">
                <br>
                <input type="submit" name="simpan_perubahan" value="Simpan Perubahan">
            </form>
        </body>
        </html>
        <?php
    }
}

if (isset($_POST['simpan_perubahan'])) {
    $kode = $_POST['kode'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $NIM = $_POST['NIM'];
    $Kelas = $_POST['Kelas'];

    $query_update = "UPDATE data_mahasiswa_TI SET
        nama_mahasiswa=?,
        NIM=?,
        Kelas=?
        WHERE NIM=?";
    
    $stmt = mysqli_prepare($koneksi, $query_update);
    mysqli_stmt_bind_param($stmt, "ssss", $nama_mahasiswa, $NIM, $Kelas, $kode);

    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil diubah";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    } else {
        echo "Error: " . $query_update . "<br>" . mysqli_error($koneksi);
    }
    mysqli_stmt_close($stmt);
}
?>



</body>
</html>
    <!--input section start-->
    <section id="input" class="input">
      <h2><span>INPUT</span> DATA</h2>
      <p>Silahkan Masukkan Data Mahasiswa dibawah ini!</p>
      

     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td width="120">Nama Mahasiswa</td>
            <td><input type="text" name="nama_mahasiswa"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="NIM"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><input type="text" name="Kelas"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    $nama = $_POST['nama_mahasiswa'];
    $nim = $_POST['NIM'];
    $kelas = $_POST['Kelas'];

    mysqli_query($koneksi, "INSERT INTO data_mahasiswa_TI (nama_mahasiswa, NIM, Kelas) VALUES ('$nama', '$nim', '$kelas')");

    echo "<p class='success-message'>Data Mahasiswa Baru Telah Tersimpan</p>";
}
?>

</body>
</html>

    

    <footer>
      
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Data Mahasiswa</a>
        <a href="#input">Input Data Mahasiswa</a>
        
      </div>
      <div class="credit">
        <p>Created by<a href="">ryananata</a>. | &copy; 2023</p>
      </div>
    </footer>
  
    <script>
      feather.replace();
    </script>

  
  </body>
</html>
