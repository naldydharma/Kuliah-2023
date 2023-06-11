<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="logo.JPEG">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>model-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <audio src="bintangdisurga.mp3" autoplay hidden></audio>

    <div class="container-fluid">

        <!--navbar-->
        <div class="row">
            <div class="col border border-black px-3 pb-2 pt-2">
                <div class="row">
                    <div class="col text-start">
                        <h2>King Invitation</h2>
                    </div>
                    <div class="col text-end">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                User
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="history.html">History</a></li>
                                <li><a class="dropdown-item" href="index.html">Log Out</a></li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!--end navbar-->

        <!-- navbar 2 -->
        <div class="row">
            <div class="col border border-1 border-black mt-5">
                <div class="row text-center mx-5">
                    <div class="col">
                        <a href="#acara">Acara</a>
                    </div>
                    <div class="col">
                        <a href="#foto">Foto</a>
                    </div>
                    <div class="col">
                        <a href="#cerita">Cerita</a>
                    </div>
                    <div class="col">
                        <a href="#ucapan">Ucapan</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- acara -->
        <div class="row" id="acara">
            <div class="col mx-5 border border-1 border-black mt-5">
                <div class="row text-center mt-5 mx-3">
                    <div class="col">
                        <h2>Alan</h2>
                    </div>
                    <div class="col">
                        <h2>Salma</h2>
                    </div>
                </div>
                <br><br><br>
                <p>Alamat : Jogja</p>
                <p>Waktu : 16.00</p>
                <p>Tanggal : 23 Juni 2023</p>
            </div>
        </div>

        <!-- foto -->
        <div class="row" id="foto">
            <div class="col text-center fw-bold mt-5">
                <h1>
                    Mempelai
                </h1>
            </div>
        </div>
        <div class="row mx-4 text-center">
            <div class="col">
                <img src="pria1.jpg" style="width: 300px;border-radius: 100%;">
            </div>
            <div class="col">
                <img src="wanita1.JPEG" style="width: 250px;border-radius: 100%;">
            </div>
        </div>

        <!-- cerita -->
        <div class="row" id="cerita">
            <div class="col mx-5 mt-5  text-center">
                <center>
                    <div style="width: 70%;border:2px solid black;">
                        <p>pada waktu itu</p>
                        <br><br><br><br><br><br><br><br>
                    </div>
                </center>
                
            </div>
        </div>
        
        <!-- ucapan -->
        <div class="row" id="ucapan">
            <div class="col mt-5 mx-5 mb-5">
                <center>
                    <div style="border: 3px solid black; overflow: auto;width: 500px; height: 400px;">
                        <h3>Nama 1</h3>
                        <p>hai......................</p>
                        <br><br><br>
                        <h3>Nama 2</h3>
                        <p>selamat.............</p>
                        <br><br><br>
                        <h3>Nama 3</h3>
                        <p>selamat..........</p>
                        <br><br><br>
                        <h3>Nama 4</h3>
                        <p>selamat........</p>
                    </div>
                </center>
            </div>
        </div>

        <!-- kirim pesan -->
        <div class="row mb-5">
            <div class="col text-center">
                <h3>Kirim Pesan</h3>
            </div>
        </div>

        <div  class="row mx-5 mb-5 text-center">
            <div class="col">
                <form action="">
                    <h4>Nama Pengirim</h4>
                    <input type="text" style="width: 600px;">
                    <h4>Pesan</h4>
                    <input type="text" style="width: 600px;height: 600px;">
                    <br><br>
                    <input type="submit">
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>