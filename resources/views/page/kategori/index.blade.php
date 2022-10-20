@extends('layout.user')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<div class="product-area pt-50 ">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="section-title">
                  <h3>
                     Kategori
                  </h3>
              </div>
          </div>
      </div>
      <hr>

  </div>
  <div class="container pr-0 pl-0">
      <div class="custom-row ">
          <div class="product-active pt-30">
              <div class="col-xl-3 col-md-3">
                  <div class="product-wrapper">
                      <div class="product-img ">
                        <a href="/excavator">
                          <img src="berkas/excavator.jpg" alt="product">
                        </a>
                      </div>
                      <div class="flip-box">
                          <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                              <span>Alat Berat</span>
                              <h6><a href="shop-detalis-page.html">Excavator</a></h6>
                          </div>
                          <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                              <div class="product-info">
                               <span>Alat Berat</span>
                              <h6><a href="shop-detalis-page.html">Excavator</a></h6>
                            
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-3">
                <div class="product-wrapper">
                    <div class="product-img ">
                        <a href="/crane">
                        <img src="berkas/crane.jpg" alt="product">
                        </a>
                    </div>
                    <div class="flip-box">
                        <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                            <span>Alat Berat</span>
                            <h6><a href="shop-detalis-page.html">Crane</a></h6>
                        </div>
                        <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                            <div class="product-info">
                             <span>Alat Berat</span>
                            <h6><a href="shop-detalis-page.html">Crane</a></h6>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
              <div class="product-wrapper">
                  <div class="product-img ">
                    <a href="/bulldozer">
                      <img src="berkas/bulldozer.jpg" alt="product">
                    </a>
                  </div>
                  <div class="flip-box">
                      <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                          <span>Alat Berat</span>
                          <h6><a href="shop-detalis-page.html">Bulldozer</a></h6>
                      </div>
                      <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                          <div class="product-info">
                           <span>Alat Berat</span>
                          <h6><a href="shop-detalis-page.html">Bulldozer</a></h6>
                        
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-3">
            <div class="product-wrapper">
                <div class="product-img ">
                    <a href="/excavator">
                    <img src="berkas/excavator.jpg" alt="product">
                    </a>
                </div>
                <div class="flip-box">
                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                        <span>Alat Berat</span>
                        <h6><a href="shop-detalis-page.html">Excavator</a></h6>
                    </div>
                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                        <div class="product-info">
                         <span>Alat Berat</span>
                        <h6><a href="shop-detalis-page.html">Excavator</a></h6>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>
      </div>
  </div>
</div>

    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    @endsection