@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <p>  Tin ESPORT  </p>
    </div>
    <div class="row d-flex">
        @if(!empty($newsES))
        @foreach($newsES as $newsES)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $newsES->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$newsES->name}}"> {{ $newsES->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection



