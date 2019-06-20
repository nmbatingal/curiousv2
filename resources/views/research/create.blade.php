@extends('layouts.app')

@section('title')
My Research -
@endsection

@section('styles')
<link href="{{ asset('assets/summernote/summernote-bs4.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Page Content -->
<div class="container-fluid">
    <!-- Page Heading/Breadcrumbs -->
    <!-- <h2 class="mt-4 mb-3">My Research
      <small>Subheading</small>
    </h2> -->

    <div class="row my-4">
        <div class="col-md-8 ml-auto mr-auto">

            <!-- Page Content -->
            <h3 class="">Upload New Research</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('researcher.index', auth()->user()->id) }}">Articles & Research</a>
                </li>
                <li class="breadcrumb-item active">New</li>
            </ol>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-info" role="alert">
                                Fill-out form and upload research.
                            </div>

                            <!-- Form File Create -->
                            <form action="{{ route('researcher.store', auth()->user()->id) }}" method="POST" class="mt-5" enctype="multipart/form-data">
                                @csrf

                                <!-- Research Title -->
                                <div class="form-group row">
                                    <label for="researchTitle" class="col-md-3 col-form-label text-md-right">Research Title</label>
                                    <div class="col">
                                        <input id="researchTitle" type="text" class="form-control" name="researchTitle" value="{{ old('researchTitle') }}" required>
                                    </div>
                                </div>

                                <!-- Keywords -->
                                <div class="form-group row">
                                    <label for="keywords" class="col-md-3 col-form-label text-md-right">Keywords</label>
                                    <div class="col">
                                        <input id="keywords" type="text" class="form-control" name="keywords" value="{{ old('keywords') }}" required>
                                        <small class="form-control-feedback">Enter comma (,) key to add keyword.</small>
                                    </div>
                                </div>

                                <!-- Authors -->
                                <div class="form-group row">
                                    <label for="authors" class="col-md-3 col-form-label text-md-right">Authors</label>
                                    <div class="col">
                                        <input id="authors" type="text" class="form-control" name="authors" value="{{ old('authors') }}" required>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#" class="btn btn-success"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="form-group row">
                                    <label for="category" class="col-md-3 col-form-label text-md-right">Category</label>
                                    <div class="col">
                                        <select id="category" class="form-control" name="category" required>
                                            <option value="">Please select a category...</option>
                                            @foreach ( $categories as $field )
                                                <optgroup label="{{ $field->category_field }}">
                                                    @foreach ($field->catDomains as $domain)
                                                        <optgroup label="{{ $domain->category_domain }}" style="text-indent: 13px;">
                                                            @foreach ($domain->catSubdomains as $subDomain)
                                                                <option value="{{ $field->id }}|{{ $domain->id }}|{{ $subDomain->id }}">{{ $subDomain->category_subdomain }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <hr>

                                <!-- Funding Agency -->
                                <div class="form-group row">
                                    <label for="funding_agency" class="col-md-3 col-form-label text-md-right">Funding Agency</label>
                                    <div class="col">
                                        <input id="funding_agency" list="fundingAgencyList" class="form-control" name="funding_agency" value="{{ old('funding_agency') }}" required>

                                        <datalist id="fundingAgencyList">
                                            <option value="Internet Explorer">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>
                                    </div>
                                </div>
                                
                                <!-- Project Cost -->
                                <div class="form-group row">
                                    <label for="project_cost" class="col-md-3 col-form-label text-md-right">Project Cost</label>
                                    <div class="col">
                                        <input id="project_cost" type="text" class="form-control" name="project_cost" value="{{ old('project_cost') }}" required>
                                    </div>
                                </div>

                                <!-- Project Location -->
                                <div class="form-group row">
                                    <label for="project_location" class="col-md-3 col-form-label text-md-right">Project Location</label>
                                    <div class="col">
                                        <input id="project_location" type="text" class="form-control" name="project_location" value="{{ old('project_location') }}" required>
                                    </div>
                                </div>

                                <!-- Project Duration -->
                                <div class="form-group row">
                                    <label for="project_duration_start" class="col-md-3 col-form-label text-md-right">Project Location</label>
                                    
                                    <div class="col">
                                        <input id="project_duration_start" type="month" class="form-control" name="project_duration_start" value="{{ old('project_duration_start') }}" required>
                                        <small class="form-control-feedback">Select starting date.</small>
                                    </div>
                                    <div class="col">
                                        <input id="project_duration_end" type="month" class="form-control" name="project_duration_end" value="{{ old('project_duration_end') }}" required>
                                        <small class="form-control-feedback">Select end date.</small>
                                    </div>
                                </div>

                                <!-- Completion Status -->
                                <div class="form-group row">
                                    <label for="status" class="col-md-3 col-form-label text-md-right">Completion Status</label>
                                    <div class="col">
                                        <div class="form-check form-check-inline p-2">
                                            <input class="form-check-input" type="radio" name="status" id="statusOngoing" value="0" required>
                                            <label class="form-check-label" for="statusOngoing">
                                                Ongoing
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline p-2">
                                            <input class="form-check-input" type="radio" name="status" id="statusCompleted" value="1" required>
                                            <label class="form-check-label" for="statusCompleted">
                                                Completed
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group mt-3">
                                    <div class="col pr-0">
                                        <h6>Details</h6>
                                        <textarea name="research_content" class="summernote form-control" id="research_content" title="Contents" required></textarea>
                                    </div>
                                </div>

                                <hr>

                                <!-- File Upload -->
                                <div class="form-group row">
                                    <label for="research_file" class="col-md-3 col-form-label text-md-right">File Upload</label>
                                    <div class="col">
                                        <input id="research_file" type="file" class="form-control" name="research_file" value="{{ old('research_file') }}" accept="application/pdf" required>
                                        <small class="form-control-feedback">Upload PDF file only.</small>
                                    </div>
                                </div>

                                <!-- Subscription -->
                                <div class="form-group row">
                                    <label for="access_type" class="col-md-3 col-form-label text-md-right">Document Access Type</label>
                                    <div class="col">
                                        <div class="form-check form-check-inline p-2">
                                            <input class="form-check-input" type="radio" name="access_type" id="accessType1" value="0" required>
                                            <label class="form-check-label" for="accessType1">
                                                Open
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline p-2">
                                            <input class="form-check-input" type="radio" name="access_type" id="accessType2" value="1" required>
                                            <label class="form-check-label" for="accessType2">
                                                Subscription
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group row mb-0">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            // toolbar: [
            //     // [groupName, [list of button]]
            //     ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
            //     ['font', ['color', 'strikethrough', 'superscript', 'subscript']],
            //     ['tab', ['table', 'hr']],
            //     ['para', ['height', 'ul', 'ol', 'paragraph']],
            //     ['more', ['fullscreen', 'codeview', 'help']],
            // ],
            // disableDragAndDrop: true,
            // fontNames: ['Poppins']
        });

        $('input.tags-input').tagsinput({
            confirmKeys: [44]
        });

    });
</script>
@endpush