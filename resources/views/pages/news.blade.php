@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')

<div class="text-secondary px-4 py-3 text-center header">
      <div class="py-3">
        <h1 class="display-5 fw-bold ">{{$category->name}}</h1>
        <!-- <div class="col-lg-8 mx-auto">
          <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div> -->
      </div>
    </div>
<section  class="container">
<div class="row">
    <div class="col-md-9" style="padding-bottom: 50px;">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 list-news">
      @foreach($articles as $val)
        @include('pages.iteam.news')
      @endforeach
    </div>

    </div>
    <div class="col-md-3">
      @include('layout.sidebar_news')
      
    </div>
    
  </div>
</section>
@endsection