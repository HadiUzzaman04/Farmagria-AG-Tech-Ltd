<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Faker\Provider\Base;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends BaseController
{
   public function index()
   {
        return view('layouts.index');
   }
   public function aboutus()
   {
        return view('layouts.page.aboutus');
   }
   public function testimonial()
   {
        return view('layouts.page.testimonial');
   }
   public function webdevelopment()
   {
        return view('layouts.page.webdevelopment');
   }
   public function appdevelopment()
   {
        return view('layouts.page.appdevelopment');
   }
   public function erp()
   {
        return view('layouts.page.erpdevelopment');
   }
   public function website()
   {
        return view('layouts.page.websitedesign');
   }
   public function software()
   {
        return view('layouts.page.softwaredevelopment');
   }
   public function hosting()
   {
        return view('layouts.page.domainhosting');
   }
   public function allservice()
   {
        return view('layouts.page.allservice');
   }
}
