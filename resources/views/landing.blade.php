@extends('layouts.app')

@section('styles')
@endsection

@section('content')
<!-- Search form container -->
<div class="container">
    <div class="row">
        <div class="col-12 pt-4 pb-3">
            <h5 class="pb-2">Search for reasearch articles and open access content by typing keywords in the search box.</h5>

            <form action="{{ route('search') }}" class="form-inline" method="GET">
                <input type="text" class="form-control mb-2 mr-sm-auto" name="keyword" placeholder="Keywords">
                <input type="text" class="form-control mb-2 mr-sm-auto" name="author" placeholder="Author name">
                <input type="text" class="form-control col-md-4 mb-2 mr-sm-auto" name="title" placeholder="Research title">
                <select class="custom-select col-md-3 mb-2 mr-sm-auto" name="category">
                    <option value="">Choose category...</option>
                    @foreach ( $catField as $field )
                        <option class="font-weight-bold">{{ $field->category_field }}</option>
                        @foreach( $field->catDomains as $domain)
                            <option class="ti">{{ $domain->category_domain }}</option>
                        @endforeach
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i></button>
                <a class="btn btn-link mb-2" href="#"><i class="fas fa-cog"></i></a>
            </form>
        </div>
    </div>
</div>

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('{{ asset('images/banners/1.jpg') }}')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3>First Slide</h3>
            <p>This is a description for the first slide.</p> -->
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/banners/2.jpg') }}')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p> -->
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{ asset('images/banners/3.jpg') }}')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p> -->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Explore articles and research on Curious</h1>

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-auto ml-auto">
          <a href="#" class="btn btn-link btn-lg"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="btn btn-link btn-lg"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
</div>
@endsection
