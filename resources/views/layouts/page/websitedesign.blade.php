@extends('layouts.master')
@section('content')

<section style="background-image: url({{url('website/images/bannar.jpg')}}); background-repeat: no-repeat; 
background-size:cover; background-position:center;">
     <div class="container">
          <div class="text-center">
               <h1>Website Design</h1>
          </div>
     </div>
</section>

<section class="section-background">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                    <img src="images/website-design.png" class="img-responsive img-circle" alt="">
               </div>

               <div class="col-md-7 col-xs-12">
                    <div class="about-info">
                         <h2>Website Design</h2>

                         <figure>
                              <figcaption>
                                   <p>An inventory management system helps organizations account for all incoming and outgoing stock to better meet customer demand and avoid the expense of overstock or loss of business with stock outs. The system impacts every essential business function including accounting, production, warehouse management, purchasing, sales and customer service</p>
                              </figcaption>
                         </figure>
                    </div>
               </div>
          </div>
     </div>
</section>

<section>
     <div class="container">
          <div class="row">
               <div class="col-md-4 col-xs-12">
                    <img src="images/website-design.png" class="img-responsive img-circle" alt="">
               </div>

               <div class="col-md-offset-1 col-md-7 col-xs-12">
                    <div class="about-info">
                         <h2>Our Incredible Infrastructure</h2>

                         <figure>
                              <figcaption>
                                   <p>Website control handles products that are already in stock at the warehouse and plays a key role in supply chain management. Inventory control tools can categorize products by type, location and SKU, audit data, generate reports in real-time and search, filter and view products. For more on inventory control methods, including expert advice, see our “Essential Guide to Inventory Control.” Inventory Management: Inventory management features govern the data from other parts of the system, like inventory control. That’s not all; inventory management also handles business processes that occur before the stock arrives at a warehouse and how the inventory reaches other destinations. These features include tools for multi-location warehouse management and integrations with other software or enterprise resource planning platforms.</p>
                              </figcaption>
                         </figure>
                    </div>
               </div>
          </div>
     </div>
</section>


@endsection