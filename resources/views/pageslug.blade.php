<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>{{$setting->title}}</title>
    <meta name="keywords" content="{{$setting->keywords}}">
    <meta name="description" content="{{$setting->description}}">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('blog/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('blog/images/apple-touch-icon.png')}}">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{asset('blog/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{asset('blog/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('blog/style.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset('blog/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{asset('blog/css/colors.css')}}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="{{asset('blog/css/version/tech.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img width="200" height="50" src="{{ asset('/mylogo/' . $setting->logo) }}" alt="{{ $setting->logo }}"></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                           
                            @foreach ($category as $category)
                                
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categoryslug',$category->slug) }}">{{$category->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area text-center">
                               
                                    
                                
                               
                               
                              
                               <h3>{{$viewtitle->name}}</h3>
                               
                                

                                <div class="blog-meta big-meta">
                                    <small><a >{{$viewtitle->created_at->format('d M Y')}}</a></small>
                                    
                                    
                                </div><!-- end meta -->

                               
                            </div><!-- end title -->
                            @foreach ($view as $view)
                                
                            
                           

                            <div class="blog-content">  
                                <div class="pp">
                                    {!!$view->body!!}
                                </div><!-- end pp -->
                            </div><!-- end content -->
                            @endforeach
                            <div class="blog-title-area">
                                

                              
                            </div><!-- end title -->

                         

                            <hr class="invis1">

                            

                            <hr class="invis1">

                          

                            <hr class="invis1">

                           
                            <hr class="invis1">

                            

                            <hr class="invis1">

                           
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                  
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="/"><img width="200" height="50" src="{{ asset('/mylogo/' . $setting->logo) }}" alt="{{ $setting->logo }}" class="img-fluid"></a>
                                
                                

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Categories</h2>
                            <div class="link-widget">
                                @foreach ($categoryfooter as $categoryfooter)
                                <ul>
                                   
                                        
                                    <li><a href="{{ route('categoryslug',$categoryfooter->slug) }}"> {{$categoryfooter->slug}}</a></li>

                                    
                                </ul>
                                @endforeach
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Page</h2>
                            <div class="link-widget">
                                @foreach ($Page as $Page)
                                    
                                
                                <ul>
                                    <li><a href="{{ route('pageslug',$Page->slug) }}">{{$Page->name}}</a></li>

                                </ul>
                                @endforeach
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">{{$setting->footertext}}</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->



</body>
</html>