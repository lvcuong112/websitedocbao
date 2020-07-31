@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <p>  Tin Thời Sự  </p>
    </div>
    <div class="row d-flex">
        @if(!empty($newsTG))
        @foreach($newsTG as $newsTG)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $newsTG->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$newsTG->name}}"> {{ $newsTG->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection



