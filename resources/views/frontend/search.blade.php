@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <p>  Đây Có Phải Tin Tức Bạn Muốn Tìm ??  </p>
    </div>
    <div class="row d-flex">
        @if(!empty($search))
        @foreach($search as $search)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $search->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$search->name}}"> {{ $search->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection





