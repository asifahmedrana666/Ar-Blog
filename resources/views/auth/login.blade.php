<!DOCTYPE html>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v10/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v10/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="{{asset('lg/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/icon-font.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/hamburgers.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/animsition.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/daterangepicker.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('lg/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('lg/main.css')}}">

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="{{asset('lg/analytics.js.download')}}" nonce="c0c1744c-e561-48db-9daa-143579984712"></script><script defer="" referrerpolicy="origin" src="{{asset('lg/s.js.download')}}"></script><script nonce="c0c1744c-e561-48db-9daa-143579984712">(function(w,d){!function(db,dc,dd,de){db[dd]=db[dd]||{};db[dd].executed=[];db.zaraz={deferred:[],listeners:[]};db.zaraz.q=[];db.zaraz._f=function(df){return async function(){var dg=Array.prototype.slice.call(arguments);db.zaraz.q.push({m:df,a:dg})}};for(const dh of["track","set","debug"])db.zaraz[dh]=db.zaraz._f(dh);db.zaraz.init=()=>{var di=dc.getElementsByTagName(de)[0],dj=dc.createElement(de),dk=dc.getElementsByTagName("title")[0];dk&&(db[dd].t=dc.getElementsByTagName("title")[0].text);db[dd].x=Math.random();db[dd].w=db.screen.width;db[dd].h=db.screen.height;db[dd].j=db.innerHeight;db[dd].e=db.innerWidth;db[dd].l=db.location.href;db[dd].r=dc.referrer;db[dd].k=db.screen.colorDepth;db[dd].n=dc.characterSet;db[dd].o=(new Date).getTimezoneOffset();if(db.dataLayer)for(const dp of Object.entries(Object.entries(dataLayer).reduce(((dq,dr)=>({...dq[1],...dr[1]})),{})))zaraz.set(dp[0],dp[1],{scope:"page"});db[dd].q=[];for(;db.zaraz.q.length;){const ds=db.zaraz.q.shift();db[dd].q.push(ds)}dj.defer=!0;for(const dt of[localStorage,sessionStorage])Object.keys(dt||{}).filter((dv=>dv.startsWith("_zaraz_"))).forEach((du=>{try{db[dd]["z_"+du.slice(7)]=JSON.parse(dt.getItem(du))}catch{db[dd]["z_"+du.slice(7)]=dt.getItem(du)}}));dj.referrerPolicy="origin";dj.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(db[dd])));di.parentNode.insertBefore(dj,di)};["complete","interactive"].includes(dc.readyState)?zaraz.init():db.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-50 p-b-90">
<form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
@csrf
<span class="login100-form-title p-b-51">
Login
</span>
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="email" id="email" name="email" placeholder="Username">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
<input class="input100" type="password" id="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
</div>
<div class="flex-sb-m w-full p-t-3 p-b-24">
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<label class="label-checkbox100" for="ckb1">
Remember me
</label>
</div>
<div>
<a href="{{ route('password.request') }}" class="txt1">
Forgot?
</a>
</div>
</div>
<div class="container-login100-form-btn m-t-17">
<button class="login100-form-btn">
Login
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="{{asset('lg/jquery-3.2.1.min.js.download')}}"></script>

<script src="{{asset('lg/animsition.min.js.download')}}"></script>

<script src="{{asset('lg/popper.js.download')}}"></script>
<script src="{{asset('lg/bootstrap.min.js.download')}}"></script>

<script src="{{asset('lg/select2.min.js.download')}}"></script>

<script src="{{asset('lg/moment.min.js.download')}}"></script>
<script src="{{asset('lg/daterangepicker.js.download')}}"></script>

<script src="{{asset('lg/countdowntime.js.download')}}"></script>

<script src="{{asset('lg/main.js.download')}}"></script>

<script async="" src="{{asset('lg/js')}}"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="{{asset('lg/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854')}}" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon="{&quot;rayId&quot;:&quot;800fdb438e35880b&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


</body></html>