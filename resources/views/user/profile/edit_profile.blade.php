@extends("layouts.user")
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('partials.profile')
                <div class="col" style="width: 700px">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title fw-bold"><a href="/user/profile/profileuser"><i class="bi bi-arrow-left px-2 "></a></i>Update Profile</h5>
                      @if(session()->has('message'))
                        <div class="text-green-600 mb-4">{{ session('message') }}</div>
                    @endif
                      <hr width="100%" color="#c0c0c0">
                        <form method="#" class="row g-3 fw-bold">
                          <div id="liveAlertPlaceholder"></div>
                          {{-- @method("put") --}}
                          @csrf
                          <div class=" col text-center">
                            <img src="{{ asset('assets/img/team-4.jpg') }}" alt="" class="edit-profile rounded-circle">
                          </div>
                          <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                          </div>
                          <div class="col-md-12">
                              <label for="Name" class="form-label">Nama</label>
                              <input type="text" class="form-control input-text" id="Name" placeholder="name" value={{ old ('name', Auth::user()->name ) }} required>
                              @error('record')

                              @enderror
                          </div>
                          <div class="col-md-6">
                              <label for="inputEmail" class="form-label">Email</label>
                              <input type="email" class="form-control" id="inputEmail" value={{ old ('email', Auth::user()->email) }} required>
                          </div>
                          <div class="col-md-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control input-text" id="username" placeholder="username" value="{{Auth::user()->name}}">
                          </div>
                          <div class="col-md-12">
                            <label for="inputnoTelp" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control input-text" id="inputnoTelp" placeholder="No Telp" value="{{ old ('notelp', Auth::user()->notelp) }}" required>
                          </div>
                          <button type="button" class="btn btn-outline-success" id="liveAlertBtn">Simpan</button>
                        </form>  
                    </div> 
                  </div>
                </div>
        </div>
      </div>
</section>
@endsection

