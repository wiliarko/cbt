<div class="container mt-100-st">
    <div class="row m-0">
        <div class="col-sm-12 col-md-6 text-left">
            <h1 id="my-element" class="font-roboto offset-text-bg">Detail Ujian</h1>
        </div>  
        <div class="col-sm-12 col-md-6 text-right">
            <div class="font-roboto clock" style="margin:1.2em;"></div>
        </div>         
    </div>
    <div class="row">
        <div class="box effect-box rounded text-white">
            <div class="col-sm-12">
                <h4 class="ls-1 text-center mb-5 font-weight-bold text-uppercase">GRANDSBMPTN 2021</h4>
                <h3 class="font-arial-bold ls-2 text-center">Penalaran Umum</h3>
                <div class="col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-4 mb-5">
                    <table class="table-borderless m-2">
                        <tr>
                            <td><h5>Waktu Pengerjaan</h5></td><td><h5> : </h5></td><td><h5>120 Menit</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Jumlah Soal</h5></td><td><h5> : </h5></td><td><h5>10 Butir</h5></td>
                        </tr>
                    </table>
                </div>
                <div class="text-center">
                    <a href="#petunjuk" class="btn btn-md btn-primary" onclick="show_petunjuk()">Petunjuk Pengerjaan</a>
                </div>
            </div>
        </div>
    </div>
    <div id="petunjuk" class="row mt-3" style="display:none;">
        <div class="box effect-box rounded text-white">
            <div class="col-sm-12">
                <div>
                    <span class="font-weight-bold" style="font-size: 24px;">Petunjuk Pengerjaan</span><br>
                </div>
                <ul>
                    <li>Berdoa sebelum mengerjakan</li>
                    <li>Maksimalkan waktu yang ada</li>
                </ul>
                <div>
                    <span class="font-weight-bold" style="font-size: 24px;">Petunjuk Teknis</span><br>
                </div>
                <ul>
                    <li>Disarankan mengerjakan dilaptop/komputer anda untuk tampilan yang lebih lebar</li>
                    <li>Untuk menghindari hal-hal yang tidak diinginkan disarankan memakai browser (contoh : Chrome, Firefox, Edge) versi terbaru</li>
                    <li>Setelah klik mulai, selama proses tes berlangsung anda tidak diijinkan untuk : 
                        <ul>
                            <li>Refresh browser</li>
                            <li>Membuka tab lain</li>
                            <li>Keluar dari browser</li>
                            <li>Klik tombol back di browser</li>
                        </ul>
                    </li>
                </ul>
                <h5 id="info_mulai" class="text-center font-poppins text-informasi" style="display:none;">Tes akan dimulai dalam hitungan</h5>
                <div id="mulai_tes" class="text-center">
                    <a href="#app" class="btn btn-md btn-success m-2" onclick="mulai_tes()">Mulai Pengerjaan</a>
                    <h6><i>Atau</i></h6>
                    <button type="button" class="btn btn-outline-secondary" onclick="back_dashboard()">Kembali</button>
                </div>
                <div id="app" style="display:none;"></div>
            </div>
        </div>
    </div>
</div>