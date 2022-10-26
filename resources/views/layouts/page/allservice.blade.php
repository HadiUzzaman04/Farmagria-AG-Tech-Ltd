@extends('layouts.master')
@section('content')

<section style="background-image: url({{url('website/images/bannar.jpg')}}); background-repeat: no-repeat; 
background-size:cover; background-position:center;">
     <div class="container">
          <div class="text-center">
               <h1>All Service</h1>
          </div>
     </div>
</section>

<section class="section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Services <small>Here are the list of services that we offer</small></h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img style="width: 360px; height: 250px" src="images/web-development.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="courses-detail">
                            <h3><a href="{{route('webdevelopment')}}">Web Development</a></h3>
                            <p>Web development services infer planning, building, integrating, scaling, and maintaining software that works through the internet.</p>
                        </div>
                        <div class="courses-info">
                            <a href="{{route('webdevelopment')}}" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img style="width: 360px; height: 250px" src="images/mobile-app-development.jpeg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="courses-detail">
                            <h3><a href="{{route('appdevelopment')}}">Mobile App Development</a></h3>
                            <p>Every time we start a project, we segmented it into different smaller sections to become easier to tackle and bring out the best output.</p>
                        </div>
                        <div class="courses-info">
                            <a href="{{route('appdevelopment')}}" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img style="width: 360px; height: 250px" src="images/erp.png" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="courses-detail">
                            <h3><a href="{{route('erp')}}">ERP Development</a></h3>
                            <p>Our designated teams at Farmagria have huge experience with ERP improvement and the formation of completely coordinated modules.</p>
                        </div>
                        <div class="courses-info">
                            <a href="{{route('erp')}}" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img style="width: 360px; height: 250px" src="images/website-design.png" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="courses-detail">
                            <h3><a href="{{route('websitedesign')}}">Website Design</a></h3>
                            <p>Our website developers give master web application improvement and website composition administrations to our customers.</p>
                        </div>
                        <div class="courses-info">
                            <a href="{{route('websitedesign')}}" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img style="width: 360px; height: 250px" src="images/Software-Development.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="courses-detail">
                            <h3><a href="{{route('software')}}">Software Development</a></h3>
                            <p>Being a software development service provider, we will help you transform your ideas into innovative solutions for your business.</p>
                        </div>

                        <div class="courses-info">
                            <a href="{{route('software')}}" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
                                <img style="width: 360px; height: 250px" src="images/domain-hosting.png" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="courses-detail">
                            <h3><a href="{{route('hosting')}}">Domain Hosting</a></h3>
                            <p>Cheap web hosting services that fit your needs. Do you run a professional business or a personal WordPress website? Get the best deals with us!</p>
                        </div>
                        <div class="courses-info">
                            <a href="{{route('hosting')}}" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection