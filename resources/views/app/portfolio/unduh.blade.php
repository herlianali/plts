<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicons -->
    <link href="{{ asset('favicon.png') }}" type="image/png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-between">
        <div class="d-flex align-self-end pt-4">
            <p>
                Kepada Yth : <b>Bapak Joko Widodo</b> <br>
                (pelanggan yang peduli dengan kelestarian bumi Nusantara)
            </p>
        </div>
        <img src="{{ asset('logo-pju.png') }}" width="20%"  alt="">
    </div>

    <br>
    <p><b>Salam Hangat dari Petrogas!</b></p>
    <p>Dengan semangat <b>Go Green</b> dan mendukung transisi energi menjadi energi baru dan terbarukan di Indonesia kami memberikan proposal PLTS Atap sebagai berikut : </p>
    <p>Sesuai dengan data Sambungan PLN yang dipilih oleh pelanggan adalah : </p>
    <table class="table table-hover table-lg">
        <thead class="table-light" style="background: grey">
            <tr>
                <td><b> Jenis Sambungan PLN Eksisting </b></td>
                <td colspan="2"><b> Residensial </b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kapasitas Sambungan PLN Existing (VA)</td>
                {{-- <td><b>{{ $datas['golongan_tarif'] }}</b></td> --}}
                <td><b></b></td>
                {{-- <td><b>{{ datas['daya'] }}</b></td> --}}
            </tr>
            <tr>
                <td>Tarif Dasar Listrik Rp per kWh (LWBP)</td>
                <td></td>
                {{-- <td><b>{{ $datas['rp_per_kwh'] }}</b></td> --}}
            </tr>
            <tr>
                <td>System PLTS</td>
                {{-- <td colspan="2"><b>{{ $datas['plts'] }}</b></td> --}}
            </tr>
        </tbody>
    </table>
    <p>Kami merekomendasikan pemasangan PLTS dengan system tersebut dengan detail sebagai berikut :</p>
    <table class="table table-hover table-lg table-bordered">
        <tr>
            <td>Kapasitas PLTS (Wp)</td>
            {{-- <td class="text-end"><b>{{ $datas['kapasitas'] }}</b></td> --}}
        </tr>
        <tr>
            <td>Nilai Investasi Awal (Rp)</td>
            <td class="text-end"><b id="total_invest_client"></b></td>
        </tr>
        <tr>
            <td>Produksi Energi per Bulan (kWh)</td>
            <td class="text-end"><b id="kapasitas_plts"></b></td>
        </tr>
        <tr>
            <td>Penghematan Biaya Listrik per Bulan (Rp)</td>
            <td class="text-end"><b id="penghematan"></b></td>
        </tr>
        <tr>
            <td>Payback Period (Tahun)</td>
            <td class="text-end"><b id="bep"></b></td>
        </tr>
        <tr>
            <td>Total Penghematan Biaya Listrik 25 Tahun (Rp)</td>
            <td class="text-end"><b id="penghematan_25_thn"></b></td>
        </tr>

    </table>
    <table class="table table-hover table-lg table-bordered">
        <thead class="table-light">
            <tr>
                <td><b>Bill of Material</b></td>
                <td><b>Qty</b></td>
                <td><b>Satuan</b></td>
                <td><b>Brand & Type</b></td>
                <td><b>Negara Pembuatnya</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Solar Panel (PV Module), WP</td>
                <td id="qty"></td>
                <td>Unit</td>
                <td>Nusa FullBlack - Nusa1H440MB44</td>
                <td>Indonesia</td>
            </tr>
            <tr>
                <td>Inverter On Grid, Watt</td>
                <td>1</td>
                <td>Unit</td>
                <td>Growatt / Huawei</td>
                <td>China</td>
            </tr>
            <tr>
                <td>PV Bracket untuk Atap</td>
                <td>1</td>
                <td>Set</td>
                <td>Aluminium</td>
                <td>Indonesia</td>
            </tr>
            <tr>
                <td>Panel Load Transfer</td>
                <td>1</td>
                <td>Set</td>
                <td>Schneider/ABB</td>
                <td>Indonesia</td>
            </tr>
            <tr>
                <td>Kabel dan Aksesoris</td>
                <td>1</td>
                <td>Set</td>
                <td>Sutrado/KMI/Supreme</td>
                <td>Indonesia</td>
            </tr>
        </tbody>
    </table>
    <p>Dengan sistem yang kami rekomendasikan ini selain penghematan biaya listrik yang dapat anda rasakan, Anda juga telah berpartisipasi nyata dalam ikut mendukung penurunan emisi CO2 di bumi.</p>
    <p>Ya, ini adalah langkah yang tepat untuk Anda memulai Cost Saving dan Green energy dalam kehidupan Anda.</p>
    <br>
    <p>Untuk Informasi Lebih Lanjut Hubungi Kami,</p>
    <p>
        <b>Customer Care</b> <br>
        Via Email : <a href="#" class="text-decoration-none"> mistin.ani@petrogas.co.id </a><br>
        Via HP/WhatsApp : +628113212601 <br>
    </p>
    <p class="lh-1">
        <span class="text-decoration-underline">Disclaimers:</span>
        <ol class="lh-1">
            <li>Ilustrasi ini hanya bisa digunakan sebagai perkiraan dan dapat berubah dari waktu kewaktu tergantung dari beberapa faktor.</li>
            <li> Beberapa kondisi yang digunakan dalam perhitungan ini adalah berdasarkan pendekatan serta tidak dapat dijadikan acuan yang sebenarnya.</li>
            <li> Harga yang kami quote di atas sudah termasuk instalasi dan pengiriman di wilayah Jawa Timur.</li>
            <li> Garansi PV module 10 tahun (material) dan 25 tahun (performance guarantee).</li>
            <li> Harga dalam ilustrasi belum termasuk PPN 11%</li>
            <li> Harga dalam ilustrasi belum termasuk SLO dan KWh Export Import.</li>
            <li> Silahkan hubungi kami untuk memastikan ketersediaan stock dan penawaran resmi kepada Anda/Perusahaan Anda, dan kami akan memberikan
                proposal terbaru sesuai dengan rencana lokasi pemasangan PLTS tersebut.</li>
        </ol>
    </p>
      <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('stisla/modules/jquery.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
