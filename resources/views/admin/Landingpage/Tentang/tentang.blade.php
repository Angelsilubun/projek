@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">

<body>
<div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Search -->
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
<div class="">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center card">

        <div class="container">

            <div class="row justify-content-between mt-5">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" width="100%">
                    <img src="../../assets/img/about-p.png" class="img-fluid"  style="width: 300px; height: 250px">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Tentang Kami</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Layanan penitipan pertama di Indonesia yang
                        terdaftar dan telah dipercaya kredibilitasnya</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya.
                        Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda. Tersedia di 3 Kota
                        Besar.</p>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

</div>
  <div class="details3">
                <div class="recentOrders3">
                <div class="row">
                    <div class="cardHeader3 col-md-10">
                        <h2>Data Home</h2>
                    </div>
                    <div class="col-md-2 text-end ">
                        <h2 class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i> Tambah</h2>
                    </div>
                </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Gambar</td>
                                <td>Heading</td>
                                <td>Deskripsi</td>
                                <td class="col-sm-2 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tentang as $tentang)
                            <tr>
                                <td><img src="{{url('/storage/' .$tentang->gambar)}}" alt="" style="max-width: 100px"></td>
                                <td>{{ $tentang->heading }}</td>
                                <td>{{ $tentang->deskripsi }}</td>
                                <td class="text-end" style="size: 30px;">
                                    {{-- <button onclick="editTentang({{$tentang->id}})" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                        <i class='bx bx-edit'></i>
                                    </button> --}}
                                    <button onclick="editTentang({{$tentang->id}})" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                        <i class='bx bx-edit'></i>
                                    </button>

                                    <button class="btndelete">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- modal tambah data --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Text</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/tentang') }}" method="POST" enctype="multipart/form-data">
                       @if(Session::has('success'))
                       <div class="alert alert-success">
                           {{Session :: get('success')}}
                       </div>
                         @endif
                        @csrf
                        <div class="form-group">
                          <label for="inputgambar"> Upload Gambar</label>
                          <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ $tentang->gambar}}" >
                        </div>
                        @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group mt-3">
                          <label >Heading</label>
                          <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{ old('heading')}}" >
                        </div>
                        @error('heading')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group mt-3">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control @error('deskripsi')  is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi')}}">
                          </div>
                          @error('deskripsi')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                </div>
                <div class="modal-footer">
                  
                </div>
              </div>
            </div>
          </div>

          {{-- modal edit --}}
          
          <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header hader">
                  <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-content-edit">
                    <form action="{{ url('tentang/simpan') }}" method="POST" enctype="multipart/form-data">
                  @method("PUT")
                        {{ csrf_field() }}
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                    </div>
                    </form>                        
              </div>
            </div>
          </div>

          
@section('js')

<script type="text/javascript">
    function editTentang(id) {
        $.ajax({
            url: "{{ url('/tentang/edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }

    // function detailSubSlider(id) {
    //     $.ajax({
    //         url: "{{ url('/subslider/detail') }}",
    //         type: "GET",
    //         data: {
    //             id: id
    //         },
    //         success: function(data) {
    //             $("#modal-content-detail").html(data);
    //             return true;
    //         }
    //     })
    // }
</script>

@endsection
         
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>



</section>
@endsection