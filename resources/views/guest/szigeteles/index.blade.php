@extends('layouts.guest')

@section('meta_tags')
    <meta name="description" content="Tetőfedőink,ácsaink egyedülálló szolgáltatást nyújtanak tetőjavítás terén. A felújítás bekövetkezhet mohás, öreg, napsugárzott, régi, üles tetőn. Ingyenes felmérés">
    <meta name="keywords" content="tetőjavítás, reparálás, megfelelő, karbantartás, beázás,öreg tető,ül,zsindely,cserép">
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
                                <h1 class="title">SZIGETELÉS</h1>
                            </div><!-- /.page-title-captions -->

                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->

    <section class="carrer-pos-section clearfix " id="roof_reparing" style="margin-bottom:250px;">
        <div class="container">

            <div class="row">

                <div class="col-md-6 img-container img-section">

                    <img 
                    class="lazy"
                    src="{{asset('guest/images/lazy3_2.PNG')}}"
                    data-src="{{asset('guest/images/kapott_03.jpg')}}" alt="tetőjavítás">
                </div>

                    <!-- acadion -->
                <div class="col-md-6">
                    <div class="accordion mb-20">
                        <!-- toggle -->
                        <div class="toggle ttm-style-classic ttm-toggle-title-bgcolor-grey">
                           
							 <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>SZIGETELÉS</h5>
                                <h2 class="title">MINDEN AMI SZIGETELÉS</h2>
                            </div>
                        </div><!-- section title end -->
                            
								
							<div class="accordion mt-40">
                                <p class="mb-30">
          
								<strong class="bloom">Ha Önnél vízesedés van, vagy épp befúj a szél, a legjobb helyen jár, mi megoldjuk a problémáját!</strong>
								<br><br>
								Bármilyen szigetelési probláma esetén keressen minket bizalommal!
								Ingyenes felmérésünk során feltárjuk a probléma forrását, és megkeressük az Ön számára a legmegfelelőbb megoldást.
								<br><br>
								<strong class="bloom">Minden munkánkat határidőre átadjuk, melyre teljeskörű garanciát vállalunk!
								Csak jól képzett, tapasztalt szakemberekkel dolgozunk, így Önnek nincs miért aggódnia.</strong>
								<br><br>
								Kérjen ingyenes árajánlatot, kollégánk várja hívását: <strong class="bloom"><a style="color:blue;"href="tel:{{env('ADMIN_PHONE')}}">{{env('ADMIN_PHONE')}}</a></strong> 
                                </p>
                              
                            </div>
                        </div><!-- toggle end -->



                    </div><!-- acadion end-->
                </div>


            </div>
        </div>
    </section>




        <section class="ttm-row about3-section ttm-bgcolor-grey push-top-first section-services-covering" style="margin-top:-100px" id="services-container" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">

                        <h4>TETŐ SZIGETELÉS</h4>

                        A nem megfelelő tetőszigetelés okozhatja a legtöbb hő eltávozását, így jelentősen növelve a fűtési költséget. A profi tetőszigetelés garantáltan megtérül, végeztesse el minél előbb!

                        Bízza ránk új tetője szigetelését, vagy a meglévő tetője utólagos szigetelését!
                         <br>



                        </div><!-- single-img end -->
                    </div>
                    <div class="col-lg-4 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/tetofedes-1.jpg')}}" alt="tetofedes">


                    </div>   
                </div><!-- row end-->

                <div class="row">
                    <div class="col-lg-4 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/bitumen.jpg')}}" alt="tetofedes"
                            style="width:100%;height:90%"
                            >
                    </div>  
                    <div class="col-lg-8 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Bitumenes szigetelés</h4>

                            Új építésnél nagyon fontos a megfelelő bitumenes szigetelés. Amennyiben meglévő szigetelésén hibát tapasztal, mielőbb hívjon minket, mielőtt komolyabb károkat okozna a bejutó víz.

                            Bízza ránk a bitumenes szigetelést!
                             <br>

                            @include('components.guest.contact_by_phone')
                        </div><!-- single-img end -->
                    </div> 
                </div><!-- row end-->

                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Lapostető szigetelés</h4>

                            Új építésnél nagyon fontos a megfelelő bitumenes szigetelés. Amennyiben meglévő szigetelésén hibát tapasztal, mielőbb hívjon minket, mielőtt komolyabb károkat okozna a bejutó víz.

                            Bízza ránk a bitumenes szigetelést!
                            <br>

                            
                        </div><!-- single-img end -->
                    </div> 
                    <div class="col-lg-4 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/laposteto.jpg')}}" alt="tetofedes">
                    </div>  
                </div><!-- row end-->

                <div class="row">
                    <div class="col-lg-4 col-sm-12 pl-0 res-991-pl-15">
                        <img class="img-fluid lazy mb-2" 
                            src="{{asset('guest/images/lazy2_1.PNG')}}"
                            data-src="{{asset('guest/images/garazsbeallo.PNG')}}" alt="tetofedes">
                    </div>  
                    <div class="col-lg-8 col-sm-12">
                        <!-- single-img -->
                        <div class="single-img mb-40 img-section">
                            <h4>Garázsok, kocsibeállók, melléképületek </h4>

                            Az egyedi autóbeállók megrendelőink elképzeléseinek és igényeinek figyelembevételével, saját terveink alapján fa szerkezettel. Az egyéni igényekhez igazodó design-ok számos választási lehetőséget kínálnak. <br>

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