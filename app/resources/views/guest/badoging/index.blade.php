@extends('layouts.guest')

@section('meta_tags')
    <meta name="description" content="A bádogozás segít abban, hogy tetőink ne ázzanak be. Az ereszcsatornával való kapcsolat igen fontos. Ács munkát is vállalunk.">
    <meta name="keywords" content="tetőfedés, reparálás, bádogozás, ereszcsatornák, vízzáró, réteg, kéményhez, falhoz, beázás">
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
                                <h1 class="title">BÁDOGOZÁS</h1>
                            </div><!-- /.page-title-captions -->

                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


		  <section class="ttm-row about3-section push-top-first" style="margin-bottom:100px;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">

 
                <img class="img-fluid image-w-100 lazy mt-4" 
                src="{{asset('guest/images/lazy2_1.PNG')}}"
                data-src="{{asset('guest/images/ereszcsatorna-2.jpg')}}" alt="tetőfedés">

                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-7 col-sm-12 pl-0 res-991-pl-15">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>BÁDOGOZÁS</h5>
                                <h2 class="title">PROFI - GYORS BÁDOGOS MUNKÁ</h2>
                            </div>
                        </div><!-- section title end -->
                        <!-- acadion -->
                        <div class="accordion mt-40">
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                <div>

								 Családi háza felújításakor bármiféle bádogos munkára van igénye profi csapatunk elvégzi Önnek alapanyagtól függetlenül legyen az réz, horganyzott anyag, bádog vagy műanyag.
								<br><br>
								 Akár ereszcsatorna, folyóka, ablakpárkány, lefolyó vagy bármi más elkészítjük aszerint, hogy Ön mit szeretne tökéletes minőségben.
								<br><br>
								Kérjen ingyenes árajánlatot, kollégánk várja hívását: <strong class="bloom"><a style="color:blue;"href="tel:+36703649701">+36 70 364 9701</a></strong> 
								
                                </div>
                            </div><!-- toggle end -->




                        </div><!-- acadion end-->
                   
                    </div>
				
                </div><!-- row end-->
            </div>
        </section>

        <section class="ttm-row about3-section ttm-bgcolor-grey push-top-first section-services-covering" style="margin-top:-100px" id="services-container" >
            <div class="container">,
			
				    <div class="row">
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Bádogos munkák</h4>

                            A bádogos munkák kivitelezése során a következő területeken tudjuk az ön igényeit kiszolgálni: lemezfedések készítése, ablakpárkányok, kémény és falszegélyek, függő és fekvőeresz csatornák, lefolyók, vízgyűjtők, vápák készítése, szerelése, garanciával. <br>

                            <a href="tel:{{App\User::ADMIN_PHONE}}" class="button-theme">Hívjon {{App\User::ADMIN_PHONE}}</a>
                        </div><!-- single-img end -->
                    </div> 
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-09.jpg')}}" alt="regi-burcsa">
                    </div>  
                </div><!-- row end-->
				<br>
				 <div class="row">
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-08.jpg')}}" alt="regi-burcsa">
                    </div>  
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Ereszcsatorna javítása</h4>

                            Az ereszcsatorna javítása pár nap alatt elvégezhető. Javítási munka megkezdése elött kitisztítjuk az ereszcsatornákat, hogy az esetlegesen megbúvó hibák láthatóvá váljanak. Csak ezután kezdjük el a javítási vagy felújítási munkákat. A végeredmény egy megbízhatóan működő csatornarendszer lesz.  <br>

                            <a href="tel:{{App\User::ADMIN_PHONE}}" class="button-theme">Hívjon {{App\User::ADMIN_PHONE}}</a>
                        </div><!-- single-img end -->
                    </div> 
                </div><!-- row end-->
				<br>
                <div class="row">
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">

                        <h4>Ereszcsatorna építése</h4>

                        Cégünk a horganylemezes vagy műanyag csatornák mellett vállal horganyzott acél- és az alumíniumlemez csatornák építését és szerelelését is. A horganyo­zott acéllemezes ereszcsatornákat szegecseléssel illesztjük össze, mely jobb megjelenést és időtálóságot biztosít.  <br>


                        <a href="tel:{{App\User::ADMIN_PHONE}}" class="button-theme">Hívjon {{App\User::ADMIN_PHONE}}</a>

                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-07.jpg')}}" alt="regi-burcsa">


                    </div>   
                </div><!-- row end-->
				<br>
                <div class="row">
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/ereszcsatorna-tisztitas.jpg')}}" alt="regi-burcsa">
                    </div>  
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Ereszcsatorna tisztítása</h4>

                           Amenniyben eldugult az ereszcsatornánk, komoly következményekkel is számolhatunk adott esetben. A <strong class="bloom">dugulásnak sokféle oka </strong> lehet, hívja ki szakemberünket, és megállapítjuk a hiba okát, rövid határidővel! <br>

                            <a href="tel:{{App\User::ADMIN_PHONE}}" class="button-theme">Hívjon {{App\User::ADMIN_PHONE}}</a>
                        </div><!-- single-img end -->
                    </div> 
                </div><!-- row end-->
           <br>
                <div class="row">
				
					 <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Garázsok, kocsibeállók, melléképületek </h4>

                            Az egyedi autóbeállók megrendelőink elképzeléseinek és igényeinek figyelembevételével, saját terveink alapján fa szerkezettel. Az egyéni igényekhez igazodó design-ok számos választási lehetőséget kínálnak. <br>

                            <a href="tel:{{App\User::ADMIN_PHONE}}" class="button-theme">Hívjon {{App\User::ADMIN_PHONE}}</a>
                        </div><!-- single-img end -->
                    </div> 
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-10.jpg')}}" alt="regi-burcsa">
                    </div>  
                   
                </div><!-- row end-->










            </div>
        </section>



    <section>

        @include('guest.about.partials.customers_said')
 
    </section>


	@include('guest/contact/partials/form')





@endsection