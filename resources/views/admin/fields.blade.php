@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Research Category
      <!-- <small>Subheading</small> -->
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Research Category</li>
    </ol>

    <!-- Category Form -->
    <div class="row mb-3">
        <!-- Field Category Column -->
        <div class="col-md-4 mb-2">
            <div class="card h-100">
                <h5 class="card-header">Add Field Category</h5>
                <div class="card-body">
                    <form action="{{ route('admin.store.field_category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input id="inputField" type="text" class="form-control" name="inputField" placeholder="Enter category field here" required>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>

                    <form action="{{ route('admin.category.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputFile">Upload Category List</label>
                            <input id="inputFile" type="file" class="form-control" name="inputFile" placeholder="Insert csv or excel file" required>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Domain Category Column -->
        <div class="col-md-4 mb-2">
            <div class="card h-100">
                <h5 class="card-header">Add Domain Category</h5>
                <div class="card-body">
                    <form action="{{ route('admin.store.domain_category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <select id="inputField" class="form-control" name="inputField" required>
                                <option value="">Select category field</option>
                                @foreach ( $catField as $field )
                                    <option value="{{ $field->id }}">{{ $field->category_field }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="inputDomain" type="text" class="form-control" name="inputDomain" placeholder="Enter category domain here" required>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Subdomain Category Column -->
        <div class="col-md-4 mb-2">
            <div class="card h-100">
                <h5 class="card-header">Add Subdomain Category</h5>
                <div class="card-body">
                    <form action="{{ route('admin.store.subdomain_category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <select id="inputDomain" class="form-control" name="inputDomain" required>
                                <option value="">Select category domain</option>
                                @foreach ( $catField as $field )
                                    <optgroup label="{{ $field->category_field }}">
                                        @foreach( $field->catDomains as $domain)
                                            <option value="{{ $domain->id }}">{{ $domain->category_domain }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="inputSubdomain" type="text" class="form-control" name="inputSubdomain" placeholder="Enter category subdomain here" required>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->

    <!-- Table Content -->
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Research List of Categories</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableCategory" class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Field</th>
                                    <th scope="col">Domain</th>
                                    <th scope="col">Subdomain</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $categories as $category )
                                    <tr>
                                        <td></td>
                                        <td>{{ $category->catDomain->catField->category_field }}</td>
                                        <td>{{ $category->catDomain->category_domain }}</td>
                                        <td>{{ $category->category_subdomain }}</td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tableCategory').DataTable();
        } );
    </script>
@endpush