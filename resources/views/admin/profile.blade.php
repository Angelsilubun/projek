@extends('Layoutsadmin.adminlayout')
@section('content')
    <section class="home-section">

        <div class="main">
            {{-- @include('admin.profile.partials') --}}
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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 ms-4">
                        <p class="mb-0">OVERVIEW</p>
                        <h3>Admin Profile</h3>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        
                        @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-md-15">
                                @if($user->photo)
                                    <img src="{{ asset('storage/photos/'.$user->photo) }}" class="img-thumbnail rounded mx-auto d-block">
                                @else
                                    <img src="{{ asset('assets/img/profile.png') }}" class="img-thumbnail rounded mx-auto d-block">
                                @endif
                                
                            </div>
                            <div class="col-md-8" >
                                <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                                    @method('PATCH') 
                                    {{-- PERBEDAAN
                                        PUT digunakan untuk melakukan update resource ke sebuah server.
                                            dengan PUT method bisa mengirimkan secara keseluruhan data atau replace total
                                        PATCH digunakan untuk melakukan update resource ke sebuah server.
                                            melakukan update secara partial atau hanya separuh data yang di inginkan untuk diupdate
                                    --}}
                                    @csrf
                                    {{-- <div class="card-header card-header-primary">
                                        <h4 class="card-title">Edit Profile</h4>
                                        <p class="card-category">User information</p>
                                    </div> --}}
                                    <div class="col mb-9">
                                        <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }}</label>

                                        <div class="col mb-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col mb-7">
                                        <label for="email" class="col-sm-2 col-form-label">{{ __('Email Address') }}</label>

                                        <div class="col mb-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div> 
                                    <br>
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title">Change password</h4>
                                    </div>
                                    <div class="col mb-7">
                                        <label for="old_password" class="col-sm-2 col-form-label">{{ __('Old Password') }}</label>

                                        <div class="col mb-6">
                                            <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">

                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col mb-7">
                                        <label for="password" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>

                                        <div class="col mb-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col mb-7">
                                        <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>

                                        <div class="col mb-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="col mb-7">
                                        <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Change Profile Photo') }}</label>

                                        <div class="col mb-6">
                                            <input id="photo" type="file" class="form-control" name="photo">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update Profile') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
{{-- <h4 class="card-title">Edit Profile</h4>
<p class="card-category">User information</p>
</div>
<div class="card-body ">
<div class="row">
<label class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="Admin Admin" required="true" aria-required="true" />
</div>
</div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="email" id="input-email" type="email" placeholder="Email" value="admin@material.com" required />
</div>
</div>
</div>
</div>
<div class="card-footer ml-auto mr-auto">
<button type="submit" class="btn btn-primary">Save</button>
</div>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<form method="post" action="https://material-dashboard-laravel.creative-tim.com/profile/password" class="form-horizontal">
<input type="hidden" name="_token" value="x4YmnvSdIX72JJTNax1WtSxwnyXNPRmN8JcY8sOQ"> <input type="hidden" name="_method" value="put">
<div class="card ">
<div class="card-header card-header-primary">
<h4 class="card-title">Change password</h4>
<p class="card-category">Password</p>
</div>
<div class="card-body ">
<div class="row">
<label class="col-sm-2 col-form-label" for="input-current-password">Current Password</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" input type="password" name="old_password" id="input-current-password" placeholder="Current Password" value="" required />
</div>
</div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label" for="input-password">New Password</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="password" id="input-password" type="password" placeholder="New Password" value="" required />
</div>
</div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label" for="input-password-confirmation">Confirm New Password</label>
<div class="col-sm-7">
<div class="form-group">
<input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Confirm New Password" value="" required />
</div>
</div>
</div>
</div>
<div class="card-footer ml-auto mr-auto">
<button type="submit" class="btn btn-primary">Change password</button>
</div>
</div>  --}}
    </section>
@endsection
