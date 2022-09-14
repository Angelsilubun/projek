@extends('Layouts.dashboard_vendor')
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="text-end col-lg-8" style="font-size: 30px">
                <i class="bi bi-bell"  id="liveToastBtn"></i>
            </div>
            <!-- Search -->
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 ">
                <div class="card-body">
                    <div class="numbers">1.504</div>
                    <div class="cardName">Suka</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="heart"></ion-icon>
                </div>
               
            </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">1.504</div>
                    <div class="cardName">Kunjungan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="eye"></ion-icon>
                </div>
            </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="" style="color:rgb(255, 185, 93); font-size:20px"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <div class="cardName">Penilaian (4.8/5)</div>
                    </div>
    
                </div>
            <a href="/vendor/keuangan/pemasukan">
                <div class="card border-0">
                    <div class="card-body">
                    <div class="numbers">$28.500.865</div>
                    <div class="cardName">Pendapatan</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <ion-icon name="card"></ion-icon>
                    </div>
                 </div>
            </a>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">20 <span class="badge bg-danger mt-2 mb-2" style="font-size: 10px">New</span></div>
                    <div class="cardName">Pesan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="chatbox-ellipses" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"></ion-icon>
                </div>
            </div>
        </div>

        <!-- data list -->
        <div class="details mt-3">
            <div class="recentOrders w-auto">
                <div class="cardHeader">
                    <h2>Recent Order</h2>
                    <a href="#" >View All</a>
                </div>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td class="text-center">NAMA</td>
                            <td class="text-center">KATEGORI PENITIPAN</td>
                            <td class="text-center">HARGA</td>
                            <td class="text-start">PEMBAYARAN</td>
                            <td class="text-start">STATUS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Star Refigerator</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 1.436.000</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-danger col-md-12" style="font-size: 13px ">Return</span></td>
                        </tr>
                        <tr>
                            <td>iPhone 13 pro</td>
                            <td class="text-center">Barang</td>
                            <td class="text-start">IDR 21.783.999</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-success col-md-12" style="font-size: 13px ">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Quick Traktor</td>
                            <td class="text-center">Bangunan</td>
                            <td class="text-start">IDR 7.875.987</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-warning col-md-12" style="font-size: 13px ">Pending</span></td>
                        </tr>
                        <tr>
                            <td>RX King</td>
                            <td class="text-center">Bangunan</td>
                            <td class="text-start">IDR 15.975.574</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-info col-md-12" style="font-size: 12px">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Yamaha Jupiter</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 13.757.452</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-success col-md-12" style="font-size: 13px">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Star Refigerator</td>
                            <td class="text-center">Bangunan</td>
                            <td class="text-start">IDR 1.436.000</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-danger col-md-12" style="font-size: 13px">Return</span></td>
                        </tr>
                        <tr>
                            <td>iPhone 13 pro</td>
                            <td class="text-center">Barang</td>
                            <td class="text-start">IDR 21.783.999</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-danger col-md-12" style="fnt-size: 13px">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Quick Traktor</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 7.875.987</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-warning col-md-12" style="font-size: 13px">Pending</span></td>
                        </tr>
                        <tr>
                            <td>RX King</td>
                            <td class="text-center">Barang</td>
                            <td class="text-start">IDR 15.975.574</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-info col-md-12" style="font-size: 13px">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Yamaha Jupiter</td>
                            <td class="text-center">Kendaraan</td>
                            <td class="text-start">IDR 13.757.452</td>
                            <td>Paid</td>
                            <td class="text-start"><span class="btn btn-success col-md-12" style="font-size: 13px">Delivered</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- New Customer -->
            <div class="recentCustomer">
                <div class="cardHeader">
                    <h2>Recent Customer</h2>
                </div>
                <table>
                    @for ($i = 0; $i < 8; $i++) <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ asset('user.jpg') }}" alt=""></div>
                        </td>
                        <td>
                            <h4>Selena<br><span>Italy</h4>
                        </td>
                        </tr>
                        @endfor
                </table>
            </div>
        </div>
    </div>
    </div>



{{-- collapse chat --}}
     <div class="collapse multi-collapse" id="multiCollapseExample1"  style="min-height: 120px; padding-left:50%; padding-top:20px">
      <div class="card card-body" style="width: 600px;">
            <div class="row">
                <div class="col-md-8">
                <h3 class="">Pesan masuk (2)</h3>
                </div>
                <div class="col-md-4 text-end ">
                <a href="/vendor/dashboard">
                  <i class="bi bi-x-lg"></i>
                </a>
                </div>
                </div>
              
                  <div class="messaging">
                        <div class="inbox_msg">
                          <div class="inbox_people">
                            <div class="headind_srch">
                              <div class="recent_heading">
                                <h4>Recent</h4>
                              </div>
                              <div class="srch_bar">
                                <div class="stylish-input-group">
                                  <input type="text" class="search-bar"  placeholder="Search" >
                                  <span class="input-group-addon">
                                  <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                  </span> </div>
                              </div>
                            </div>
                            <div class="inbox_chat">
                              <div class="chat_list active_chat">
                                <div class="chat_people">
                                  <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                  <div class="chat_ib">
                                    <h5>Rebbeca Howard (3)</h5>
                                    <p>
                                    hellooooo!!
                                    </p>
                                    <span class="time_date text-muted text-end" style="font-size: 10px" >5 mei 2022</span>
                                  </div>
                                </div>
                              </div>
                              <div class="chat_list">
                                <div class="chat_people">
                                  <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                  <div class="chat_ib">
                                    <h5>Rebbeca Howard (2)</h5>
                                    <p>which is a new approach to have all solutions 
                                      astrology under one roof.</p>
                                      <span class="time_date text-muted text-end" style="font-size: 10px" >5 mei 2022</span>
                                  </div>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                          <div class="mesgs">
                            <div class="msg_history">
                              <div class="incoming_msg">
                                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="received_msg">
                                  <div class="received_withd_msg">
                                    <p>HELLO!!
                                      Terimakasih sudah mengunjungi kami
                                    </p>
                                    <span class="time_date"> 11:01 WIB   |  5 mei 2022</span></div>
                                </div>
                              </div>
                              <div class="outgoing_msg">
                                <div class="sent_msg">
                                  <p>Jasa penitipan apa saja yang ada di layanan anda?</p>
                                  <span class="time_date"> 11:01 WIB   |   9 juni 2022</span> </div>
                              </div>
                            
                              <div class="outgoing_msg">
                                <div class="sent_msg">
                                  <p>Apakah saya dapat menitipkan barang?</p>
                                  <span class="time_date"> 11:01 WIB |   Hari ini</span> </div>
                              </div>
                             
                            </div>
                            <div class="type_msg">
                              <div class="input_msg_write">
                                <input type="text" class="write_msg" placeholder="Type a message" />
                                <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div></div>
              </div>
            </div>
          </div>

{{-- notifikasi --}}
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <div>
            
        </div>

      </div>
    </div>
  </div>

{{-- 
<div class="collapse col-sm-4" style="padding-left:10px" id="collapseExample">
    <div class="card card-body">
        <div class="card-header row">
            <div class="col-md-11">
                 <p class="mt-2" style="font-size: 20px">Notifikasi baru </p>
            </div>
            <div class="col-md-1">
                <i class="bi bi-x text-end" style="font-size: 2rem"></i>
            </div>
        </div>


    <div class="row ">
        <div class=" col-md-12 rounded-top card mt-1 ">
            <div class="row mt-2">
                    <div class="col-md-2 image">
                        <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                    </div>
                    <div class="col-md-8">
                        <H6 data-bs-toggle="collapse" >Ada Pesanan Baru Masukk Lohhh!!</H6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-md-2 text-end">
                        <span class="float-right time text-dark">12:10</span><br>
                    </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class=" col-md-12 rounded-top card mt-1 ">
            <div class="row mt-2">
                    <div class="col-md-2 image">
                        <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                    </div>
                    <div class="col-md-8">
                        <H6 data-bs-toggle="collapse" >Ada Pesanan Baru Masukk Lohhh!!</H6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-md-2 text-end">
                        <span class="float-right time text-dark">12:10</span><br>
                    </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class=" col-md-12 rounded-top card mt-1 ">
            <div class="row mt-2">
                    <div class="col-md-2 image">
                        <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                    </div>
                    <div class="col-md-8">
                        <H6 data-bs-toggle="collapse" >Ada Pesanan Baru Masukk Lohhh!!</H6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        
                    </div>
                    <div class="col-md-2 text-end">
                        <span class="float-right time text-dark">12:10</span><br>
                    </div>
            </div>
        </div>
    </div>
    </div>
  </div> --}}
</section>
@endsection
