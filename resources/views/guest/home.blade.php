@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="css/pages/blog_magazine.css">
@stop

@section('content')
<div class="container content">
    <div class="row magazine-page">
        <!-- Begin Content -->
        <div class="col-md-9">
            <!-- Magazine Slider -->
            <div class="carousel slide carousel-v1 margin-bottom-40" id="myCarousel-1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="img/posts/2.jpg">
                        <div class="carousel-caption">
                            <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="img/posts/1.jpg">
                        <div class="carousel-caption">
                            <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="img/posts/3.jpg">
                        <div class="carousel-caption">
                            <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel-1" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel-1" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <!-- End Magazine Slider -->

            <!-- Magazine News -->
            <div class="magazine-news">
                <div class="row">
                    <div class="col-md-6">
                        <div class="magazine-news-img">
                            <a href="#"><img class="img-responsive" src="img/main/9.jpg" alt=""></a>
                            <span class="magazine-badge label-red">Travel</span>
                        </div>
                        <h3><a href="#">Simelque Untine Culpaqui Officia Deserunt Blanditiis Praesentium</a></h3>
                        <div class="by-author">
                            <strong>By Jack Villo</strong>
                            <span>/ September 19, 2013</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate...</p>
                    </div>
                    <div class="col-md-6">
                        <div class="magazine-news-img">
                            <a href="#"><img class="img-responsive" src="img/main/10.jpg" alt=""></a>
                            <span class="magazine-badge label-blue">Event</span>
                        </div>
                        <h3><a href="#">Simelque Untine Culpaqui Officia Deserunt Blanditiis Praesentium</a></h3>
                        <div class="by-author">
                            <strong>By Admin</strong>
                            <span>/ September 19, 2013</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate...</p>
                    </div>
                </div>
            </div>
            <!-- End Magazine News -->

            <div class="margin-bottom-35"><hr class="hr-md"></div>

            <!-- Magazine News -->
            <div class="magazine-news">
                <div class="row">
                    <div class="col-md-6">
                        <div class="magazine-news-img">
                            <a href="#"><img class="img-responsive" src="img/main/7.jpg" alt=""></a>
                            <span class="magazine-badge label-yellow">Media</span>
                        </div>
                        <h3><a href="#">Simelque Untine Culpaqui Officia Deserunt Blanditiis Praesentium</a></h3>
                        <div class="by-author">
                            <strong>By Jack Villo</strong>
                            <span>/ September 19, 2013</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate...</p>
                    </div>
                    <div class="col-md-6">
                        <div class="magazine-news-img">
                            <a href="#"><img class="img-responsive" src="img/main/11.jpg" alt=""></a>
                            <span class="magazine-badge label-green">Education</span>
                        </div>
                        <h3><a href="#">Simelque Untine Culpaqui Officia Deserunt Blanditiis Praesentium</a></h3>
                        <div class="by-author">
                            <strong>By Admin</strong>
                            <span>/ September 19, 2013</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate...</p>
                    </div>
                </div>
            </div>
            <!-- End Magazine News -->

            <div class="margin-bottom-35"><hr class="hr-md"></div>

            <!-- Magazine News -->
            <div class="magazine-news">
                <div class="row">
                    <div class="col-md-6">
                        <div class="magazine-news-img">
                            <a href="#"><img class="img-responsive" src="img/main/3.jpg" alt=""></a>
                            <span class="magazine-badge label-purple">Media</span>
                        </div>
                        <h3><a href="#">Simelque Untine Culpaqui Officia Deserunt Blanditiis Praesentium</a></h3>
                        <div class="by-author">
                            <strong>By Jack Villo</strong>
                            <span>/ September 19, 2013</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate...</p>
                    </div>
                    <div class="col-md-6">
                        <div class="magazine-news-img">
                            <a href="#"><img class="img-responsive" src="img/main/5.jpg" alt=""></a>
                            <span class="magazine-badge label-dark-blue">Education</span>
                        </div>
                        <h3><a href="#">Simelque Untine Culpaqui Officia Deserunt Blanditiis Praesentium</a></h3>
                        <div class="by-author">
                            <strong>By Admin</strong>
                            <span>/ September 19, 2013</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate...</p>
                    </div>
                </div>
            </div>
            <!-- End Magazine News -->

            <div class="text-center">
                <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="active"><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- End Content -->

        <!-- Begin Sidebar -->
        <div class="col-md-3">
            <!-- Magazine Posts -->
            <div class="row margin-bottom-40">
                <div class="magazine-posts col-md-12 col-sm-6 margin-bottom-30">
                    <h3><a href="#">Bootstrap 3 Template</a></h3>
                    <span><i class="color-green">By htmlstream</i> / March 19, 2014</span>
                    <div class="magazine-posts-img">
                        <a href="#"><img class="img-responsive" src="img/main/10.jpg" alt=""></a>
                        <span class="magazine-badge magazine-badge-red">Unify</span>
                    </div>
                </div>
                <div class="magazine-posts col-md-12 col-sm-6">
                    <h3><a href="#">Parralax One Page</a></h3>
                    <span><i class="color-green">By Taylor Miller</i> / July 19, 2014</span>
                    <div class="magazine-posts-img">
                        <a href="#"><img class="img-responsive" src="img/main/1.jpg" alt=""></a>
                        <span class="magazine-badge magazine-badge-green">Bootstrap 3</span>
                    </div>
                </div>
            </div>
            <!-- End Magazine Posts -->

            <!-- Quick Links -->
            <div class="magazine-sb-categories margin-bottom-20">
                <div class="headline headline-md"><h2>Quick Links</h2></div>
                <div class="row">
                    <ul class="list-unstyled col-xs-6">
                        <li><a href="#">Revolution Slider</a></li>
                        <li><a href="#">Parralax Page</a></li>
                        <li><a href="#">Backgrounds</a></li>
                        <li><a href="#">Parralax Slider</a></li>
                        <li><a href="#">Responsive</a></li>
                        <li><a href="#">Bootstrap 3x</a></li>
                    </ul>
                    <ul class="list-unstyled col-xs-6">
                        <li><a href="#">50+ Valid Pages</a></li>
                        <li><a href="#">Layer Slider</a></li>
                        <li><a href="#">Bootstrap 2x</a></li>
                        <li><a href="#">Fixed Header</a></li>
                        <li><a href="#">Best Template</a></li>
                        <li><a href="#">And Many More</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Quick Links -->

            <!-- Photo Stream -->
            <div class="headline"><h2>Photo Stream</h2></div>
            <ul class="list-unstyled blog-photos margin-bottom-35">
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/5.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/6.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/8.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/10.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/11.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/1.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/2.jpg"></a></li>
                <li><a href="#"><img class="hover-effect" alt="" src="img/sliders/elastislide/7.jpg"></a></li>
            </ul>
            <!-- End Photo Stream -->

            <!-- Latest News -->
            <div class="margin-bottom-40">
                <div class="magazine-mini-news">
                    <h3><a href="#">Blanditiis Praesentium Volupeto</a></h3>
                    <div class="post-author">
                        <strong>By Adam Bvio</strong>
                        <span>/ September 19, 2013</span>
                    </div>
                    <p>At vero eos et accusamus et iusto odiodig nissimos ducimus usce condimentum eleifend enim a feugiat.</p>
                </div>
                <hr class="hr-md">
                <div class="magazine-mini-news">
                    <h3><a href="#">Blanditiis Praesentium Volupeto</a></h3>
                    <div class="post-author">
                        <strong>By Kate Baur</strong>
                        <span>/ September 19, 2013</span>
                    </div>
                    <p>At vero eos et accusamus et iusto odiodig nissimos ducimus usce condimentum eleifend enim a feugiat.</p>
                </div>
                <hr class="hr-md">
                <div class="magazine-mini-news">
                    <h3><a href="#">Blanditiis Praesentium Volupeto</a></h3>
                    <div class="post-author">
                        <strong>By Admin</strong>
                        <span>/ September 19, 2013</span>
                    </div>
                    <p>At vero eos et accusamus et iusto odiodig nissimos ducimus usce condimentum eleifend enim a feugiat.</p>
                </div>
            </div>
            <!-- End Latest News -->
        </div>
        <!-- End Sidebar -->
    </div>
</div><!--/container-->
@stop