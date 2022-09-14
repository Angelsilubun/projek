@extends("layouts.user")
@section('container')
<section class="align-items-center services"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row justify-content-center">
            @include('partials.profile')
            <div class="col" style="width: 700px">
              <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 fw-bold float-left">Account ID {{Auth::user()->id}}</h6>
                  <hr width="100%" color="#c0c0c0">
                  <form class="row g-3 fw-bold">
                    <div class="col-md-12">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control input-text" id="Name"
                            placeholder="name" value="{{Auth::user()->name}}">
                    </div>
                   
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail"
                            value="{{Auth::user()->email}}">
                    </div>
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control input-text" id="username"
                            placeholder="username" value="{{Auth::user()->name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inpukota" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control input-text" id="inputkota"
                            placeholder="kota" value="{{Auth::user()->kota}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Tgl. Lahir</label>
                        <input type="date" class="form-control input-text" id="inputdate"
                            placeholder="" value="{{Auth::user()->date}}">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control input-text" id="inputAddress"
                            placeholder="address" value="{{Auth::user()->address}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Kota</label>
                        <input type="text" class="form-control input-text" id="inputCity"
                            placeholder="city" value="{{Auth::user()->city}}">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Negara</label>
                        <input type="text" class="form-control input-text" id="inputCity"
                            placeholder="city" value="{{Auth::user()->state}}">
                    </div>
                    {{-- <div class="col-md-2">
                        <label for="inputnotelp" class="form-label">No Telp</label>
                        <input type="number" class="form-control" id="inputnoTelp">
                    </div> --}}
                    <div class="col-9">
                        <label for="inputDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="inputDescription" placeholder="Description" value="">{{Auth::user()->description}}</textarea>
                    </div>
        
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!--modal logout-->
    <div class="modal fade" id="ModalLogout" tabindex="-1" aria-labelledby="ModalLogoutLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalLogoutLabel">Log Out Akun <i class="bx bxs-lock-alt"></i></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success col-md-12 mt-3"><a href="{{ route('logout') }}"> Keluar </a></button>
                    <button type="button" class="btn btn-outline-success col-md-12 mt-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8ae831de67.js" crossorigin="anonymous"></script>
