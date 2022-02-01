






        <section class="ttm-row pb-160 res-991-pb-100 clearfix push-top-first " id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>LÉPJEN VELÜNK KAPCSOLATBA!</h5>
                                <h2 class="title">KÉRJEN INGYENES ÁRAJÁNLATOT</h2>
                            </div>
                            <div class="title-desc">Küldje el üzenetét, és munkatársaink hamarosan a segítségére sietnek.</div>
                        </div><!-- section title end -->
                        <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="{{route('contact.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input name="name" type="text" value="" placeholder="*Név" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="phone" type="text" value="" placeholder="*Telefon" required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="email" type="email" value="" placeholder="*Email" required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <label>
                                <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" rows="3" cols="40" placeholder="*Üzenet" required="required"></textarea></span>
                            </label>
                            <input type="submit" id="submit" class="ttm-btn ttm-btn-size-lg ttm-btn-shape-square ttm-btn-style-fill ttm-icon-btn-right ttm-btn-bgcolor-skincolor" value="ÜZENET ELKÜLDÉSE">
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="ttm-rounded-shadow-box pt-40 pr-50 pb-55 pl-50 box-shadow2 res-767-mt-40 clearfix">
                            <h4>Elérhetőségeink</h4>
                            <ul class="ttm_contact_widget_wrapper">
                                <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>Budapest és Körnéyke</li>
                                <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>{{App\User::ADMIN_PHONE}}</li>
                                <li><i class="ttm-textcolor-skincolor ti ti-comment"></i><a href="mailto:{{App\User::ADMIN_EMAIL}}">{{App\User::ADMIN_EMAIL}}</a></li>
                                <li><i class="ttm-textcolor-skincolor ti ti-world"></i><a href="{{env('APP_URL')}}">http://tetofedo-badogos.eu/</a></li>
                            </ul>


                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>


