
@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center  services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Kensaraan/kelola_kendaraanstep1" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card2">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunanstep1" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola_Barang/kelola_barangstep1" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-PickUp/kelola_pickupstep1" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
         <div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">
          

                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card" style="background-color: #fff;">
                                <div class="card-body">
            
                                    <a href="/Vendor/Kelola-Bangunan/layanan_step1"><i class="bi bi-arrow-left px-2 "></i><b>Kelola Bangunan</b><hr></a>
                                v
                                    <p><b>Tambah Layanan Bangunan!!</b>
                                    <p class="text-muted">Daftarkan layanan bangunan dengan mengisi data 
                                        dibawah ini</p>
                                    </p><br>
                                    <h6><svg  xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                                      </svg><b>Alamat vendor</b></h6>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="">Untuk mengatur lokasi dan detail alamat Anda</p>
                                        </div>
                                        <div class="col-lg-2">
                                            <button class="btn btn-outline-success">Proses</button>
                                        </div>   
                                        <hr>
                                    </div>
                                    <div>
                                        <h6 class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                          </svg><b>Jenis bangunan</b></h6>
                                     <div class="row text-muted">
                                        <div class="col-md-8 ">
                                            <p class="">Mengatur jenis bangunan yang bisa dititipkan</p>
                                        </div>
                                        <div class="col-md-2 p-4">
                                            {{-- <button class="btn btn-success">Tambah</button> --}}
                                        </div>   
                                      
                                     </div>
                                    </div>
                                    
                           
                                </div>
                            </div>
                        </div>
          </div>
        </div>
        <div class="col" style="width: 700px">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Atur Alamat</h5>
                <hr width="100%" color="#c0c0c0">
                <form action="">
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><b>Alamat</b><p>Isikan alamat vendor Anda dibawah ini</p></label>
                      <input class="form-control text-center" type="text" placeholder="Pilih lokasi Anda" disabled  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  </div>
                  
              
                 <div class="col-md-12">
                     <label for="inputState" class="form-label">Provinsi</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih provinsi</option>
                          <option>DKI Jakarta</option>
                          <option>Jawa Barat</option>
                          <option>Jawa Tengah</option>
                          <option>DI Yogyakarta</option>
                          <option>Jawa Timur</option>
                          <option>Kalimantan Timur</option>

                        </select>
                      </div>

                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Kabupaten</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kabupaten</option>
                          <option>Bantul</option>
                          <option>Sleman</option>
                          <option>Kulon Progo</option>
                          <option>Gunung Kidul</option>
                          <option>Kota Yogyakarta</option>

                        </select>
                      </div>
                      
                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Kecamatan</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kecamatan</option>
                          <option>Baguntapan</option>
                          <option>Bambanglipuro</option>
                          <option>Bantul</option>
                          <option>Dlingo</option>
                          <option>Imogiri</option>
                          <option>Jetis</option>
                          <option>Kasihan</option>
                          <option>Kretek</option>
                          <option>Pajangan</option>
                          <option>Pandak</option>
                          <option>Piyungan</option>
                          <option>Pundong</option>
                          <option>Sanden</option>
                          <option>Sedayu</option>
                          <option>Sewon</option>
                          <option>Srandakan</option>
                          

                        </select>
                      </div>
                    
      
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                        <p><small class="text-muted">Deskripsikan patokan agar layanan bangunan anda
                            mudah ditemukan (opsional)</small></p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                
                      <a href="/Vendor/Kelola-Bangunan/layanan_step2"><button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
                </form>
                
            </div>
          </div>
         
        </div>
    
</div>             
    <!-- Modal pilih alamat-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pilih alamat </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="embed-responsive embed-responsive-1by1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97055414067!2d110.37484495000001!3d-7.803250450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1659314278527!5m2!1sid!2sid"
                 width="420" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" disabled ></iframe>
            </div>
        </div>
        <div class="modal-footer">
          <a href="/Vendor/Kelola-Bangunan/atur_alamat"  class="btn btn-success col-sm-12">Simpan</a>
        </div>
      </div>
    </div>
  </div>       
    
</section>
@endsection