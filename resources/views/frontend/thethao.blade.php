@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <p>  Tin Thể Thao  </p>
    </div>
    <div class="row d-flex">
        @if(!empty($newsBD))
        @foreach($newsBD as $newsBD)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $newsBD->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$newsBD->name}}"> {{ $newsBD->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection





