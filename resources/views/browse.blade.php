@extends('layouts.app')

@section('title')
Browse articles and research -
@endsection

@section('styles')
@endsection

@section('content')
<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading/Breadcrumbs -->
    <!-- <h2 class="mt-4 mb-3">My Research
      <small>Subheading</small>
    </h2> -->

    <div class="row my-5">
        <div class="col-md-3">
        </div>

        <div class="col-md-7 mr-auto">
            <h3 class="">Browse {{ $researches->total() }} articles and research</h3>

            <form class="mt-5">
                <div class="form-group row">
                    <div class="col-md-6 pr-sm-1">
                        <input id="authors" type="text" class="form-control" name="q" value="{{ old('q') }}" placeholder="Search for articles or research" required>
                        <small class="form-control-feedback"><i class="fas fa-search"></i> Use <a href="#">advanced search</a>.</small>
                    </div>
                    <div class="col-md-1 pl-sm-1">
                        <a href="#" class="btn btn-primary"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </form>

            <div class="mt-5">

                @forelse ( $researches as $research )
                    <!-- List Item 1 -->
                    <div class="row">
                        <div class="col my-3">
                            <h5 class="mb-0">
                                <a href="{{ route('browse.articles.show', $research->id) }}" class="">{{ $research->publication_title }}</a>
                            </h5>
                            <a href="" class="text-muted">{{ $research->catSubdomain->category_subdomain }}</a>,
                            &nbsp;<i>{!! $research->status ? '<i class="fas fa-circle text-success"></i>' : '<i class="far fa-circle"></i>' !!}</i>
                            &nbsp;<i>{!! $research->status ? 'Completed' : 'Ongoing' !!}</i>,
                            &nbsp;{{ $research->year_start }}
                        </div>
                    </div>
                    <!-- End List Item -->
                @empty
                    <div class="row">
                        <div class="col">
                            <span>No data yet</span>
                        </div>
                    </div>
                @endforelse

                @if ( $researches->total() > 0 )
                    <div class="row mt-3">
                        <div class="col text-center">
                            Showing {{ $researches->firstItem() }} to {{ $researches->lastItem() }} of {{ $researches->total() }} entries
                        </div>
                    </div>
                @endif

                <!-- Pagination -->
                <ul class="pagination justify-content-center mt-1">
                      {{ $researches }}
                </ul>

            </div>

        </div>
    </div>

</div>
@endsection

@push('scripts')
</script>
@endpush