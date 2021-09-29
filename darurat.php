<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//     header("location:login.php");
//     exit;
// }
?>
<? include 'head.php';?>
<?php include 'navbar.php'; ?>
<title> Layanan Darurat </title>
<br>
<div class="container">
    <h3>Layanan Darurat Sirespek</h3>
    <h6>Silahkan aktifkan GPS dan izinkan kami mengakses lokasi anda saat ini. <br>Untuk mendapatkam lokasi anda dan melakukan permintaan layanan Darurat
        silahkan klik tombol dibawah</h6>
</div>
<center>
    <p id="tampilkan"></p>
    <br>
    <div id="mapcanvas"></div>
</center>
<br>
<span class="border border-primary">
    <script src="http://maps.google.com/maps/api/js"></script>

    <script>
        var view = document.getElementById("tampilkan");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
            }
        }

        function showPosition(position) {
            lat = position.coords.latitude;
            lon = position.coords.longitude;
            latlon = new google.maps.LatLng(lat, lon)
            mapcanvas = document.getElementById('mapcanvas')
            mapcanvas.style.height = '500px';
            mapcanvas.style.width = '500px';

            var myOptions = {
                center: latlon,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
            var marker = new google.maps.Marker({
                position: latlon,
                map: map,
                title: "You are here!"
            });
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
                    break;
                case error.POSITION_UNAVAILABLE:
                    view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
                    break;
                case error.TIMEOUT:
                    view.innerHTML = "Requestnya timeout bro"
                    break;
                case error.UNKNOWN_ERROR:
                    view.innerHTML = "An unknown error occurred."
                    break;
            }
        }
    </script>
</span>
<br>
<br>
<br>
<br>
<br>
<center>
    <button class="btn btn-danger" onclick="getLocation()">Dapatkan Lokasi</button>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include 'footer.php';
include 'foot.php';
?>