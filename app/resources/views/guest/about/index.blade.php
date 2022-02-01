@extends('layouts.guest')

@section('meta_tags')
    <meta name="description" content="Tetőfedőink,ácsaink egyedülálló szolgáltatást nyújtanak tetőfedés, zsindelyezés, tetőcsere,bádogozás munkákban. 15 éva a szakmában vagyunk, precizitás és megbíthatóság jellemez.Van biztosításunk.">
    <meta name="keywords" content="tetőfedés, reparálás, bádogozás, tetőjavítás, országszerte, kedvező áron,trendek,sokéves,biztosítás">
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
                                <h1 class="title">RÓLUNK</h1>
                            </div><!-- /.page-title-captions -->

                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


        <!--about-section-->
        <section class="ttm-row about4-section ttm-bgcolor-white bg-img16 break-991-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>All-in-one megoldás a problémáidra-egy az egyben!</h5>
                                <h2 class="title">MIÉRT ÉRDEMES MINKET VÁLASZTANI?</h2>
                            </div>
                        </div><!-- section title end -->
                        <p>
                        	A mai piac-árait, illetve kínálatát, minőségét tekintve-sokszor kiszámíthatatlan. Sokszor előfordul, hogy az ember nem azt kapja végül, amire szüksége lett volna, és irreális árakat fizetett olyasmiért, ami valójában nem a megfelelő eredményt nyújtotta. <br> <br>

                        	Mikor valaki kihívja a szakembert a házhoz, általában úgy kezdődik, hogy 20000 FT-tól, és a végén ki tudja, mennyi lesz a végösszeg. <br><br>
                            
                        	Cégünknél nincs <strong class="bloom">semmiféle mellébeszélés</strong>, árainkat a lehető legpontosabban egyeztetjük <strong class="bloom"> előre telefonon </strong> , ezáltal pontos képünk adódik arról, hogy Önnek mire van szüksége, és mi mennyiért tudnánk a munkát vállalni.   
                        </p>

                        <p>Cégünk évek óta vállal aktívan szerepet <strong class="bloom">bádogozás</strong>, <strong class="bloom">tetőfedés</strong>, <strong class="bloom">tetőjavítás</strong> terén.</p>

                        <h5>Mi az oka annak, hogy ügyfeleink éveken keresztül visszajárnak hozzánk, és rendszeresen tőlünk kérnek segítséget?</h5>

                                <ul class="ttm-list clearfix">
                                    <li><i class="ttm-textcolor-skincolor fa fa-check-square"></i>
                                        <span class="ttm-list-li-content"><strong>15 éves</strong> szakmai háttér</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-check-square"></i>
                                        <span class="ttm-list-li-content">
                                        <strong>Precíz </strong>
                                        munkavégzés</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-check-square"></i>
                                        <span class="ttm-list-li-content">Korszerű trendek tartása</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-check-square"></i>
                                        <span class="ttm-list-li-content">Vidéken is jelen vagyunk</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-check-square"></i>
                                        <span class="ttm-list-li-content">Rendelkezünk cég biztosítással</span>
                                    </li>
                                    <li><i class="ttm-textcolor-skincolor fa fa-check-square"></i>
                                        <span class="ttm-list-li-content">Elérhető, rugalmas ügyfélszolgálat</span>
                                    </li>
                                </ul>
                        <!-- row-->

                        <!-- row end-->
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb_95 res-991-mb-0">
                            <img class="img-fluid lazy" 
                            src="{{asset('guest/images/lazy1_2.PNG')}}"
                            style="width:90%"
                            data-src="{{asset('guest/template/images/single-img-thirteen.png')}}" alt="rólunk">

                        </div><!-- ttm_single_image-wrapper end -->
                    </div>







                </div>












            </div>
        </section>
        <!--about-section end-->


    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                
                <div class="row">
                    
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon icon-align-top mb-25">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-carpenter"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>BÁDOGOZÁS</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <a href="{{route('badoging.index')}}" class="button-theme">TOVÁBB OLVASLOM</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon icon-align-top mb-25">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-handyman-tools"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>TETŐFEDÉS</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <a href="{{route('roof-covering.index')}}" class="button-theme">TOVÁBB OLVASLOM</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->

                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon icon-align-top mb-25">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-helmet"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>TETŐJAVÍTÁS</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <a href="{{route('roof-reparing.index')}}" class="button-theme">TOVÁBB OLVASLOM</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box left-icon icon-align-top mb-25">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-electrician-2 ttm-textcolor-skincolor"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>ERESZCSATORNÁZÁS</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <a href="{{route('badoging.index')}}" class="button-theme">TOVÁBB OLVASLOM</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->

                </div>




            </div>

            <div class="col-md-6">
                <img src="{{asset('guest/images/lazy1_2.PNG')}}"

                 data-src="{{asset('guest/images/kep-6.jpg')}}" alt="rólunk" class="about-footer-image lazy">
            </div>
        </div>
    </div>

        <!--desc-only-section-->
        <section class="ttm-row desc-only-section style2 ttm-bgcolor-skincolor clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 text-left">
                        <h4 class="ttm-textcolor-white font-sz-27 font-w-500 mb-0">DÖNTSE EL, HOGY MILYEN SZOLGÁLTATÁSUNKAT IGÉNYLI!</h4>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>
        <!--desc-only-section end-->










@endsection