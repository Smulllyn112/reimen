@extends('layouts.guest')

@section('meta_tags')
    <meta name="description" content="Tetőfedőink,ácsaink egyedülálló szolgáltatást nyújtanak tetőfedés, zsindelyezés, tetőcsere,bádogozás munkákban. Hívjon bizalommal, 24 ótán belül válaszolunk. Egyezetetés telefonon, vagy emailben.">
    <meta name="keywords" content="tetőfedés, reparálás, hívjon, keressen, országszerte, kedvező áron,24 órán,rugalmas,cserép">
@endsection


@section('content')


        <!-- page-title -->
        <div class="ttm-page-title-row push-top-first top-section">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading">
                                <h1 class="title">KAPCSOLAT</h1>
                            </div><!-- /.page-title-captions -->

                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


	@include('guest/contact/partials/form')



<!--
        <section class="ttm-row services2-section pb-110 clearfix" id="about-gallery">
            <div class="container">

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h5>MUNKÁINK KÖZÜL</h5>
                                <h2 class="title">Képgaléria</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row mt-10">
                    <div class="col-md-4">

                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('guest/images/badogozas-1.jpg')}}" alt="galeria">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('guest/images/badogozas-2.jpg')}}" alt="galeria">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('guest/images/kep-1.jpg')}}" alt="galeria">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('guest/images/kep-7.jpg')}}" alt="galeria">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('guest/images/kep-5.jpg')}}" alt="galeria">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{asset('guest/images/kep-4.jpg')}}" alt="galeria">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->


@endsection