@extends('layouts.app')

@section('content')
<!-- Search form container -->
<div class="container">
    <div class="row">
        <div class="col-12 pt-4 pb-3">
            <h5 class="pb-2">Search for reasearch articles and open access content by typing keywords in the search box.</h5>

            <form class="form-inline">
                <input type="text" class="form-control mb-2 mr-sm-auto" id="" placeholder="Keywords">
                <input type="text" class="form-control mb-2 mr-sm-auto" id="" placeholder="Author name">
                <input type="text" class="form-control col-md-4 mb-2 mr-sm-auto" id="" placeholder="Research title">
                <select class="custom-select col-md-3 mb-2 mr-sm-auto" id="inlineFormCustomSelectPref">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
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
        <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
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

    <!-- Science Article Content -->
    <div class="row">
        <div class="col-md-12">
            <h2>Science Article Title</h2>
        </div>
        <div class="col-md-4 mr-sm-auto">
            <ul class="list-unstyled mb-0">
              <li><a href="#">Bullet 1</a></li>
              <li><a href="#">Bullet 2</a></li>
              <li><a href="#">Bullet 3</a></li>
              <li><a href="#">Bullet 4</a></li>
              <li><a href="#">Bullet 5</a></li>
            </ul>
        </div>
        <div class="col-md ml-sm-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
    </div>
    <hr>
    <!-- /.row -->

    <!-- Science Article Content -->
    <div class="row">
        <div class="col-md-12">
            <h2>Science Article Title</h2>
        </div>
        <div class="col-md-4 mr-sm-auto">
            <ul class="list-unstyled mb-0">
              <li><a href="#">Bullet 1</a></li>
              <li><a href="#">Bullet 2</a></li>
              <li><a href="#">Bullet 3</a></li>
              <li><a href="#">Bullet 4</a></li>
              <li><a href="#">Bullet 5</a></li>
            </ul>
        </div>
        <div class="col-md ml-sm-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
    </div>
    <hr>
    <!-- /.row -->

    <!-- Science Article Content -->
    <div class="row">
        <div class="col-md-12">
            <h2>Science Article Title</h2>
        </div>
        <div class="col-md-4 mr-sm-auto">
            <ul class="list-unstyled mb-0">
              <li><a href="#">Bullet 1</a></li>
              <li><a href="#">Bullet 2</a></li>
              <li><a href="#">Bullet 3</a></li>
              <li><a href="#">Bullet 4</a></li>
              <li><a href="#">Bullet 5</a></li>
            </ul>
        </div>
        <div class="col-md ml-sm-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
    </div>
    <hr>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
        <div class="col-lg-3">
            <h2>Modern Business Features</h2>
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
              <li>
                <strong>Bootstrap v4</strong>
              </li>
              <li>jQuery</li>
              <li>Font Awesome</li>
              <li>Working contact form with validation</li>
              <li>Unstyled page elements for easy customization</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-3 ml-auto">
            <h2>Modern Business Features</h2>
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
              <li>
                <strong>Bootstrap v4</strong>
              </li>
              <li>jQuery</li>
              <li>Font Awesome</li>
              <li>Working contact form with validation</li>
              <li>Unstyled page elements for easy customization</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-3 ml-auto">
            <h2>Modern Business Features</h2>
            <p>The Modern Business template by Start Bootstrap includes:</p>
            <ul>
              <li>
                <strong>Bootstrap v4</strong>
              </li>
              <li>jQuery</li>
              <li>Font Awesome</li>
              <li>Working contact form with validation</li>
              <li>Unstyled page elements for easy customization</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
    </div>
    <!-- /.row -->

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
