




<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12 goleft">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              @if(isset($title))
                <h3 class="box-title">{{$title}}</h3>
              @else
                <h3 class="box-title">A megjelenített adatok:</h3>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div >
              <div class="box-body">

              	{{$slot}}

              </div>


              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
          <!-- /.box -->


                <style type="text/css">
                .goleft{
                  position: abolsute;
                  /*left:110px;  */

                }
              </style>