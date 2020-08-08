@extends('layouts.appadmin')

@section('content')
<div class="content">
    <p class="alert alert-error"> 
        {{-- @if(Session::has('error')) --}}
    </p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  {{-- <form> --}}
                      {!!Form::open(['action'=>'ProfileController@saveprofile','method'=>'POST',
                      'enctype'=>'multipart/form-data'])!!}
                      {{csrf_field()}}
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            {{Form::label('','Username',['class'=>'bmd-label-floating'])}}
                            {{Form::text('username','',['class'=>'form-control'])}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            {{Form::label('','Email Address',['class'=>'bmd-label-floating'])}}
                            {{Form::email('email','',['class'=>'form-control'])}}
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          {{Form::label('','Fist Name',['class'=>'bmd-label-floating'])}}
                          {{Form::text('first_name','',['class'=>'form-control'])}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          {{Form::label('','Last Name',['class'=>'bmd-label-floating'])}}
                          {{Form::text('last_name','',['class'=>'form-control'])}}
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          {{Form::label('','Address',['class'=>'bmd-label-floating'])}}
                          {{Form::text('address','',['class'=>'form-control'])}}
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          {{Form::label('','City',['class'=>'bmd-label-floating'])}}
                          {{Form::text('city','',['class'=>'form-control'])}}

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          {{Form::label('','Country',['class'=>'bmd-label-floating'])}}
                          {{Form::text('country','',['class'=>'form-control'])}}
                          
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          
                          {{Form::label('','Postal Code',['class'=>'bmd-label-floating'])}}
                          {{Form::text('postal_code','',['class'=>'form-control'])}}
                          
                        </div>
                      </div>
                    </div>

                    <?php $categories = DB::table('categories')
                                        ->get()?>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="bmd-label-floating">Category</label>
                            <select name="category" class="form-control">
                                <option value="">Select your categories</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->cat_Name}}">{{$category->cat_Name}}</option>
                                @endforeach
                            </select>
                            {{-- {{Form::label('','Category',['class'=>'bmd-label-floating'])}}
                            {{Form::}} --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {{Form::file('user_image',['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                                                        
                            {{Form::textarea('description','',['class'=>'form-control', 'row'=>'5','id'=>'editor'])}}
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- <button type="submit" class="btn btn-primary pull-right">Update Profile</button> --}}
                    {{Form::submit('Create Profile',['class'=>'btn btn-primary pull-right'])}}
                    {{-- <div class="clearfix"></div> --}}
                    {!!Form::close()!!}
                  {{-- </form> --}}
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="backend/assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection