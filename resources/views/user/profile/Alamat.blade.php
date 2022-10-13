@extends("layouts.user")
@section('container')
    
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container card py-4 px-4">
        <div class="col-8 ps-4 mt-2">
            <h3>ALAMAT SAYA</h3>
          </div>
        <div class="row col-md-12 py-4">
            <div class="col  col-md-4 ps-2" style="margin-left:25px">
                @include('partials.profile')
            </div>
            <div class="col-md-6" style="width: 800px; margin-left:15px">
                <div class="card py-4">
                        <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Alamat Saya</h5>
                        <hr width="100%" color="#c0c0c0">
                            <div class="row" style="margin-left:10px">
                                <div class="col-md-10">
                                    <p><b>Rebbeca Howard</b></p>
                                    <p>08934364865234</p>
                                    <p>Jln. Sukonandi No. 121 Santrean, <p>Tembelang, Jombang,</p> Timur 35624</p>
                                    <p class="card-text"><small class="text-muted">catatan: masuk gang ke arah timur</small></p>
                                </div>
                                <div class="col-md-1 text-end" style="font-size: 20px">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#Editalamat"><i class="bi bi-pencil-square"></i></a>
                                </div> 
                                <div class="col-md-1">
                                    <p style="font-size: 20px"><a href="/user/profile/edit_alamat" data-bs-toggle="modal" data-bs-target="#hapusAlamat"><i class="bi bi-trash"></i></a></p>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusAlamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Hapus alamat ?</p>
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-outline-secondary" type="button">Nanti saja</button>
                                                        <button class="btn btn-outline-success" type="button">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                            <div style="margin-left:25px; margin-right:25px" class="mt-3">
                                <a href="" data-bs-toggle="modal" data-bs-target="#Tambahalamat"><button type="button" class="btn btn-outline-success col-sm-12" >Tambah Alamat Baru</button></a>
                            </div>
    
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</section>


{{-- MODAL TAMBAH ALAMAT --}}
  <div class="modal fade" id="Tambahalamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="width:700px">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input class="form-control" type="text" placeholder="Nama Lengkap" aria-label="Disabled input example">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                  <input class="form-control" type="text" placeholder="Nomor Telepon" aria-label="Disabled input example">
                </div>

                <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                    <input class="form-control" type="text" placeholder="Provinsi, Kota, Kecamatan, Kode Pos" aria-label="Disabled input example" >
                    <input class="form-control" type="text" placeholder="Nama Jalan" aria-label="Disabled input example">
                    <input class="form-control" type="text" placeholder="catatan : masuk gang depan" aria-label="Disabled input example" >
                </div>
                <div>
                  <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                  <iframe style="width:100%" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                </div>
                <div class="cardHeader1" style="margin-top: 30px;">
                  <h6>Pilih sebagai alamat utama</h6>
                  <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                  </label>
                </div>
                <a class="btn btn-outline-success col-md-12 mt-3" href="/user/profile/Alamat" role="button">Simpan</a>
              </form>
              
        </div>
      </div>
    </div>
  </div>


{{-- MODAL EDIT --}}
<div class="modal fade" id="Editalamat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="width:700px">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Alamat</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input class="form-control" type="text" placeholder="Rebecca Howard" aria-label="Disabled input example">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                  <input class="form-control" type="text" placeholder="089598374543" aria-label="Disabled input example" >
                </div>
                <div class="mb-3">
                  <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                    <input class="form-control" type="text" placeholder="Tembelang,Jombang, Jawa Timur 123422" aria-label="Disabled input example">
                    <input class="form-control" type="text" placeholder="Jln. Sukonandi No. 121 Santrean" aria-label="Disabled input example">
                    <input class="form-control" type="text" placeholder="Masuk Gng Depan" aria-label="Disabled input example">
                </div>
                <div>
                  <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                  <iframe scrolling="no" marginheight="0" style="width: 100%" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                </div>
                <div class="cardHeader1" style="margin-top: 30px;">
                  <h6>Pilih sebagai alamat utama</h6>
                  <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                  </label>
                </div>
                <a class="btn btn-outline-success col-md-12 mt-3" href="/user/profile/Alamat" role="button">Simpan</a>
              </form>
        </div>
      </div>
    </div>
  </div>

@endsection