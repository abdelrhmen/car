@extends('layouts.admin.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage cars</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
                <a href="{{route('admin.car.create')}}"  > <h2>Add Car</h2></a>


              <div class="clearfix"></div>
            </div>

            <div class="x_content">


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title"># </th>
                      <th class="column-title">title</th>
                      <th class="column-title">price</th>
                      <th class="column-title">active</th>
                      <th class="column-title no-link last"><span class="nobr">Action</span>
                      </th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($cars as $index=>$car)
                    <tr class="even pointer">

                      <td>{{$index+1}}</td>
                      <td >{{$car->title}}</td>
                      <td >{{$car->price}}</td>
                      <td >{{$car->active == 1 ? 'yes' : 'No'}}</td>
                      <td>
                        <div class="row">

                            <a href="{{route('admin.car.edit',$car->id)}}" class="btn btn-default"><i class="fa fa-edit"> Edit</i></a>

                            <form action="{{ route('admin.car.destroy', $car->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-default"><i class="fa fa-trash"></i> Delete</button>
                            </form>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $cars->links() }}
              </div>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
