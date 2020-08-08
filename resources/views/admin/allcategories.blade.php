@extends('layouts.appadmin')

@section('content')

<?php
$categories = DB::table('categories')
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
                          Category Name
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <td>
                           {{$increment}}
                          </td>
                          <td>
                            {{$category->cat_Name}}
                          </td>
                          <td>
                          <a href = "editcat/{{$category->id}}" type="button" rel="tooltip" title="Edit Category" class="btn btn-primary btn-link btn-sm">
                                  <i class="material-icons">edit</i>
                              </a>
                                <a href = "#" type="button" rel="tooltip" title="Delete Category" class="btn btn-danger btn-link btn-sm">
                                  <i class="material-icons">delete</i>
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