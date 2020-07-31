@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <a href="/"><p>  Tin Hot  </p></a>
    </div>
    <div class="row d-flex">
        @if(!empty($news))
        @foreach($news as $new)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $new->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$new->name}}"> {{ $new->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
        {{ $news->links() }}
    </div>
</div>

<div class="content-box container">
    <div class="row">
        <div class="col-sm-12 col-lg-9 ">
            <div class="box-square-4">
                <div class="row p0">
                    @if(!empty($bannerNews))
                    @foreach($bannerNews as $bannerNews)
                    <div class="col-md-6 col-sm-6">
                        <div class="item-content">
                            <a href="/tin-tuc-{{ $bannerNews->name }}">
                                <img src="{{ $bannerNews->image }}" alt="" class="img-fluid">
                                <div class="text">
                                    <p> {{ $bannerNews->name }} </p>
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
                            <a href="/tin-tuc-{{$newsES->name}}">
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
@endsection





