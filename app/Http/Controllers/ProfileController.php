<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Session;
use Storage;
use DB;
class ProfileController extends Controller
{
    //
    public function saveprofile(Request $request){
        if(!$request->username||!$request->email||!$request->first_name||!$request->last_name||!$request->address||!$request->city||
        !$request->country||!$request->postal_code||!$request->category == 'Select your categories'||!$request->user_image||!$request->description){
            Session::put('error','All fields required');
        }

        $this->validate($request, [
            'username'=>'required',
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'postal_code'=>'required',
            'category'=>'required',
            'user_image'=>'nullable|max:1999',
            'description'=>'required'
            ]);

        if($request->hasFile('user_image')){
            $fileNameE = $request->file('user_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameE, PATHINFO_FILENAME);
            $extension = $request->file('user_image')->getClientOriginalExtension();
            $toStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('user_image')->storeAs('public/cover_images',$toStore);


        }
        else{
            $toStore ='noImage.jpg';
        }
       

        $profile = new Profile();
        $profile->username = $request->username;
        $profile->email =$request->email;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->address = $request->address;
        $profile->city = $request->city;
        $profile->country = $request->country;
        $profile->postal_code  = $request->postal_code;
        $profile->description = $request->description;
        $profile->category = $request->category;
        $profile->image = $toStore;
        
        $profile->save();
        return redirect('/userprofile');
        // print('save profile here');
    }
    public function editpro($id){
        $profile = Profile::find($id);
        return view('admin.editprofile')->with('profile',$profile);
    }
    public function update(Request $request, $id){
        
        if(!$request->username||!$request->email||!$request->first_name||!$request->last_name||!$request->address||!$request->city||
        !$request->country||!$request->postal_code||!$request->category == 'Select your categories'||!$request->user_image||!$request->description){
            Session::put('error','All fields required');
        }

        $this->validate($request, [
            'username'=>'required',
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'postal_code'=>'required',
            'category'=>'required',
            'user_image'=>'nullable|max:1999',
            'description'=>'required'
            ]);

            $profile = Profile::find($id);    
            $profile->username = $request->username;
            $profile->email =$request->email;
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->address = $request->address;
            $profile->city = $request->city;
            $profile->country = $request->country;
            $profile->postal_code  = $request->postal_code;
            $profile->description = $request->description;
            $profile->category = $request->category;
            

            if($request->hasFile('user_image')){
                $fileNameE = $request->file('user_image')->getClientOriginalName();
                $fileName = pathinfo($fileNameE, PATHINFO_FILENAME);
                $extension = $request->file('user_image')->getClientOriginalExtension();
                $toStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('user_image')->storeAs('public/cover_images',$toStore);
                $profile->image = $toStore;
            }

            $old_image = DB::table('profiles')
                        ->where('id', $profile->id)
                        ->first();
            
            if($old_image->image != 'noImage.jpg'){
                Storage::delete('public/storage/cover_images/'.$old_image->image);
            }
            
            $profile->update();
            return redirect()->back();

        // print('this is the update');

    }
    public function delete($id){
        $profile = Profile::find($id);
        $profile->status =0;

        // if($profile->image != 'noImage.jpg'){
        //     Storage::delete('public/storage/cover_images/'.$profile->image);
        // }
        
        $profile->update();

        Session::put('message','this item has been trashed successfully');

        return redirect()->back();

    }
    public function restore($id){
        $profile = Profile::find($id);
        $profile->status =1;

        // if($profile->image != 'noImage.jpg'){
        //     Storage::delete('public/storage/cover_images/'.$profile->image);
        // }
        
        $profile->update();
        return redirect()->back();

    }
    public function remove($id){
        $profile = Profile::find($id);

        if($profile->image != 'noImage.jpg'){
            Storage::delete('public/storage/cover_images/'.$profile->image);
        }

        $profile->delete();
        return redirect()->back();
    }
    public function displayprofileforuser(Request $request, $id){
        if(!$request->username||!$request->email||!$request->first_name||!$request->last_name||!$request->address||!$request->city||
        !$request->country||!$request->postal_code||!$request->category == 'Select your categories'||!$request->user_image||!$request->description){
            Session::put('error','All fields required');
        }

        $this->validate($request, [
            'username'=>'required',
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'postal_code'=>'required',
            'category'=>'required',
            'user_image'=>'nullable|max:1999',
            'description'=>'required'
            ]);

            $profile = Profile::find($id);    
            $profile->username = $request->username;
            $profile->email =$request->email;
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->address = $request->address;
            $profile->city = $request->city;
            $profile->country = $request->country;
            $profile->postal_code  = $request->postal_code;
            $profile->description = $request->description;
            $profile->category = $request->category;
            

            if($request->hasFile('user_image')){
                $fileNameE = $request->file('user_image')->getClientOriginalName();
                $fileName = pathinfo($fileNameE, PATHINFO_FILENAME);
                $extension = $request->file('user_image')->getClientOriginalExtension();
                $toStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('user_image')->storeAs('public/cover_images',$toStore);
                $profile->image = $toStore;
            }

            $old_image = DB::table('profiles')
                        ->where('id', $profile->id)
                        ->first();
            
            if($old_image->image != 'noImage.jpg'){
                Storage::delete('public/storage/cover_images/'.$old_image->image);
            }
            
            $profile->update();
            return redirect()->back();
    }
}
