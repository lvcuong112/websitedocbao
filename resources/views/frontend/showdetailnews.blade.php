@extends('frontend.layouts.main')
@section('content')
<div id="main" >
    <div id="banner" class="container">
        <div class="row">
            <div class="col-md-3">

               <a href="/"> <h3> Tin Hot </h3></a>
                <ul>
        	        @if(!empty($news))
					@foreach($news as $new)
                    <li> 
                        <a href="/tin-tuc-{{$new->name}}">
                            <img src="{{ $new->image }}" alt="">
                            <div>
								<p>  {{ $new->name }}  </p>
                            </div> 
                        </a>  
                    </li>
			        @endforeach
			        @endif
                </ul>
            </div>
            <div class="col-lg-9 col-md-12"> 
            	@foreach($detailNews as $detailnews)
            	<h2 style="margin-top: 1%;">{{ $detailnews->name }}</h2>
            	<div class="content">
            		<div class="meta_title" style="margin: 1%">
            			<i>{{ $detailnews->meta_title }}</i>
            			
            		</div>
            		<div class="content-img" style="text-align: center;">
            			<img src="{{ $detailnews->image }}" alt="" >
            		</div>
            		<div class="main" style="    float: left;
    margin: 2%;">
            			{{ $detailnews->content }}
            		</div>
            	</div> 
            	@endforeach                                 
           	</div>
    	</div>
	</div>

	    <div class="content-box container">
	        <div class="useful-information" id="useful-information" >
	            <div class="title-content-box">
	                <h2> <u>Có Thể Bạn Quan Tâm</u>  </h2>
	            </div>  
	            <div class="row">
	                <div class="col-sm-12 col-lg-9 ">
	                    <div class="box-square-4">
	                        <div class="row">
        	                    @if(!empty($bannerNews))
                   				@foreach($bannerNews as $bannerNews)
	                            <div class="col-md-6 col-sm-6">
	                                <div class="item-content">
	                                    <a href="/tin-tuc-{{ $bannerNews->name }}">
	                                        <img src="{{ $bannerNews->image }}" alt="" class="img-fluid" style="width: 356px; height: 220px;">
	                                        <div class="text">
	                                            <p> {{ $bannerNews->name }} </p>
	                                            <p> {{ $bannerNews->created_at }} </p>
	                                        </div>
	                                    </a>
	                                </div>
	                            </div>
                                @endforeach
                   				@endif
	                        </div>
	                    </div>

			            <div class="type-of-article">
			                <div class="box-article">
			                    <a href="/Thể Thao">
			                        <h3> 
			                            Thể Thao
			                            <span> </span>
			                        </h3>
			                    </a>

			                    <div class="list-article">
			                        @if(!empty($newsBD))
			                        @foreach($newsBD as $newsBD)
			                        <div class="article">
			                            <div class="img">
			                                <img src="{{ $newsBD->image }}" alt="">
			                            </div>
			                            <div class="brief-content">
			                                <p><a href="/tin-tuc-{{$newsBD->name}}" > {{ $newsBD->meta_title }} </a></p>
			                                <span> {{ $newsBD->created_at }} </span>
			                                <p> {{ $newsBD->meta_description }} </p>
			                            </div>
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
			                <div class="box-article">
			                    <a href="/Giáo Dục">
			                    <h3> 
			                        Giáo Dục
			                        <span> </span>
			                    </h3>
			                    </a>

			                    <div class="list-article">
			                        @if(!empty($newsGD))
			                        @foreach($newsGD as $newsGD)
			                        <div class="article">
			                            <div class="img">
			                                <img src="{{ $newsGD->image }}" alt="">
			                            </div>
			                            <div class="brief-content">
			                                <p><a href="/tin-tuc-{{$newsGD->name}}" > {{ $newsGD->meta_title }} </a></p>
			                                <span> {{ $newsGD->created_at }} </span>
			                                <p> {{ $newsGD->meta_description }} </p>
			                            </div>
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
			                <div class="box-article">
			                    <a href="/Thời Sự">
			                    <h3> 
			                        Thời Sự
			                        <span> </span>
			                    </h3>
			                    </a>

			                    <div class="list-article">
			                        @if(!empty($newsTG))
			                        @foreach($newsTG as $newsTG)
			                        <div class="article">
			                            <div class="img">
			                                <img src="{{ $newsTG->image }}" alt="">
			                            </div>
			                            <div class="brief-content">
			                                <p><a href="/tin-tuc-{{$newsTG->name}}" > {{ $newsTG->meta_title }} </a></p>
			                                <span> {{ $newsTG->created_at }} </span>
			                                <p> {{ $newsTG->meta_description }} </p>
			                            </div>
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
			                <div class="box-article">
			                    <a href="/Văn Hóa">
			                    <h3> 
			                        Văn Hóa
			                        <span> </span>
			                    </h3>
			                    </a>

			                    <div class="list-article">
			                        @if(!empty($newsVH))
			                        @foreach($newsVH as $newsVH)
			                        <div class="article">
			                            <div class="img">
			                                <img src="{{ $newsVH->image }}" alt="">
			                            </div>
			                            <div class="brief-content">
			                                <p><a href="/tin-tuc-{{$newsVH->name}}" > {{ $newsVH->meta_title }} </a></p>
			                                <span> {{ $newsVH->created_at }} </span>
			                                <p> {{ $newsVH->meta_description }} </p>
			                            </div>
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
			                <div class="box-article">
			                    <a href="/ESport">
			                    <h3> 
			                        ESport
			                        <span> </span>
			                    </h3>
			                    </a>

			                    <div class="list-article">
			                        @if(!empty($newsES))
			                        @foreach($newsES as $newsES)
			                        <div class="article">
			                            <div class="img">
			                                <img src="{{ $newsES->image }}" alt="">
			                            </div>
			                            <div class="brief-content">
			                                <p><a href="/tin-tuc-{{$newsES->name}}" > {{ $newsES->meta_title }} </a></p>
			                                <span> {{ $newsES->created_at }} </span>
			                                <p> {{ $newsES->meta_description }} </p>
			                            </div>
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
	                </div>
			        <div class="col-lg-3">
			            <div class="dashboard-right">
			                <div class="item-box-right">
			                    <h3> Bài viết mới <span> </span></h3>
			                    <ul >
			                        @if(!empty($newNews))
			                        @foreach($newNews as $newNews)
			                        <li>
			                            <a href="/tin-tuc-{{$newNews->name}}">
			                                <img src=" {{ $newNews->image }} " alt="">
			                                <div>
			                                    <p>{{ $newNews->name }}</p>
			                                    <p> {{ $newNews->created_at }} </p>
			                                </div>
			                            </a> 
			                        </li>
			                        @endforeach
			                        @endif
			                    </ul>
			                </div>
			            </div>
			        </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

@endsection





