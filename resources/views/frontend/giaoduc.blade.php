@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <p>  Tin Giáo Dục  </p>
    </div>
    <div class="row d-flex">
        @if(!empty($newsGD))
        @foreach($newsGD as $newsGD)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $newsGD->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$newsGD->name}}"> {{ $newsGD->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection



