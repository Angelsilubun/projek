@extends('layouts.user')
@section('container')
    <section id="services" class="services section-bg" style="padding-top: 100px;">
        <div class="container mt-4 mb-4">
            <div class="col" style="width: 80%; margin-left:130px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title px-3">FAQ</h5>
                        <hr width="100%" color="#c0c0c0">
                        <div class="card">
                            <div class="card-body">
                                <a href="/user/bantuan/Jawaban1">Apa itu titipsini.com?</a>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/user/bantuan/Jawaban2">Bagaimana cara membayar ?</a>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/user/bantuan/Jawaban3">Bagaimana melihat profil anda ?</a>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/user/bantuan/Jawaban4">Bagaimana cara pesan penitipan ?</a>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <a href="/user/bantuan/Jawaban5">Mengapa saya tidak menerima kode OTP?</a>
                            </div>
                        </div><br>
                        <label for="faq" class="form-label mt-3">Hubungi Kami</label><br>
                        <a class="btn btn-outline-secondary col-md-12 mt-3" href="#" role="button"><i
                                class="bi bi-envelope"></i> Kirim E-mail</a>
                        <a class="btn btn-outline-success col-md-12 mt-3" href="#" role="button"><i
                                class="bi bi-telephone"></i> Panggil</a>
                        <a class="btn btn-outline-success col-md-12 mt-3" href="#" role="button"><i
                                class="bi bi-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
