@extends('frontend.layouts.main')
@section('content')
<div class="content-box container ">
    <div class="title-content-box">
        <p>  Tin Văn Hóa  </p>
    </div>
    <div class="row d-flex">
        @if(!empty($newsVH))
        @foreach($newsVH as $newsVH)
        <div class="article-box-item w20">
            <div>
              
                <div class="img">
                    <img src="{{ $newsVH->image }}" alt="" class="h150">
                </div>
                <p> <a href="/tin-tuc-{{$newsVH->name}}"> {{ $newsVH->name }} </a>  </p>
                 
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection



