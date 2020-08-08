<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use App\Profile;
class CategoryController extends Controller
{
    public function savecate(Request $request){
        $category = new Category();
        $category->cat_Name = $request->cat_Name;
        $category->save();
        return redirect('/category');
    }

    public function userprofile(){
        print('user profile works fine');
    }
    public function editcat($id){
        $category=Category::find($id);
        return view('admin.editcategory')->with('category', $category);
    }
    public function update(Request $request){
        // print('this is update olodo');
        $category = Category::find($request->id);
        $category->cat_Name = $request->cat_Name;
        $category->update();


        // $profile = Profile::where('category', '=', $request->old_cat_name);
        // $profile->category = $request->cat_Name;
        // $profile->update();
        $data = array();
        $data['category']= $request->cat_Name;

        DB::table('profiles')
            ->where('category',$request->old_cat_name)
            ->update($data);
        return redirect('/allcategories');

    }
    //
}
