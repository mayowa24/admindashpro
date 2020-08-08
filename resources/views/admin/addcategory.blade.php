@extends('layouts.appadmin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-category">add the category here</p>
                </div>
                <div class="card-body">
                  
                    {!!Form::open(['action'=>'CategoryController@savecate','method'=>'POST'])!!}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            {{Form::label('','Category',['class'=>'bmd-label-floating'])}}
                          {{-- <label class="bmd-label-floating">Category</label> --}}
                          {{-- <input type="text" class="form-control" name="cat_Name"> --}}
                          {{Form::text('cat_Name','',['class'=>'form-control'])}}
                        </div>
                      </div>
                    </div>
                    
                    {{-- <button type="submit" class="btn btn-primary pull-right">Create Category</button> --}}
                    {{Form::submit('Create Category',['class'=>'btn btn-primary pull-right'])}}
                    <div class="clearfix"></div>
                    {!!Form::close()!!}
                  {{-- 77879004574065710 --}}
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
@endsection