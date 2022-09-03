@extends("layouts.user")
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('partials.profile')
                <div class="col" style="width: 700px">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/user/profile/profileuser"><i class="bi bi-arrow-left px-2 "></a></i>Profile</h5>
                      @if(session()->has('message'))
                        <div class="text-green-600 mb-4">{{ session('message') }}</div>
                    @endif
                      <hr width="100%" color="#c0c0c0">
                      <form method="post" action="{{ route('profile.update') }}">
                        @method("put")
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" value={{ old ('name', Auth::user()->name ) }} required>
                            </div>
                            @error('record')
                                
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" value={{ old ('email', Auth::user()->email) }} required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No_Telp </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="validationCustom01" value="{{ old ('notelp', Auth::user()->notelp) }}" required>
                            </div>
                        </div>
                        <button>Update</button>
                      </form>  
                    </div> 
                  </div>
                </div>
        </div>
          </div>
    </div>
</section>
@endsection

