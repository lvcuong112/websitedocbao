<header id="header">
    <div id="header-top" class="container">
        <div id="logo">
            <a href="/"><h1> CNPM </h1></a>
        </div>
        <div id="banner-top">
            @if(!empty($bannersT))
            @foreach($bannersT as $bannerT)
            <a href="/">
                <img src=" {{ $bannerT->image }} " alt="">
            </a>

            @endforeach
            @endif
        </div>
    </div>
    <div id="menu-header" class="container">
        <div class="logo-small">
            <a href="/"><h5> CNPM </h5></a>
        </div>
        <ul>
            <li data-id="1"> <a href="/"> Danh Mục <i class="fas fa-angle-down"></i></a> </li>
            @if(!empty($categories))
                @foreach($categories as $categorie)
                      <li data-id=""> <a href=" {{$categorie->name}} "> {{ $categorie->name }} </a></li>
                @endforeach
            @endif   
        </ul>
        <div id="search-top">
            <form class="input-group search-bar search_form" action="{{asset('search')}}" method="get" role="search">      
                <input type="text" placeholder="Tìm Kiếm Tin Tức..." class="fas fa-search" name="keys">
            </form>
        </div>
        <div id="content-hover-menutop" class="container">
                <div class="content" data-id="1">
                    @if(!empty($categories))
                        @foreach($categories as $categorie)
                            <div class="item">
                                <a href=" {{$categorie->name}} ">
                                <div class="image">
                                    <img src="{{ $categorie->image }}" alt="">
                                </div>
                                <p> {{ $categorie->name }} </p>
                                </a>
                            </div>
                        @endforeach
                    @endif   
                </div>  
                <div class="box-direction">
                    <div>
                        <button id="btn-prew"> <i class="fas fa-angle-left"></i>  </button>
                        <button id="btn-next "> <i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
    </div>

    <div id="menu-mobile">
        <button id="btn-top-mobile"> 
            <i class="fas fa-bars"></i>
        </button>
        <div class="logo-moblie">
           <a href="/"><h1> CNPM </h1></a>
        </div>
        <form class="input-group search-bar search_form" action="{{asset('search')}}" method="get" role="search">      
            <input type="search" name="keys" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
            <span class="input-group-btn">
                <button class="btn icon-fallback-text">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </form>

    </div>    
</header>

<div class="content-page">
    <div class="container">
        <div>
            <div>
                <p> Cập Nhật Tin Tức Nhanh Chóng Chính Xác </p>
                <p> 
                    <i class="fas fa-tags"></i> 1276 bài viết 
                    <i class="fas fa-tags"></i> 15 lĩnh vực khác nhau  
                </p>
            </div>
        </div>
    </div>
</div>
<div class="content-box container">
    <div class="row">
        @if(!empty($banners))
        @foreach($banners as $banner)
        <div class="col-md-6 p0">
            <div class="article-wrapper-item">
                <div>
                    
                    <a href="#">
                        <div class="img">
                            <img src="{{$banner->image}}" alt="" class="h350">
                        </div>    
                        <div class="text">
                            <p> {{ $banner->name }} </p>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>