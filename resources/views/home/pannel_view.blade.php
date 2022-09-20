<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$main_settings[0]->site_name}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ url('images/'.$main_settings[0]->logo) }}" rel="icon" />  
  <link rel="shortcut icon" href="{{ url('images/'.$main_settings[0]->logo) }}" rel="apple-touch-icon" />  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('home_assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('home_assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
  <!-- ======= Top Bar ======= -->
 <!--  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{$main_settings[0]->email}}</a>
        <i class="bi bi-phone-fill phone-icon"></i> {{$main_settings[0]->phone}}
      </div>
      <div class="cta d-none d-md-block">
        <a href="{{url('login')}}" class="scrollto">Get Started</a>
      </div>
    </div>
  </div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="/">{{ __('messages.website') }}
        <!-- {{$main_settings[0]->site_name}} --></a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a id="current_result" class="current_result nav-link scrollto" href="#aa">Today Result</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->



    </div>
  </header><!-- End Header -->

      

       @if(Session::has('success'))
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Success!</strong> {{ Session::get('success') }}
          </div>

        @endif

 <section id="" class="d-flex justify-cntent-center align-items-center">
 </section>



 <div class="row">
     <div class="col-sm section-title" data-aos="fade-up">  
      <h4>{{$project_info['title']}}</h4>
      <span>{{$project_info['description']}}</span>
    </div>
  </div>

<div class="container">
    <div class="col-sm">
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr class="table-warning" >
            <th >{{ __('messages.Date') }}</th>
            <th>{{ __('messages.Sun') }}</th>
            <th>{{ __('messages.Mon') }}</th>
            <th>{{ __('messages.Tue') }}</th>
            <th>{{ __('messages.Wed') }}</th>
            <th>{{ __('messages.Thu') }}</th>
            <th>{{ __('messages.Fri') }}</th>
            <th>{{ __('messages.Sat') }}</th>
        </thead>
        <tbody>
          <?php 
             error_reporting(0);
            $years =  array( date("Y",strtotime("-1 year")), date("Y") );
            foreach(range(0, 1) as $i) 
            {
            $year=$years[$i];
            $months =  array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
            $months_int =  array( '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12' );
            $days = array( 31,(strtotime("1 Mar ".$year) - strtotime("1 Feb ".$year)) / ( 24 * 60 * 60 ),31, 30, 31, 30, 31, 31, 30, 31, 30, 31 );
            $wday = array( '', '', '', '', '', '', '' );
            $cal = array(); 
            $total_month=11;
            if($year==date("Y"))
            {
              $total_month=date('n', strtotime('-1 month'));
            }
            foreach(range(0, 11) as $i) 
            {
              $firstday = getdate(strtotime('1 '.$months[$i].' '.$year));
              $fromday = $firstday['wday'];
              $leftday =  7 - ( $fromday + $days[$i] ) % 7;
              $cal[] = array_merge( array_slice($wday, 0, $fromday),
                                    range(1, $days[$i]),
                                    array_slice($wday, 0, 0)
                                  );
            }
        ?>

  <tr>
<?php 
             $m=0;
             foreach(range(0, $total_month) as $i): ?>
    
    <?php
              $z='';
              $l1='';
              $l2='';
              $l3='';
              $r1='';
              $r2='';
              $r3='';
              $totaldays = 0;
              $month_int=$i+1;
              $totaldays = cal_days_in_month(CAL_GREGORIAN, $months_int[$i], $year); 
              $start_date='1';
    // echo "<td class='table-danger' >{$start_date}-{$month_int}-{$year} To {$cal[$i][6]}-{$month_int}-{$year}</td>";
                foreach($cal[$i] as $k => $v) 
                {               

                   $class_colour="";  
                   $current_date=$v.'-'.$months[$i].'-'.$year; 
                   $to_date=date("d-M-Y");
                   if ($current_date==$to_date) 
                   {                     
                     $current_date="aa";
                   }
                   


                   foreach ($game_result as $key => $val) 
                            {

                              /* echo $v.'-'.$months[$i].'-'.$year.'</br>';
                              echo $val->start;*/
                             if ($v!='' && $v.'-'.$months[$i].'-'.$year == $val->start) 
                              {
                                $z= $val->result;
                                $l1= $val->l1;
                                $l2= $val->l2;
                                $l3= $val->l3;
                                $r1= $val->r1;
                                $r2= $val->r2;
                                $r3= $val->r3;
                                $array = str_split($z);
                                if($array[0]==$array[1])
                                {
                                $class_colour="bg-danger";
                                }

                                break;

                              }
                              else if ($v!='')
                              {
                                $z='**';
                                $l1='*';
                                $l2='*';
                                $l3='*';
                                $r1='*';
                                $r2='*';
                                $r3='*';
                              }
                              else
                              {
                                $z='';
                                $l1='';
                                $l2='';
                                $l3='';
                                $r1='';
                                $r2='';
                                $r3='';
                              }
                             }

      $last_date=$totaldays;
      if(!($m % 7)) 
      {
        $start=$v;
        $month_show=$i+1;
        if ($v=='') 
        {
         $last_date=$cal[$i][6+$k];
         $month_last=$month_show;
         $start=1;
        }
        if ($v!='') 
        {
          if ($v+6>$totaldays && $month_show<11) 
          {   
            $month_last=$month_show+1;
            $last_date=$cal[$i+1][6];
          }
          else if ($v+6>$totaldays && $month_show>11) 
          {   
            $month_last=$month_show;
            $last_date=$totaldays;
          }
          else 
          { 
            $month_last=$month_show;
            $last_date=$cal[$i][6+$k];
          }
        }
       echo "</tr><tr><td class='table-danger'>{$start}-{$month_show}-{$year} To {$last_date}-{$month_last}-{$year} </td>";  
      } 


      if($v!='' && $m>=0 )
      { 

        echo "<td  id=".$current_date." class=".$class_colour.">
       <table class='table table-bordered' >
       <tr><td>{$l1}</td><td></td><td>{$r1}</td></tr>
       <tr><td>{$l2}</td><td>{$z}</td><td>{$r2}</td></tr>
       <tr><td>{$l3}</td><td></td><td>{$r3}</td></tr>
       </table>
       </td>";
      $m++;
      }
     else if($v=='' && $m<7 )
      { 
        echo "<td  id=".$current_date." class=".$class_colour.">
       <table class='table table-bordered' >
       <tr><td>{$l1}</td><td></td><td>{$r1}</td></tr>
       <tr><td>{$l2}</td><td>{$z}</td><td>{$r2}</td></tr>
       <tr><td>{$l3}</td><td></td><td>{$r3}</td></tr>
       </table>
       </td>";
      $m++;
      }
    }
    endforeach
    ?>
    </tr>


<?php }  ?>
  </tbody>
</table>
    </div>
  </div>
</div>


















  <!-- ======= Footer ======= -->
  <footer id="footer">

  

    <div class="footer-top">
      <div class="container">
       
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$main_settings[0]->site_name}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        Designed by <a href="#">{{$main_settings[0]->site_name}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ asset('home_assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('home_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('home_assets/js/main.js') }}"></script>
  <script type="text/javascript">
  $( document ).ready(function() {
   $('.current_result').trigger('click');
   $('.current_result').click('click');
});
</script>

</body>

</html>