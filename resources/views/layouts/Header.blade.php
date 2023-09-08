<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2023 17:20:31 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@php
$set = DB::table('settings')->get();
@endphp
@foreach ($set as $sets)
<title>{{ $sets->title }}</title>
@endforeach
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href= "{{asset('dashdord/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/plugins/jqvmap/jqvmap.min.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/dist/css/adminlte.min2167.css?v=3.2.0')}}">

<link rel="stylesheet" href="{{asset('dashdord/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/plugins/daterangepicker/daterangepicker.css')}}">

<link rel="stylesheet" href="{{asset('dashdord/plugins/summernote/summernote-bs4.min.css')}}">
<script nonce="cd90ab5b-e420-4198-affe-408cb7e5e7f0">(function(w,d){!function(dK,dL,dM,dN){dK[dM]=dK[dM]||{};dK[dM].executed=[];dK.zaraz={deferred:[],listeners:[]};dK.zaraz.q=[];dK.zaraz._f=function(dO){return function(){var dP=Array.prototype.slice.call(arguments);dK.zaraz.q.push({m:dO,a:dP})}};for(const dQ of["track","set","debug"])dK.zaraz[dQ]=dK.zaraz._f(dQ);dK.zaraz.init=()=>{var dR=dL.getElementsByTagName(dN)[0],dS=dL.createElement(dN),dT=dL.getElementsByTagName("title")[0];dT&&(dK[dM].t=dL.getElementsByTagName("title")[0].text);dK[dM].x=Math.random();dK[dM].w=dK.screen.width;dK[dM].h=dK.screen.height;dK[dM].j=dK.innerHeight;dK[dM].e=dK.innerWidth;dK[dM].l=dK.location.href;dK[dM].r=dL.referrer;dK[dM].k=dK.screen.colorDepth;dK[dM].n=dL.characterSet;dK[dM].o=(new Date).getTimezoneOffset();if(dK.dataLayer)for(const dX of Object.entries(Object.entries(dataLayer).reduce(((dY,dZ)=>({...dY[1],...dZ[1]})),{})))zaraz.set(dX[0],dX[1],{scope:"page"});dK[dM].q=[];for(;dK.zaraz.q.length;){const d_=dK.zaraz.q.shift();dK[dM].q.push(d_)}dS.defer=!0;for(const ea of[localStorage,sessionStorage])Object.keys(ea||{}).filter((ec=>ec.startsWith("_zaraz_"))).forEach((eb=>{try{dK[dM]["z_"+eb.slice(7)]=JSON.parse(ea.getItem(eb))}catch{dK[dM]["z_"+eb.slice(7)]=ea.getItem(eb)}}));dS.referrerPolicy="origin";dS.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(dK[dM])));dR.parentNode.insertBefore(dS,dR)};["complete","interactive"].includes(dL.readyState)?zaraz.init():dK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{asset('dashdord/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>



</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">



<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">

</div>
<div class="info">
  
@foreach ($set as $sets)
<a href="/home" class="d-block">{{ $sets->title }}</a>
@endforeach
 
</div>
</div>



<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">












<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Post
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/post/" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All Post</p>
</a>
</li>
<li class="nav-item">
<a href="/add_post/" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add New Post</p>
</a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-table"></i>
<p>
Category
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/category/" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All Category
</p>
</a>
</li>
<li class="nav-item">
<a href="/add_category/" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add New Category</p>
</a>
</li>
</ul>
</li>




<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-book"></i>
<p>
  Page
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/page/" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All Page</p>
</a>
</li>
<li class="nav-item">
<a href="/add_page/" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add New Page</p>
</a>
</li>
</ul>
</li>


<li class="nav-item">
  <a href="/setting/" class="nav-link">
  <i class="nav-icon fas fa-th"></i>
  <p>
  Setting
   
  </p>
  </a>
  </li>

  <li class="nav-item">
  <a href="/ads/" class="nav-link">
  <i class="nav-icon fas fa-th"></i>
  <p>
  Ads
  
  </p>
  </a>
  </li>

  <li class="nav-item">
  <a href="/author/" class="nav-link">
  <i class="nav-icon fas fa-th"></i>
  <p>
  Author
  
  </p>
  </a>
  </li>

  <li class="nav-item">
  <a href="/out/" class="nav-link">
  <i class="nav-icon fas fa-th"></i>
  <p>
    Logout
  
  </p>
  </a>
  </li>

</ul>
</nav>

</div>

</aside>






</div>
</section>

</div>



<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="{{asset('dashdord/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('dashdord/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('dashdord/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('dashdord/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('dashdord/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{asset('dashdord/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashdord/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('dashdord/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('dashdord/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashdord/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('dashdord/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('dashdord/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('dashdord/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('dashdord/dist/js/adminlte2167.js?v=3.2.0')}}"></script>



<script src="{{asset('dashdord/dist/js/pages/dashboard.js')}}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Jun 2023 17:22:12 GMT -->
</html>
