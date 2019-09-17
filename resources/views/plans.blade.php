@extends('layouts.app')

@section('title')
Plans -
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

    <div class="row my-4">
        <div class="col-md-10 ml-auto mr-auto">

            <!-- Page Content -->
            <h3 class="">R&D Plans</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">R&D Plans</li>
            </ol>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <h6 class="card-header">Member Agencies</h6>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#" class="font-weight-bold text-muted">Regional Line Agencies (13)</a>
                                    <ul class="list-unstyled ml-4 mb-0">
                                        <li><a href="#">DOST</a></li>
                                        <li><a href="#">DOH</a></li>
                                        <li><a href="#">CHED</a></li>
                                        <li><a href="#">DA</a></li>
                                        <li><a href="#">BFAR</a></li>
                                        <li><a href="#">PCA</a></li>
                                        <li><a href="#">NEDA</a></li>
                                        <li><a href="#">DOT</a></li>
                                        <li><a href="#">DENR</a></li>
                                        <li><a href="#">MGB</a></li>
                                        <li><a href="#">OCD</a></li>
                                        <li><a href="#">PSA</a></li>
                                        <li><a href="#">DTI</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#" class="font-weight-bold text-muted">SUCs and HEIs (11)</a>
                                    <ul class="list-unstyled ml-4 mb-0">
                                        <li><a href="#">CSU</a></li>
                                        <li><a href="#">FSUU</a></li>
                                        <li><a href="#">SJIT</a></li>
                                        <li><a href="#">BDC</a></li>
                                        <li><a href="#">SSCT</a></li>
                                        <li><a href="#">SPU</a></li>
                                        <li><a href="#">SEC</a></li>
                                        <li><a href="#">ASSCAT</a></li>
                                        <li><a href="#">SDSSU</a></li>
                                        <li><a href="#">USEP-Bislig</a></li>
                                        <li><a href="#">PNU</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#" class="font-weight-bold text-muted">Industry / Private Sectors (5)</a>
                                    <ul class="list-unstyled ml-4 mb-0">
                                        <li><a href="#">Butuan CCI</a></li>
                                        <li><a href="#">Surigao City / SDN CCI</a></li>
                                        <li><a href="#">Bislig CCI</a></li>
                                        <li><a href="#">Tandag / SDS CCI</a></li>
                                        <li><a href="#">ADS CCI</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#" class="font-weight-bold text-muted">Consortia (3)</a>
                                    <ul class="list-unstyled ml-4 mb-0">
                                        <li><a href="#">CHRDC</a></li>
                                        <li><a href="#">EMIEERALD</a></li>
                                        <li><a href="#">CCAARRD</a></li>
                                    </ul>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h4 class="">RDIC Workplan 2019</h4>

                    <div id="pdfViewer"></div>
                    <a id="pdfHref" href="{{ asset('storage/rdic_plans/2019/rdic-plan-2019.pdf') }}" class="text-info">
                        <img src="{{ asset('logos/adobe-pdf-icon.png') }}" height="40px" class="p-r-10"> Download PDF file
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('pdfobject-master/pdfobject.js') }}"></script>
<!-- Treeview Plugin JavaScript -->
<script src="{{ asset('assets/bootstrap-treeview-master/dist/bootstrap-treeview.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-treeview-master/dist/bootstrap-treeview-init.js') }}"></script>
<script>
    var href = $("#pdfHref").attr('href');
    var options = {
        height: '800px',
        pdfOpenParams: {
            toolbar: false,
            statusbar: false,
            view: "FitH"
        },
        fallbackLink: "<p>Your browser doesn't support inline PDFs.</p>",
        forcePDFJS: true
    };

    PDFObject.embed(href, "#pdfViewer", options);
</script>
@endpush