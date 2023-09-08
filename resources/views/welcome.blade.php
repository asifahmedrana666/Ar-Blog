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

        <br>
        <br>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent Post <a ><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->
                            @foreach ($posts as $post)
                                
                            
                            <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ route('view',$post->slug) }}" title="">
                                                <img width="600" height="270" src="{{ asset('/pic/' . $post->featuredimage) }}" alt="{{ $post->featuredimage }}">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{ route('view',$post->slug) }}" title="">{{$post->title}}</a></h4>
                                        {{-- <p>{!!  Str::limit($post->body, 200) !!}</p> --}}
                                        <p>{{ Str::limit(strip_tags($post->body), 200, '') }}</p>
                                        <small class="firstsmall"><a class="bg-orange" >{{$post->category}}</a></small>
                                        <small><a >{{$post->created_at->format('d M Y')}}</a></small>
                                        
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                       
                                <br>
                            
                               

                                

                                

                                
                        </div><!-- end page-wrapper -->
                        @endforeach
                        <div class="pagination">
                            {{ $posts->links() }}
                        </div>
                    </div>
                        <hr class="invis">

                        
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                {{-- <div class="banner-spot clearfix"> --}}
                                    {{-- <div class="banner-img">
                                        <img src="{{asset('blog/upload/banner_07.jpg')}}" alt="" class="img-fluid">
                                    </div><!-- end banner-img --> --}}

                                    
                                    {!!$ads->homepageads1!!}
                                {{-- </div><!-- end banner --> --}}
                            </div><!-- end widget -->

                            

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach ($recentpost as $recentpost)
                                            
                                        
                                        <a href="{{ route('view',$recentpost->slug) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img width="600" height="500" src="{{ asset('/pic/' . $recentpost->featuredimage) }}" alt="{{ $recentpost->featuredimage }}" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$recentpost->title}}</h5>
                                                <small>{{$recentpost->created_at->format('d M Y')}}</small>
                                            </div>
                                        </a>
                                        @endforeach
                                        
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            
                            

                            <div class="widget">
                                {!!$ads->homepageads2!!}
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
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
                                   
                                        
                                    <li><a href="{{ route('categoryslug',$categoryfooter->slug) }}"> {{$categoryfooter->name}}</a></li>

                                    
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