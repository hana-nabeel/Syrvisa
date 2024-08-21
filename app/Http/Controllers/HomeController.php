<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showCategories()
    {
        $categries = Services::all();
        return view('home', compact('categries'));
    }
    public function adminCreateCategory()
    {
        return view('admin.services.create');
    }
    public function adminCategoryStore(Request $request)
    {
        // dd($request);
        $category = new Services();
        $category->service_name = $request->service_name;
        $imageUrl = $request->file('service_image')->store('categories', 'public');
        $category->service_image = $imageUrl;
        $category->save();
        return redirect()->route('home')->with('status', "Service Created Successfully");
    }
    public function adminEditCategory($id)
    {
        $category = Services::find($id);
        return view('admin.services.edit', compact('category'));
    }
    public function adminCategoryUpdate(Request $request,$id){
$category=Services::find($id);
    if($request->hasFile('service_image')){
        Storage::disk('public')->delete($category->service_image);
        $imageUrl=$request->file('service_image')->store('categories','public');
        $category->update([
            'service_image'=>$imageUrl,
        ]);
    }
    $category->update([
        'service_name'=>$request->service_name
    ]);
    return redirect()->route('home')->with('status','Service Updated Successfully');
}
    public function adminDeleteCategory($id)
    {
        $category = Services::find($id);
        return view('admin.services.delete', compact('category'));
    }
    public function adminCategoryDestroy($id){
$category=Services::find($id);

    $category->delete();
    return redirect()->route('home')->with('status','Service Deleted Successfully');
}

    
}
