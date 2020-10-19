<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="/img/Logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Synthesis Homes | Rumah Nyaman untuk Keluarga Anda</title>
</head>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <img class="logo" src="/img/Logo.jpg" alt="">
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item web-slider active" style="background-image: url('/img/web-slider/WEB-BANNER-SH-AUG-2020-1.jpg')"></div>
            <div class="carousel-item web-slider" style="background-image: url('/img/web-slider/web_slider_greenpark.jpg')">        </div>
            <div class="carousel-item web-slider" style="background-image: url('/img/web-slider/web_slider_edupark.jpg')"></div>
            <div class="carousel-item web-slider" style="background-image: url('/img/web-slider/web_slider_sportpark.jpg')"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </header>

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6 col-12">
                <h4 class="pt-4"><strong>KENYAMANAN HIDUP<br> DI LINGKUNGAN HIJAU</strong></h4>
                <p class=" desc-homes pt-4">Proyek hunian terbaru karya Synthesis Development yang dikembangkan di area Ciputat, Tangerang Selatan.  Synthesis Homes dengan luas area 4,7 hektar terdiri dari 3 tipe rumah dengan jumlah total 267 unit dengan mengusung fitur Smart Home. Selain itu, kawasan ini akan dilengkapi 4 taman tematik.
                    Synthesis Homes, berlokasi 2 km dari Stasiun MRT Lebak Bulus, yang merupakan jalur penghubung utama dengan kawasan sentra bisnis Sudirman dan sekitarnya.
                    Dengan fasilitas keamanan yang disediakan, penghuni kawasan Synthesis Homes akan merasa lebih aman dalam beraktifitas keseharian.
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <img class="homes4" src="/img/homes4.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid pl-0 pr-0 pt-4">
        <div class="tematik-section pb-5" style="background: rgb(246, 246, 246)">
        <h5 class="pt-3" style="text-align:center"><strong>4 TAMAN TEMATIK</strong></h5><hr>
        <div class="row justify-content-center ml-0 mr-0 pt-4">
            <div id="carouselTematik" class="carousel slide w-75" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselTematik" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselTematik" data-slide-to="1"></li>
                    <li data-target="#carouselTematik" data-slide-to="2"></li>
                    <li data-target="#carouselTematik" data-slide-to="3"></li>
                    <li data-target="#carouselTematik" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" style="box-shadow: 1px 1px 10px #e5e5e5;">
                    <div class="carousel-item tematik-item active">
                    <img class="d-block w-100" src="/img/tematik/clubhouse.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item tematik-item">
                    <img class="d-block w-100" src="/img/tematik/funpark.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item tematik-item">
                    <img class="d-block w-100" src="/img/tematik/edupark.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item tematik-item">
                    <img class="d-block w-100" src="/img/tematik/sportpark.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item tematik-item">
                    <img class="d-block w-100" src="/img/tematik/greenpark.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev tematik-control" href="#carouselTematik" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next tematik-control" href="#carouselTematik" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
    </div>
    <div class="container-fluid" style="background: url('/img/Bag.jpg')">
        <h4 class="pt-4" style="text-align:center; color: white">Untuk informasi silahkan klik tombol dibawah ini</h4>
        <div class="row justify-content-center pt-3 pb-4">
            <div class="btn-group">
                <a href="https://marketing.asriloka.com/u/{{$userid}}" target="_blank" class="btn btn-primary pt-2 pb-2 button-cp" style="background: white; border:1px solid grey; color:black"><i class="fa fa-user" aria-hidden="false"></i><span class="pl-3">Contact Person</span></a>
                <a href="https://api.whatsapp.com/send?phone=+62{{$hp}}&text=Halo, Saya ingin bertanya tentang Synthesis Homes" target="_blank" class="btn btn-primary pt-2 pb-2 button-cp" style="background: #25d366; border:1px solid grey; color:black"><i class="fa fa-whatsapp" aria-hidden="false"></i><span class="pl-3">Hubungi via Whatsapp</span></a>
            </div>    
        </div>
    </div>
    <div class="container-fluid pt-4 pb-4" style="background: rgb(47,61,46)">
        <div class="row justify-content-center">
            <img class="map-pic" src="/img/Newmaps-synthesishomes.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <h1 style="font-weight:650">Type Rumah</h1>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-lg-6">
                <div id="carouselType1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselType1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselType1" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" style="box-shadow: 1px 1px 10px #e5e5e5;">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/typeRumah/andesit2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/img/typeRumah/spekandesit.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselType1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselType1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="head-spek pt-5">Tipe Andesit - 6 x 15</h1>
                <img class="pt-4" src="/img/typeRumah/spekandesit2.jpg" alt="">
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-lg-6">
                <div id="carouselType2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselType2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselType2" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" style="box-shadow: 1px 1px 10px #e5e5e5;">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/typeRumah/paras.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/img/typeRumah/spekparas.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselType2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselType2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="head-spek pt-5">Tipe Paras - 6 x 10</h1>
                <img class="pt-4" src="/img/typeRumah/spekparas2.jpg" alt="">
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-lg-6">
                <div id="carouselType3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselType3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselType3" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" style="box-shadow: 1px 1px 10px #e5e5e5;">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/typeRumah/candi.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/img/typeRumah/spekcandi.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselType3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" style="" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselType3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="head-spek pt-5">Tipe Candi - 6 x 12</h1>
                <img class="pt-4" src="/img/typeRumah/spekcandi2.jpg" alt="">
            </div>
        </div>
        <div class="row pt-5">
            <h1 style="font-weight:650; text-align:center" class="pb-4">Rumah Contoh Virtual Tour</h1>
        </div>
        <div class="row justify-content-center  pb-5">
            <iframe width="853" height="480" src="https://my.matterport.com/show/?m=YhMkiS941rp" frameborder="0" allowfullscreen allow="vr"></iframe>
        </div>
    </div>
    <div class="container-fluid" style="background: url('/img/Bag.jpg')">
        <h4 class="pt-3 pb-3 mb-0" style="text-align:center; color: white">FASILITAS TERLENGKAP</h4>
    </div>
    <div class="container-fluid pt-2 mt-0" style="background: rgb(232, 232, 232)">
        <div class="row">
            <div class="col-lg-4">
                <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">4 Taman Tematik</span></p>
                <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Kolam Renang</span></p>
                <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Sauna Room</span></p>
                <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Indoor & Outdoor Gym</span></p>
                <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Jogging Track</span></p>
            </div>
            <div class="col-lg-4">
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Jaringan Internet</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">CCTV 24 Jam</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Gate System</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Access Card</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Ruang Serbaguna</span></p>
            </div>
            <div class="col-lg-4">
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">BBQ Area & Picnic Area</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Taman Bermain Anak</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Ruang Belajar Outdoor</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Jalur Sepeda</span></p>
            <p class="pl-3"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="color:green"></i><span style="font-weight:bold" class="pl-3">Public Outdoor Lounge</span></p>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <h1 class="pt-5" style="text-align:center;font-weight:650"></i>Contact Us</h1>
        <h4 class="pt-4" style="text-align:center">Untuk informasi silahkan klik tombol dibawah ini</h4>
        <div class="row justify-content-center pt-3 pb-4">
            <div class="btn-group">
                <a href="https://marketing.asriloka.com/u/{{$userid}}" target="_blank" class="btn btn-primary pt-2 pb-2 button-cp" style="background: white; border:1px solid grey; color:black"><i class="fa fa-user" aria-hidden="false"></i><span class="pl-3">Contact Person</span></a>
                <a href="https://api.whatsapp.com/send?phone=+62{{$hp}}&text=Halo, Saya ingin bertanya tentang Synthesis Homes" target="_blank" class="btn btn-primary pt-2 pb-2 button-cp" style="background: #25d366; border:1px solid grey; color:black"><i class="fa fa-whatsapp" aria-hidden="false"></i><span class="pl-3">Hubungi via Whatsapp</span></a>
            </div>  
        </div>
        <p style="text-align:center"><strong>Office :</strong></p>
        <p style="text-align:center">Jl. Pondok Bambu Batas No.14 Rt.003/012<br>Kel. Pondok Bambu<br>
            Kecamatan Duren Sawit<br> Jakarta Timur, 13620</p>
    </div>
    <div class="container-fluid pb-2 mb-5" style="background: rgb(47,61,46)">
        <div class="row pt-3">
            <div class="col-lg-6">
                <h5 style="font-weight:bold; text-align: center; color:white">DEVELOPED BY :</h5>
                <div class="row justify-content-center">
                    <img src="/img/logoSynthesis.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <h5 style="font-weight:bold; text-align: center; color:white">PARTNER :</h5>
                <div class="row justify-content-center">
                    <img style="width:25%;height:auto" src="/img/logoAsriloka.png" alt="">
                </div>
                <p style="text-align:center;" class="pt-2"><a href="https://www.asriloka.com" target="_blank" style="text-decoration:none;color: white">www.asriloka.com</a></p>
            </div>
        </div>
    </div>

    <!-- Optional javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>