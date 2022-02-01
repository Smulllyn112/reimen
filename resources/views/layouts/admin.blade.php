
<!DOCTYPE html>  
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EMERICUS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.cs')}}s">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('admin/admin_template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>







<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Felhasználó</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Notifications: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('admin/admin_template/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>

          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/admin_template/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->




      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">a
        <li class="header">Menüsor</li>

       <li><a>
                        
        
       </a></li>        

      @if(Auth()->User()->isAdmin())
        <li class="{{\Request::route()->getName() == 'gallery.index' ? 'active' : ''}}"><a  href="{{route('gallery.index')}}"> <span>Galériák</span></a></li> 
        <li class="{{\Request::route()->getName() == 'gallery-image.create' ? 'active' : ''}}"><a  href="{{route('gallery-image.create')}}"> <span>Galéria képek</span></a></li> 
        <li class="{{\Request::route()->getName() == 'contact-edit.index' ? 'active' : ''}}"><a  href="{{route('contact-edit.index')}}"><span>Kontakt statikus része</span></a></li>  
        <li class="{{\Request::route()->getName() == 'about.index' ? 'active' : ''}}"><a  href="{{route('about.index')}}"> <span>Rólunk statikus része</span></a></li> 
        <li class="{{\Request::route()->getName() == 'document-category.index' ? 'active' : ''}}"><a  href="{{route('document-category.index')}}"></i> <span>Dokumentum Kategóriák</span></a></li> 
        <li class="{{\Request::route()->getName() == 'document.index' ? 'active' : ''}}"><a  href="{{route('document.index')}}"> <span>Dokumentumok</span></a></li> 
      @endif

      @if(Auth()->User()->notRegularUser())
        <li class="{{\Request::route()->getName() == 'department-section.index' ? 'active' : ''}}"><a  href="{{route('department-section.index')}}"> <span>Szakosztályok</span></a></li>  
        
      @endif
      @if(Auth()->User()->isAdmin())
        <li class="{{\Request::route()->getName() == 'department-menu.create' ? 'active' : ''}}"><a  href="{{route('department-menu.create')}}"> <span>Szakosztály Edzések</span></a></li> 
        <li class="{{\Request::route()->getName() == 'trainer.create' ? 'active' : ''}}"><a  href="{{route('trainer.create')}}"> <span>Edzőink</span></a></li>
        <li class="{{\Request::route()->getName() == 'article.create' ? 'active' : ''}}"><a  href="{{route('article.create')}}"><span>Hírek</span></a></li>
        <li class="{{\Request::route()->getName() == 'newsletter.index' ? 'active' : ''}}"><a  href="{{route('newsletter.index')}}"> <span>Hírlevélre feliratkozottak</span></a></li>
        <li class="{{\Request::route()->getName() == 'recruit.index' ? 'active' : ''}}"><a  href="{{route('recruit.index')}}"> <span>Toborzás</span></a></li>
        <li class="{{\Request::route()->getName() == 'user.index' ? 'active' : ''}}"><a  href="{{route('user.index')}}"> <span>Felhasználói Jogosultságok</span></a></li>
             
      @endif

        <li class=""><a  href="/"> <span>Oldalaink</span></a></li>  
        <li class=""><a  href="/logout"><i class="fa  fa-arrow-left"></i><i></i> <span>Kilépés</span></a></li>   
         




      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

<!--
        <div class='alert alert-success alert-dismissable'>
            <button type="button" class="close" data-dismiss='alert'>
                <span>&times;</span>
            </button>
            <h3>
              Üdvözlünk az adatkezelő-felületen!
            </h3>
        </div>           

        <div class="alert alert-info">
          <h5>
            Válassz menüpontot,és a megfelelő adatokat módosíthatod.
          </h5>
        </div>   
-->



        <div class="spacer">    
        </div>
        <style type="text/css">
        .spacer{
          height:75px;
        }
        </style>

                  
      @if(Session::has('msg'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" style="width:4%;">&times;</a>
            {{Session::get('msg')}}
          </div>
      @endif


       @yield('content')

    </section>

   
      
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>














<!-- jQuery 3 -->
<script src="{{asset('admin/admin_template/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin/admin_template/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('admin/admin_template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('admin/admin_template/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/admin_template/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin/admin_template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('admin/admin_template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/admin_template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin/admin_template/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin/admin_template/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/admin_template/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('admin/admin_template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('admin/admin_template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('admin/admin_template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('admin/admin_template/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/admin_template/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/admin_template/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/admin_template/dist/js/demo.js')}}"></script>



<!--OWN JS -->
<!-- when asking forms -->
<script src="{{asset('admin/js/own/askforms.js') }}"></script> 


<!-- CK editor -->
<script src="{{asset('//cdn.ckeditor.com/4.6.2/standard/ckeditor.js') }}"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '{{asset("/laravel-filemanager?type=Images") }}',                
    filebrowserImageUploadUrl: '{{asset("/laravel-filemanager/upload?type=Images&_token=") }}',
    filebrowserBrowseUrl: '{{asset("/laravel-filemanager?type=Files") }}',
    filebrowserUploadUrl: '{{asset("/laravel-filemanager/upload?type=Files&_token=") }}'
  };
</script>
<script>
      CKEDITOR.replace('ck-editor1', options);
      CKEDITOR.replace('ck-editor2', options);
      CKEDITOR.replace('ck-editor3', options);
      CKEDITOR.replace('ck-editor4', options);
</script> 


</body>
</html>









