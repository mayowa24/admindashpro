@extends('layouts.appadmin')

@section('content')

<?php
$profiles = DB::table('profiles')
            ->where('status',0)
            ->get();

    $increment = 1;
?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($profiles as $profile)
                        <tr>
                          <td>
                           {{$increment}}
                          </td>
                          <td>
                          <img src="{{asset("/storage/cover_images/$profile->image")}}" alt="" style="height:50px; width:50px; border-radius:50%">
                            
                          </td>
                          <td>
                            {{$profile->username}}
                          </td>
                          <td>
                            {{$profile->email}}
                          </td>
                          <td>
                            {{$profile->first_name.' '.$profile->last_name}}
                          </td>
                          <td>
                            {{$profile->country}}
                          </td>
                          <td>
                              <a href = "restore/{{$profile->id}}" type="button" rel="tooltip" title="Edit Category" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">Restore</i>
                              </a>
                              <a href = "remove/{{$profile->id}}" type="button" rel="tooltip" title="Edit Category" class="btn btn-primary btn-link btn-sm" id ="delete1">
                                <i class="material-icons">Remove</i>
                            </a>
                                  
                          </td>
                        </tr>
                        <?php
                          $increment = $increment + 1;
                        ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
@endsection