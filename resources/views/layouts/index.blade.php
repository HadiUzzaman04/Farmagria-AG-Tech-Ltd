@extends('layouts.master')
@section('content')
<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Feel free to give us a message</h1>
                            <a href="{{route('contactus')}}" class="section-btn btn btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Take a look at the services we provide</h1>
                            <a href="{{route('allservice')}}" class="section-btn btn btn-default">Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>To know more about us</h1>
                            <a href="{{route('aboutus')}}" class="section-btn btn btn-default">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <h2>About us</h2>
                        <p class="lead">Farmagria Ag Tech Ltd is an organization specialized in the fields of Information Technology. We provide a wide range of services that can branch out from business management, custom software, Android & iOS applications, e-commerce, web development to many more. We are proud of the fact that we have teams that are highly skilled and professional when it comes to providing services. At Farmagria Ag Tech Ltd , we make sure that we understand our clients every requirement and provide them with their desired output, even better.</p>
                    </div>
                </div>
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

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Testimonials <small>from around the world</small></h2>
                    </div>
                    <div class="owl-carousel owl-theme owl-client">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/user.png" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Jackson</h4>
                                </div>
                                <p>"Farmagria Ag Tech Ltd. has provided a high level Web Development service at a time in our business when it was sorely needed."</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/user.png" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Camila</h4>
                                </div>
                                <p>"I have been very satisfied with the Domain Hosting services they have provided for my business with lot of facalities."</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/user.png" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Barbie</h4>
                                </div>
                                <p>"We have been very happy and satisfied with their highly professional ERP System in preparing our monthly accounts."</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="images/user.png" class="img-responsive" alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Jhon</h4>
                                </div>
                                <p>"I needed to bring my company website up to date fast and Farmagria Ag Tech Ltd really delivered in doing that."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <form id="contact-form" role="form" action="{{route('contactus.store')}}" method="post">
                    @csrf
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                        <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                        <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="send message" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="contact-image">
                    <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection