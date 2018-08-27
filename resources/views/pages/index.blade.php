@extends('layouts.index')

@section('content')
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="/images/img1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Hire expert freelancers for any job, online</h1>
                <p>Millions of small businesses use Freelancer to turn their ideas into reality.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Get Started</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="/images/img2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>29 Million Professionals on demand.</h1>
                <p>Why hire people when you can simply integrate our talented cloud workforce instead?</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="/images/img3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Company Budget? Get more done for less.</h1>
                <p>Use our workforce of 29 million to help your business achieve more.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img5.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img4.PNG" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="rounded-circle" src="/images/img6.PNG" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
    
    
            <!-- START THE FEATURETTES -->
    
            <hr class="featurette-divider">
    
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/img8.jpg" alt="Generic placeholder image">
              </div>
            </div>
    
            <hr class="featurette-divider">
    
            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="/images/img9.jpg" alt="Generic placeholder image">
              </div>
            </div>
    
            <hr class="featurette-divider">
    
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="/images/img7.jpg" alt="Generic placeholder image">
              </div>
            </div>
    
            <hr class="featurette-divider">
    
            <!-- /END THE FEATURETTES -->
    
          </div><!-- /.container -->
    
    
          <!-- FOOTER -->
          <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2017-2018 The BlackLeo Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>
    </main>
@endsection