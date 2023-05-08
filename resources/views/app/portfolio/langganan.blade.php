@extends('layouts.portfolio')

@section('content')
<main id="main">
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('bg_simulasi.png') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Simulasi</h2>
            <ol>
                <li><a href="index.html">Simulasi</a></li>
                <li>Simulasi Langganan</li>
            </ol>
        </div>
    </div>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4" data-aos="fade-up">
                <div class="col-lg-5">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="container-fluid">
                            <h5 class="card-title text-center">Simulasi Langganan</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">Isi Data Dibawah Ini</h6>
                            <form action="" id="simulasi">
                                <div class="mb-3 ">
                                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="">
                                      <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="plts" class="col-sm-4 col-form-label">System PLTS</label>
                                    <div class="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="plts" id="plts1" value="On Grid">
                                            <label class="form-check-label" for="plts1">
                                                On Grid
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="plts" id="plts2" value="Off Grid">
                                            <label class="form-check-label" for="plts2">
                                                Off Grid
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="daya" class="col-sm-4 col-form-label">Daya PLN</label>
                                    <div class="">
                                      <input type="text" class="form-control" id="daya" name="daya">
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="kode_golongan" class="col-sm-4 col-form-label">Kode Golongan Tarif</label>
                                    <div class="input-group">
                                      <input type="text" class="form-control" id="kode_golongan" name="kode_golongan">
                                      <button type="button" class="input-group-text" id="basic-addon" data-bs-toggle="modal" data-bs-target="#material"><i class="ri-search-2-line"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="tagihan" class="col-sm-4 col-form-label">Tagihan PLN Setiap Bulan</label>
                                    <div class="">
                                      <input type="text" class="form-control" id="tagihan" name="tagihan">
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-danger text-white" id="reset"><i class="ri-delete-bin-2-line"></i> Reset</a>
                                <a href="#" class="btn btn-info text-white" id="hitung"><i class="ri-calculator-line"></i> Hitung</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="shadow p-3 mb-5 bg-body rounded" id="printPage">
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
                            <thead class="table-light">
                                <tr>
                                    <td><b> Jenis Sambungan PLN Eksisting </b></td>
                                    <td colspan="2"><b> Residensial </b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kapasitas Sambungan PLN Existing (VA)</td>
                                    <td><b id="golongan_tarif"></b></td>
                                    <td><b id="daya_proposal"></b></td>
                                </tr>
                                <tr>
                                    <td>Tarif Dasar Listrik Rp per kWh (LWBP)</td>
                                    <td></td>
                                    <td><b id="rp_per_kwh"></b></td>
                                </tr>
                                <tr>
                                    <td>System PLTS</td>
                                    <td colspan="2"><b id="plts_porto"></b></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Kami merekomendasikan pemasangan PLTS dengan system tersebut dengan detail sebagai berikut :</p>
                        <table class="table table-hover table-lg table-bordered">
                            <tr>
                                <td>Kapasitas PLTS (Wp)</td>
                                <td class="text-end"><b id="kapasitas"></b></td>
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
                        <br><br>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary text-white" id="unduh"><i class="bi bi-file-pdf-fill"></i> Unduh Proposal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="material" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pilih Kategory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-hover table-lg">
                            <thead>
                                <tr>
                                    <td>Kode</td>
                                    <td>Kategory</td>
                                    <td>Keterangan</td>
                                    <td>Gol.Tarif</td>
                                    <td>Batas Daya</td>
                                    <td>Rp/kWh</td>
                                    <td>Luas Atap</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materials as $material)
                                    <tr data-id="{{ $material->kode }}" style="cursor: pointer">
                                        <td>{{ $material->kode }}</td>
                                        <td>{{ $material->kategori }}</td>
                                        <td>{{ $material->keterangan }}</td>
                                        <td>{{ $material->golongan_tarif }}</td>
                                        <td>{{ $material->batas_daya }}</td>
                                        <td>{{ $material->rp_per_kwh }}</td>
                                        <td>{{ $material->luas_atap }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <p> Klik table untuk memilih data </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
    <script>
        $('#reset').on("click", function() {
            $('#simulasi').trigger('reset');
        });

        $('tr').on("click", function(e){
            e.preventDefault();
            $('#kode_golongan').val($(this).data('id'));
            $('#material').modal('hide');
        });

        $('#daya').on("input", function() {
            let daya = $('#daya').val();
            if (daya <= 900) {
                $('#kode_golongan').val(1);
            } else if(daya <= 1300) {
                $('#kode_golongan').val(2);
            } else if(daya <= 2200) {
                $('#kode_golongan').val(3);
            } else if(daya <= 5500) {
                $('#kode_golongan').val(4);
            } else if(daya >= 6600) {
                $('#kode_golongan').val(5);
            }
        });

        function printData()
        {
            var style = `<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">`;
            var divToPrint = document.getElementById("printPage");
            newWin= window.open(null, 'Print_Page', 'scrollbars=yes');
            newWin.document.write(style + jQuery(divToPrint).html());
            newWin.document.close();
            newWin.print();
        }

        $('#hitung').on("click", function(e) {
            e.preventDefault();
            let data = $('#simulasi').serialize();
            $.ajax({
                type: "POST",
                url: `{{ route('portfolio.simulasi_langganan.proses') }}`,
                data: {
                    data: data,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data){
                    $('#golongan_tarif').text(data.golongan_tarif);
                    $('#daya_proposal').text(data.daya);
                    $('#rp_per_kwh').text(data.rp_per_kwh);
                    $('#plts_porto').text(data.plts);
                    $('#kapasitas').text(data.kapasitas);
                    $('#total_invest_client').text(data.total_invest_client);
                    $('#kapasitas_plts').text(data.kapasitas_plts);
                    $('#penghematan').text(data.penghematan);
                    $('#bep').text(data.bep);
                    $('#penghematan_25_thn').text(data.penghematan_25_thn);
                    $('#qty').text(data.qty);
                    $('#unduh').on("click", function() {
                        var divToPrint = document.getElementById("printPage");
                        var newWin = window.open('', '', 'width=800,height=600');
                        newWin.document.write(`<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">`);
                        newWin.document.write(divToPrint.innerHTML);
                        newWin.document.close();
                        newWin.focus();
                        newWin.print();
                        newWin.close();
                    })
                }
            })
        })
    </script>
@endpush
