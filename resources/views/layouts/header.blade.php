<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <div class="logo">
               <a href="{{route('home')}}"> <img src="{{asset('website/images/logo_260x80.jpg')}}" alt="Venue Logo"></a> 
            </div>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="{{route('webdevelopment')}}">Web Development</a></li>
                        <li><a href="{{route('appdevelopment')}}">Mobile App Development</a></li>
                        <li><a href="{{route('erp')}}">ERP Development</a></li>
                        <li><a href="{{route('websitedesign')}}">Website Design</a></li>
                        <li><a href="{{route('software')}}">Software Development</a></li>
                        <li><a href="{{route('hosting')}}">Domain Hosting</a></li>
                    </ul>
                </li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{route('contactus')}}">Contact Us</a></li>
                <li><a href="{{route('testimonial')}}">Testimonials</a></li>
            </ul>
        </div>

    </div>
</section>