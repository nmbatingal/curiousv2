@extends('layouts.app')

@section('title')
My Research -
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
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <center class="m-auto">
                        <img src="{{ $account->avatar }}" class="card-img rounded-circle" alt="..." style="width: 70%">
                        <h4 class="card-title mt-2">{{ $account->name }}</h4>
                        <div class="row text-center justify-content-md-center">
                            @if ( $account->id != auth()->user()->id )

                                @if ( auth()->user()->isFollowing( $account->id ) )
                                    <!-- Unfollow Button -->
                                    <div class="col">
                                        <form id="unfollow-form" action="{{ route('researcher.unfollow', $account->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-primary">Unfollow</button>
                                        </form>
                                    </div>
                                @else
                                    <!-- Follow Button -->
                                    <div class="col">
                                        <a class="btn btn-sm btn-primary" href="{{ route('researcher.follow', $account->id) }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('follow-form').submit();">
                                            <i class="fas fa-heart"></i> Follow
                                        </a>
                                        <form id="follow-form" action="{{ route('researcher.follow', $account->id) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                @endif
                            @endif
                            <div class="col">
                                <a href="{{ route('researcher.followers', $account->id) }}" class="">
                                    <i class="fas fa-user-friends"></i> {{ $account->followers()->count() }} Followers
                                </a>
                            </div>
                        </div>
                    </center>

                    <div class="mt-4"></div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                    <hr>

                    <small class="text-muted">Email address </small>
                    <h6>{{ $account->email }}</h6> 
                    
                    <small class="text-muted p-t-30 db">Phone</small>
                    <h6>+91 654 784 547</h6> 

                    <small class="text-muted p-t-30 db">Address</small>
                    <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>

                    <small class="text-muted">Social Profile</small>
                    <br>
                    <button class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i></button>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            <!-- <div class="p-2 bg-white mb-3">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Articles & Research</a>
                    </li>
                </ul>
            </div> -->

            <h3 class="mb-5">Articles & Research</h3>

            <div class="d-flex my-3 justify-content-between">
                <a href="{{ route('researcher.create') }}" class="btn btn-success">Upload new research</a>
                <form class="form-inline">
                    <input class="form-control mx-sm-2" type="" name="" placeholder="type here">
                    <button type="submit" class="btn btn-outline-secondary">Search</button>
                </form>
            </div>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <!-- List Item 1 -->
                    <li class="list-group-item">
                        <div class="row">
                          <div class="col">
                            <h3>Project One</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                            <a class="btn btn-primary" href="#">View Project
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <a class="btn btn-link " href="#">View Project
                            </a>
                          </div>
                        </div>
                    </li>
                    <!-- End List Item -->

                </ul>
            </div>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mt-4">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
            </ul>

        </div>
    </div>
</div>
@endsection
