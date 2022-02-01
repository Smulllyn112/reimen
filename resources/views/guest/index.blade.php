@extends('layouts.guest')

@section('meta_tags')
    <meta name="description" content="Tetőfedőink,ácsaink egyedülálló szolgáltatást nyújtanak tetőfedés, zsindelyezés, tetőcsere,bádogozás munkákban. Ünnepnapokon is, kedvező árak mellett segítünk,szervizünk egyedülálló, kedvező árú.">
    <meta name="keywords" content="tetőfedés, reparálás, bádogozás, tetőjavítás, országszerte, kedvező áron,egyedülálló,zsindely,cserép">
@endsection

@section('content')




        <!-- about-section -->
        <section class="ttm-row break-991-colum about3-section img-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper text-left mb-35">
                            <img class="img-fluid lazy" src="{{asset('guest/images/lazy1_2.PNG')}}" data-src="{{asset('guest/template/images/single-img-twel.jpg')}}" alt="lakásfelújítás">
                        </div>
                        <div class="about-overlay-shape text-center">
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6 max-content mt_214 ml-287 res-991-ml-0">
                                    <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor sapcing-7 ttm-textcolor-white">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <h2>15</h2>
                                            <h5>év<br>szakmai háttér</h5>
                                        </div>
                                    </div><!-- ttm_single_image-wrapper end -->
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-5">
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>Profi tetőfedő bádogos munkára van szüksége?</h5>
                                    <h2 class="title">Tetőfedés, Ács munkák</h2>
                                </div>
                                <div class="title-desc">
                                    Cégünk több mint 15 éves szakmai tapasztalattal rendelkezik a tetőjavításban és tető építésben. Munkálataink során <strong class="bloom">figyelünk ügyfeleink kéréseire</strong> és azokat szem előtt tartva törekszünk a tökéletes kivitelezésre!</strong>. <br> <br>


                                    A szakembereink által készített bádogos munkák, tetők, illetve felújított lakások érvről évre
                                    <strong class="bloom">elnyerik vevőink bizalmát.</strong>. Mi korrekt áron, <strong class="bloom">mellébeszélés nélkül</strong> vállaljuk, hogy segítségére sietünk.<br> <br>

                                    Munkásaink keze nyomán az elkészített tetők mindegyike tökéletes<strong class="bloom"> vízzárásnak, hang-illetve hőszigetelésnek örvend</strong>, ebből adódóan munkánkra teljes körű <strong class="bloom">garanciát</strong> vállalunk. <br> <br>
                                    


                                    Hívjon minket bizalommal, akár hétvégén is! <strong class="bloom"><a style="color:blue;"href="tel:{{env('ADMIN_PHONE')}}">{{env('ADMIN_PHONE')}}</a></strong> 
										
            
                              

                                </div>
                            </div><!-- section title end -->
                            <div class="row mb-40">
                                <div class="col-lg-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                <i class="flaticon-level"></i>
                                            </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Korszerű technológia</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                <i class="flaticon-helmet"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Képzett munkások</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                <i class="flaticon-plumber"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Ingyenes kiszállás</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                                <i class="flaticon-wall"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Garancia vállalás</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>


                    </div><!-- row end-->

                </div>
            </div>
        </section>
        <!-- about-section end -->

        <section class="ttm-row services2-section pb-110 clearfix" id="index-services" style="margin-top:-120px;">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h5>Válasszon minket</h5>
                                <h2 class="title">Szolgáltatásaink</h2>
                            </div>
                            <div class="title-desc">Előfodulhat, hogy éppen egy ügyes ácsra, bádogosra, tetőmunkásra lenne szüksége? Éppen jó helyen jár!</div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row mt-10">
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazy" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
            
                            data-src="{{asset('guest/images/badogozas-3.jpg')}}" alt="bádogozás"
                                >
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{route('badoging.index')}}">BÁDOGOZÁS</a></h5>
                                </div>
                                <div class="featured-desc">
                                    Több éves szakmai tapasztalatunk van akár <strong>egyedi, különleges formájú, méretű</strong> , illetve hosszúságú ereszcsatornák javításában és szerelésében. <br>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-10" href="{{route('badoging.index')}}">TOVÁBB OLVASOM<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazy" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
            
                            data-src="{{asset('guest/images/tetojavitas-11.jpg')}}" alt="bádogozás"
                                >
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{route('roof-reparing.index')}}">SZIGETELÉS</a></h5>
                                </div>
                                <div class="featured-desc">
                                 Ha Önnél vízesedés van, vagy épp befúj a szél, a legjobb helyen jár, mi megoldjuk a problémáját! Munkáinkat határidőre átadjuk, keressen minket bizalommal!
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-10" href="{{route('roof-reparing.index')}}">TOVÁBB OLVASOM<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid lazy" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
            
                            data-src="{{asset('guest/images/tetojavitas-14.jpg')}}" alt="bádogozás"
                                >
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{route('roof-covering.index')}}">TETŐFEDÉS</a></h5>
                                </div>
                                <div class="featured-desc">
                                    Vállaljuk családi házak tetőfedését, régi tetők felújítását kerámia vagy beton cseréppel, cserepeslemezzel, trapézlemezzel, korcolt fedéssel, Bitumenes fedéssel is!
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-10"  href="{{route('roof-covering.index')}}">TOVÁBB OLVASOM<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    
                </div><!-- row end -->
            </div>
        </section>









        <section class="ttm-row portfolio-section bg-img2 clearfix" id="about-gallery" style="margin-top:-185px;">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-tabs">
                            <!-- section-title -->
                            <div class="section-title width-36">
                                <div class="title-header">
                                    <h5>LEGUTÓBBU  MUNKÁINK</h5>
                                    <h2 class="title">KÉPGALÉRIA</h2>
                                </div>
                            </div><!-- section-title end -->
                            <ul class="tabs text-right width-64 mt-35 res-1199-mt-0 res-1199-mb-20">
                                <li class="tab active"><a href="#"> Munkáink általában </a></li>
                                <li class="tab"><a href="#">Bádogozás</a></li>
                                <li class="tab"><a href="#">Tetőfedés</a></li>
                                <li class="tab"><a href="#">Tetőjavítás</a></li>
                            </ul><!-- flat-tab end -->
                            <div class="content-tab width-100">
                                <!-- content-inner -->
                                <div class="content-inner active">
                                    <div class="row multi-columns-row ttm-boxes-spacing-10px">


                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/badogozas-1.jpg')}}" alt="badogozas"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                   
                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/badogozas-2.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/badogozas-3.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>



                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-5.jpg')}}" alt="badogozas"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                   
                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-6.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetofedes-3.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-3.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-7.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetojavitas-13.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>


                                    </div><!-- row end -->
                                </div>
                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/badogozas-1.jpg')}}" alt="badogozas"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                   
                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/badogozas-2.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/badogozas-3.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-5.jpg')}}" alt="badogozas"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                   
                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-6.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetofedes-3.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-3.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/kep-7.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetojavitas-2.jpg')}}" alt="badogozas"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                   
                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetojavitas-4.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetojavitas-11.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetojavitas-12.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('guest/images/tetojavitas-13.jpg')}}" alt="tetofelujitas,badogozas"></a>
                                                </div><!-- featured-thumbnail end-->

                                            </div><!-- featured-imagebox -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>

        @include('guest/contact/partials/form')


@endsection