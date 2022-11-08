@extends('layouts.master')
@section('content')
<section style="background-image: url({{url('website/images/bannar.jpg')}}); background-repeat: no-repeat; 
background-size:cover; background-position:center;">
     <div class="container">
          <div class="text-center">
               <h1>Testimonials</h1>
          </div>
     </div>
</section>
<section id="testimonial" class="section-background">
     <div class="container">
          <div class="row">
               <div class="col-sm-4 col-xs-12">
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
               <div class="col-sm-4 col-xs-12">
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
               <div class="col-sm-4 col-xs-12">
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
          </div>
          <div class="row">
               <div class="col-sm-4 col-xs-12">
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
               <div class="col-sm-4 col-xs-12">
                    <div class="item">
                         <div class="tst-image">
                              <img src="images/user.png" class="img-responsive" alt="">
                         </div>
                         <div class="tst-author">
                              <h4>Smith</h4>
                         </div>
                         <p>"Depth of knowledge with both Website design and Mobile application has proven invaluable for my business."</p>
                    </div>
               </div>
               <div class="col-sm-4 col-xs-12">
                    <div class="item">
                         <div class="tst-image">
                              <img src="images/user.png" class="img-responsive" alt="">
                         </div>
                         <div class="tst-author">
                              <h4>Tom</h4>
                         </div>
                         <p>"Where their services have really hit the mark is with the level of financial insight that we now have into the business."</p>
                    </div>
               </div>
          </div>
     </div>
</section>
@endsection