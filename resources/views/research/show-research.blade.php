@extends('layouts.app')

@section('title')
Show -
@endsection

@section('styles')

@endsection

@section('content')
<!-- Search form container -->
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-10 mx-auto mt-5 mb-0">
            <form action="{{ route('search') }}" class="" method="GET">
                <div class="form-group row">
                    <div class="col pr-sm-1 text-right">
                        <input type="text" class="form-control col-md-4 mb-0 ml-sm-auto mr-sm-1" name="q" placeholder="Search articles and research">
                        <small class="form-control-feedback"><i class="fas fa-search"></i> Use <a href="#">advanced search</a>.</small>
                    </div>
                    <div class="col-md-1 pl-sm-1">
                        <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading/Breadcrumbs -->
    <!-- <h2 class="mt-4 mb-3">My Research
      <small>Subheading</small>
    </h2> -->

    <div class="row my-4">
        <div class="col-md-8 mx-auto">

            <!-- Page Content -->
            <h3 class="">{!! $research->publication_title !!}</h3>
        </div>
    </div>

</div>
@endsection

@push('scripts')
@endpush