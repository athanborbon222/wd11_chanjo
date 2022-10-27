<?php

namespace App\Http\Controllers;
use App\Models\Images;
use Illuminate\Http\Request;

class StoreImageController extends Controller
{
    //
    public function create(){
        return view('admin/image.shopimage');
    }
    
    public function store(Request $request){
        $data = new Images();
        if ($request->file('storeImages')){
            $file = $request->file('storeImages');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('ShopImage/'), $filename);
            $data['storeImages'] = $filename;
        }
        $data->save();
        return redirect()->route('image.show');
    }

    public function show(){
        $imageData = Images::all();
        return view('admin.StoreManagement')->with('imageData', $imageData);
    }

    public function delete($id)
    {
        //
        Images::delete($id);
        return redirect('admin.StoreManagement');
    }
}
