@extends('layouts.guest')

@section('meta_tags')
    <meta name="description" content="Tetőfedőink,ácsaink egyedülálló szolgáltatást nyújtanak tetőjavítás terén. Az esztétika fontos, és a biztonság, fedettség még jobban. Zsindelyezést, beletett munka, teljes körű garancia vállalás.">
    <meta name="keywords" content="tetőfedés, reparálás, zsindelyezés, szépség, esztétika, védelem, ácsaink, javítottak, cserepeslemez">
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
                                <h1 class="title">TETŐFEDÉS</h1>
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
                data-src="{{asset('guest/images/kep-8.PNG')}}" alt="tetőfedés">

                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-7 col-sm-12 pl-0 res-991-pl-15">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>15 ÉVES TAPASZTALAT</h5>
                                <h2 class="title">ÚJ TETŐ KÉSZÍTÉS, TETŐJAVÍTÁS</h2>
                            </div>
                        </div><!-- section title end -->
                        <!-- acadion -->
                        <div class="accordion mt-40">
                            <!-- toggle -->
                            <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                                <div>

								Vállaljuk családi házak tetőfedését, régi tetők felújítását kerámia vagy beton cseréppel, cserepeslemezzel, trapézlemezzel, korcolt fedéssel, Bitumenes fedéssel is!<br><br>

								Ha még nem döntött a tető fedésének típusáról, bízza ránk! Szakembereink segítenek Önnek kiválasztani az időjárási viszonyok, háza és az Ön számára legideálisabb típust, anyagot, színt, formát!
								<br><br>
								Munkáinkra teljes körű garanciát vállalunk, mert kiváló szakemberekkel dolgozunk és minőségi alapanyagokat használunk!
								<br><br>


								Kérjen ingyenes árajánlatot, kollégánk várja hívását: <strong class="bloom"><a style="color:blue;"href="tel:{{env('ADMIN_PHONE')}}">{{env('ADMIN_PHONE')}}</a></strong> 


								
                                </div>
                            </div><!-- toggle end -->




                        </div><!-- acadion end-->
                   
                    </div>
				
                </div><!-- row end-->
            </div>
        </section>



        <section class="ttm-row about3-section ttm-bgcolor-grey push-top-first section-services-covering" style="margin-top:-100px" id="services-container" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">

                        <h4>Cseréplemezes tetőfedés</h4>

                        A cseréplemezes tetőfedés ideális megoldás azoknak, akik költséghatékony tetőfedési megoldást keresnek. A cseréplemezes tetőfedés legnagyobb előnye  az ára, mely töredéke bármilyen más tetőfedő anyagnak. Ideális választás olyan helyzetekben, amikor a tetőt nem szabad terhelni. Például ráépítésnél, alacsony hajlásnál, vagy íves szerkezetnél. Ráépíthető a régi tetőfedő anyagra is. Ideális választás azoknak akiknek fontos az ár. <br>






                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-01.jpg')}}" alt="tetofedes">


                    </div>   
                </div><!-- row end-->
	      
				<br>
				   <div class="row">
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-04.jpg')}}" alt="tetofedes">
                    </div>  
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Kerámia- és betoncserép tetőfedés</h4>

                            A kerámia vagy beton tetőcserép a legnépszerűbb tetőfedési megoldás. Csak természetes anyagokat tartalmaz, hosszú élettartamú, megbízható megoldás, ha a klasszikus megoldások híve. Vállaljuk új cserepestetők építését, ácsmunkával, vagy tetőfelújítást illetve kisebb javításokat is <br>

                            @include('components.guest.contact_by_phone')
                        </div><!-- single-img end -->
                    </div> 
                </div><!-- row end-->
           
				<br>
				     <div class="row">
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Trapézlemezes tetőfedés</h4>

                            Ideális választás ipari épületek, tárolók és garázsok fedésére.  A 0,5 mm anyagvastagságú horganyzott vagy színes trapézlemez ideális tetőburkoló anyag, fa vagy acél tartógerendákra erősítve. A lemezek előre méretre vágatjuk így a felrakása gyors valamint zaj - és pormentes. Kevés karbantartást igényel, és jól bírja a zord időjárási körülményeket. <br>


                        </div><!-- single-img end -->
                    </div> 
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-03.jpg')}}" alt="tetofedes">
                    </div> 
				<br>					
                </div><!-- row end-->
				        <div class="row">
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-02.jpg')}}" alt="tetofedes">
                    </div>  
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Korcolt lemezes tetőfedés</h4>

                            Válassza az állókorcos tetőfedést, ha modern megjelenést szeretne. Az állókorcos tetőfedés kiváló megoldás raktárépületek tetőfedésére, illetve olyan tetőknél, ahol a meredekség nagyobb mint 20 százalék. Kevés karbantartást igényel, tisztítása egyszerű, ám emellett jól bírja a zord időjárást is. Kiválóan alkalmas nagy területek fedésére, burkolására. Cégünk több mint 15 év szakmai tapasztalattal rendelkezik az állókorcos tetőfedésben. <br>

                            @include('components.guest.contact_by_phone')
                        </div><!-- single-img end -->
                    </div> 
                </div><!-- row end-->
				<br>
                <div class="row">
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Bitumenes tetőfedés</h4>

                            Az autóbeálló, a kerti ház vagy az előtető befedéséhez, különösen a kisebb tetők, pl. szerszámtárolók vagy álló tetőablakok, zárt erkélyek vagy szélfogók esetén jó megoldás a bitumenes zsindely. Teljes tetőfedést ritkán végeznek bitumenes zsindellyel, de ez sem lehetetlen. A bitumenes zsindely felrakása számunkra nem okoz nehézséget.  <br>

                        </div><!-- single-img end -->
                    </div> 
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-05.jpg')}}" alt="tetofedes">
                    </div>  
                </div><!-- row end-->

				<br>
                <div class="row">
                    <div class="col-lg-3 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/regi-burcsa-06.jpg')}}" alt="tetofedes">
                    </div>  
                    <div class="col-lg-9 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Tetőbeázás megszüntetése</h4>

                            
                            Abban az esetben, ha a tetőnk sérült, vagy hiányos, úgy könnyen előfordulhat, hogy beázik a födém, esetlegesen a falak is, ami már visszafordíthatatlan állapot romláshoz vezet. A stabil falazat, a szilárd alapzat mellett minden lakóépület egyik legmeghatározóbb része a tető. A a régi tetőszerkezeteket, ezért különösen fontos ellenőriztetni, átvizsgáltatni azt szakemberrel, hiszen a kisebb hibák időben történő kijavításával könnyedén megelőzhetőek a nagyobb károk. 
                            <br>

                            @include('components.guest.contact_by_phone')
                        </div><!-- single-img end -->
                    </div> 
                </div><!-- row end-->






            </div>
        </section>






    <section>

        @include('guest.about.partials.customers_said')
 
    </section>


	@include('guest/contact/partials/form')





@endsection