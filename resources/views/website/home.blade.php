@extends('templates.website')
@section('content')
<section id="myCarousel" class="carousel slide">
	<!-- Indicadores -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        {{--<li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
    </ol>
	<!-- Imagenes del carrusel -->
    <div class="carousel-inner">
        <div class="item active">
           	<img src="/img/carrusel1.png" class="carousel"/>
        </div>
        {{--<div class="item">
           	<img src="" />
        </div>--}}
    </div>
    <!--Controles-->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</section>
<section class="container">
    <div class="row paneles">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <center>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="/blog">
                            <img src="/img/blog.jpg" class="img-responsive center-block"/>
                        </a>
                    </div>
                    <div class="panel-footer">
                        <h3>Blog</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, voluptas, sunt vitae mollitia iure perferendis rerum odio! Natus, cupiditate, est, quas, non perspiciatis in quo possimus eos voluptas tempore maxime.</p>
                        <a href="/blog">Ver mas</a>
                    </div>
                </div>
            </center>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <center>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="/img/sede.png" class="img-responsive center-block"/>
                    </div>
                    <div class="panel-footer">
                        <h3>Sedes</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, voluptas, sunt vitae mollitia iure perferendis rerum odio! Natus, cupiditate, est, quas, non perspiciatis in quo possimus eos voluptas tempore maxime.</p>
                        <a href="#">Ver mas</a>
                    </div>
                </div>
            </center>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <center>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="/img/programa.jpg" class="img-responsive center-block"/>
                    </div>
                    <div class="panel-footer">
                        <h3>Programas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, voluptas, sunt vitae mollitia iure perferendis rerum odio! Natus, cupiditate, est, quas, non perspiciatis in quo possimus eos voluptas tempore maxime.</p>
                        <a href="#">Ver mas</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</section>
@stop
@section('scripts')
<script type="text/javascript">
	$('.carousel').carousel({
        interval: 5000
    })
</script>
@stop