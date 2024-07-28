@extends('layouts.admin.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage Testimonial</h3>
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
                <a href="{{route('admin.testimonials.create')}}"  > <h2>Add Testimonial</h2></a>


              <div class="clearfix"></div>
            </div>

            <div class="x_content">


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title"># </th>
                      <th class="column-title">Name</th>
                      <th class="column-title">Position</th>
                      <th class="column-title">Published</th>
                      <th class="column-title no-link last"><span class="nobr">Action</span>
                      </th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($testimonials as $index=>$testimonial)
                    <tr class="even pointer">

                      <td>{{$index+1}}</td>
                      <td >{{$testimonial->name}}</td>
                      <td >{{$testimonial->position}}</td>
                      <td >{{$testimonial->published == 1 ? 'yes' : 'No'}}</td>
                      <td>
                        <div class="row">
                            <a href="{{route('admin.testimonials.edit',$testimonial->id)}}" class="btn btn-default"><i class="fa fa-edit"> Edit</i></a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-default"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $testimonials->links() }}
              </div>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
