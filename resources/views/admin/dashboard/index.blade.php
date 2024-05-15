<!-- <p>ini halaman dashboard</p> -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
  <title>sweet bakery</title>
  <h2>Selamat Datang di Kantin WISAGA</h2>
    <p>Temukan berbagai makanan berkualitas dan sehat dengan harga terjangkau.</p>
    <a href="#" class="btn">Lihat Produk</a>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Sweet Bakery&copy;</h1>
</div>
      </ul>
    </nav>
  </header>

    <h2>Selamat Datang di Kantin WISAGA</h2>
    <p>Temukan berbagai makanan berkualitas dan sehat dengan harga terjangkau.</p>
    <a href="#" class="btn">Lihat Produk</a> -->

  <div class="logo"> </div>
<div class="terbaru">
  <h2>Makanan Sehat</h2>
</div>
<div class="produk-container">
  <div class="produk-item">
  <img src="{{ asset('img/bala.jpg') }}" class="ukurangambarmenu">
    <h3>Bala-Bala</h3>
    <p>Harga: Rp1.000</p>
    <a href="#" class="btn" onclick="openSlideScreen()">Beli</a>
  </div>

  <div class="produk-item">
  <img src="{{ asset('img/tahu.png') }}" class="ukurangambarmenu">
    <h3>Tahu</h3>
    <p>Harga: Rp1.000</p>
    <a href="#" class="btn" onclick="openSlideScreen()">Beli</a>
  </div>

  <div class="produk-item">
  <img src="{{ asset('img/piscok.webp') }}" class="ukurangambarmenu">
    <h3>Piscok</h3>
    <p>Harga: Rp75.000</p>
    <a href="#" class="btn" onclick="openSlideScreen()">Beli</a>
  </div>

  <div class="produk-item">
  <img src="{{ asset('img/jus.jpg') }}" class="ukurangambarmenu">
    <h3>Jus</h3>
    <p>Harga: Rp5.000</p>
    <a href="#" class="btn" onclick="openSlideScreen()">Beli</a>
  </div>

  <div class="produk-item">
  <img src="{{ asset('img/ayam.jpg') }}" class="ukurangambarmenu">
    <h3>Ayam</h3>
    <p>Harga: Rp20.000</p>
    <a href="#" class="btn" onclick="openSlideScreen()">Beli</a>
  </div>

  <div class="produk-item">
  <img src="{{ asset('img/putu.jpg') }}" class="ukurangambarmenu">
    <h3>Putu Ayu</h3>
    <p>Harga: Rp75.000</p>
    <a href="#" class="btn" onclick="openSlideScreen()">Beli</a>
  </div>
</body>
</html>
<style>

#produk {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;

  }

  /* Styling untuk setiap item produk */
  .produk-item {
    text-align: center;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 40px;
    transition: background-color 0.3s;
    width: 300px;
    margin: 20px;
    border-radius: 5px;
    display: inline-block;

  }

  /* Efek hover pada item produk */
  .produk-item:hover {
    background-color: #eaeaea;
  }

  /* Styling untuk judul produk */
  h3 {
    margin-top:20px;
    font-family: Arial, sans-serif;
    font-size: 20px;
  }

  /* Styling untuk harga produk */
  p {
    margin-top: 5px;
    font-family: Arial, sans-serif;
  }

  /* Styling untuk tombol beli */
  .btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
    font-family: Arial, sans-serif;
    transition: background-color 0.3s;
  }


  /* Efek hover pada tombol beli */
  .btn:hover {
    background-color: #555;
  }

  .produk-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .terbaru {
    margin-top: 5px;
    font-family: Arial, sans-serif;
  }

  .ukurangambarmenu{
    width: 200px;
    height: auto;
  }
  </style>