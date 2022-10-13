
    @extends('layouts.dashboard_vendor')

    <!--hero section-->
    @section('container')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Kelola Kendaraan</h2>
                </div>
            </div>
    <div class="">
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="/vendor/Kelola-barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName2">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href="/vendor/Kelola-Barang/kelola_barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="/vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
          <div class="container mt-4 mb-5" >
            <div class="row justify-content-center">
                    <div class="card" style="background-color: #fff; width:70% ">
                        <div class="mt-3">
                                    <p><b>Tambah layanan lahan parkir!</b>
                                    <p class="text-muted">Daftarkan tempat parkir Anda dengan 
                                        mengisi data dibawah ini</p><br>
                                    </p>
                                    <h6><svg  xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                                      </svg><b>Alamat lahan parkir</b></h6>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="ps-4">Untuk mengatur lokasi dan detail alamat lahan parkir Anda</p>
                                        </div>
                                        <div class="col-md-2">
                                            <i class="bi bi-check2-square" style="font-size: 37px; color:rgb(98, 212, 133);"></i>
                                           
                                        </div>   
                                    </div>
                                    <hr>
                                    <div class="">
                                        <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                                          </svg><b>Jenis Kendaraan</b></h6>
                                     <div class="row">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Mengatur jenis kendaraan yang dititipkan</p>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><button class="btn btn-success mb-3">Tambah</button></a>
                                        </div>
                                     </div>
                                    </div>
                                    <hr>
                                    <div class="text-muted mb-4">
                                     <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px" fill="currentColor" class="bi bi-3-circle-fill p-2"  viewBox="0 0 16 16" style="color:rgb(255, 221, 0)">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                                      </svg><b>Ketersediaan Lahan</b></h6>
                                     <div class="row ">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Menginputkan detail rincian kondisi lahan parkir</p>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                          <a href=""></a>
                                        </div>   
                                       
                                     </div>
                                    </div>
                          
                                </div>
                            </div>
                        </div>
          </div>
        </div>
    </div></div></div>
<!--modal pilih kendaraan-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel" >Pilih Jenis Paket</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="mt-2" style="font-size: 15px">
                      <label for="exampleFormControlInput1" class="form-label"><b>Pilih kendaraan yang ada di
                        layanan Anda.</b>
                        <p class="text-muted">Silahkan centang fasilitas yang ada dan 
                            sesuai untuk lahan anda  </p>
                    </label>
                  </div>
                  <P style="font-size: 20px"><b>Kendaraan Golngan 1</b></P>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan foto</button>
                      
                        <div class="image-upload-wrap">
                          <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                          <div class="drag-text"><br>
                          <p>Tidak ada foto yang dipilih</p>
                          </div>
                        </div>
                        <div class="file-upload-content">
                          <img class="file-upload-image" src="#" alt="your image" />
                          <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-2">
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Sekuter
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Sepeda
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                       Motor
                        </label>
                      </div>
                      <div class="mb-3">
                        <label for="">Masukan harga penitipan </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                     </div>
                    </div>   
                  </div>
                  <div class="mb-1">
                    <label for="">Deskripsi Layanan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                 </div>
              <P style="font-size: 20px"><b>Kendaraan Golongan 2</b></P>
              <div class="row">
                <div class="col-md-6">
                  <div class="file-upload">
                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan foto</button>
                  
                    <div class="image-upload-wrap">
                      <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                      <div class="drag-text"><br>
                      <p>Tidak ada foto yang dipilih</p>
                      </div>
                    </div>
                    <div class="file-upload-content">
                      <img class="file-upload-image" src="#" alt="your image" />
                      <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                      </div>
                    </div>
                  </div>
                </div>
             
                <div class="col-md-6 mt-2">
                  <div class="form-check" style="font-size:20px">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Becak
                    </label>
                  </div>
                  <div class="form-check" style="font-size:20px">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Bajaj
                    </label>
                  </div>
                  <div class="form-check" style="font-size:20px">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Delman
                    </label>
                  </div>
                  <div class="form-check" style="font-size:20px">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Motor viar
                    </label>
                  </div>
                  <div class="mb-3">
                    <label for="">Masukan harga penitipan </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                 </div>
                </div>   
              </div>
              <div class="mb-1">
                <label for="">Deskripsi Layanan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
             </div>
                <P style="font-size: 20px"><b>Kendaraan Golongan 3</b></P>
                <div class="row">
                  <div class="col-md-6">
                    <div class="file-upload">
                      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan foto</button>
                    
                      <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text"><br>
                        <p>Tidak ada foto yang dipilih</p>
                        </div>
                      </div>
                      <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                          <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <div class="form-check" style="font-size:20px">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      Mobil Pribadi
                      </label>
                    </div>
                    <div class="form-check" style="font-size:20px">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      Mini bus
                      </label>
                    </div>
                    <div class="form-check" style="font-size:20px">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      Mobil pickup
                      </label>
                    </div>
                    <div class="form-check" style="font-size:20px">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                      Angkot
                      </label>
                    </div>
                    <div class="mb-3">
                      <label for="">Masukan harga penitipan </label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                   </div>
                  </div>   
                  <div class="mb-1">
                    <label for="">Deskripsi Layanan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                 </div>
                  <P style="font-size: 20px"><b>Kendaraan Golongan 4</b></P>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan foto</button>
                      
                        <div class="image-upload-wrap">
                          <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                          <div class="drag-text"><br>
                          <p>Tidak ada foto yang dipilih</p>
                          </div>
                        </div>
                        <div class="file-upload-content">
                          <img class="file-upload-image" src="#" alt="your image" />
                          <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-2">
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Truk biasa
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Mini Bus
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Kopayu
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        ELF
                        </label>
                      </div>
                      <div class="mb-3">
                        <label for="">Masukan harga penitipan </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                     </div>
                    </div>
                    <div class="mb-1">
                      <label for="">Deskripsi Layanan</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                   </div>
                    <P style="font-size: 20px"><b>Kendaraan Golongan 5</b></P>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan foto</button>
                      
                        <div class="image-upload-wrap">
                          <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                          <div class="drag-text"><br>
                          <p>Tidak ada foto yang dipilih</p>
                          </div>
                        </div>
                        <div class="file-upload-content">
                          <img class="file-upload-image" src="#" alt="your image" />
                          <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="col-md-6 mt-2">
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Truk Kontainer
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Truk Tronton
                        </label>
                      </div>
                      <div class="form-check" style="font-size:20px">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Truk Trailer
                        </label>
                      </div>
                      <div class="mb-3">
                        <label for="">Masukan harga penitipan </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                     </div>
                    </div>
                  </div>
                  <div class="mb-1">
                    <label for="">Deskripsi Layanan</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                 </div>
                  
                <a href="/Vendor/Kelola-Kendaraan/layanan_step3"><button type="button" class="btn btn-success col-md-12 mt-3">Lanjutkan</button><br><br></a>
              </div>
            </div>
        </div>
      </div>
    </section>
    @endsection