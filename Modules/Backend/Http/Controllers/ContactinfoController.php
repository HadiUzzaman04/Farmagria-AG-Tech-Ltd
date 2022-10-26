<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Address;

class ContactinfoController extends BaseController
{
   public function contactinfo()
   {
         $data =Address ::all();
        return view('backend::layouts.contactinfo', compact('data'));
   }
   public function create(Request $request)
   {
       $collection = collect(['address' => $request->address,'phone' => $request->phone,'email' => $request->email,]);
       Address::create($collection->all());
       return redirect()->back();
   }
   public function delete($id)
   {
       $data = Address::find($id);
       $data->delete();
       return redirect()->back();
   }
   public function edit($id)
   {
       $data = Address::find($id);
       return view('backend::layouts.editcontactinfo',compact('data'));
   }
   public function update(Request $request,$id)
    {
        $data = Address::find($id);
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->update();
        return redirect()->route('contactinfo');
    }
}
