@extends('layouts.admin.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage Messages</h3>
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


              <div class="clearfix"></div>
            </div>

            <div class="x_content">


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title"># </th>
                      <th class="column-title">first name</th>
                      <th class="column-title">last name</th>
                      <th class="column-title">email</th>
                      <th class="column-title">message</th>
                      <th class="column-title no-link last"><span class="nobr">Action</span>
                      </th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($messages as $index=>$message)
                    <tr class="even pointer">

                      <td>{{$index+1}}</td>
                      <td >{{$message->first_name}}</td>
                      <td >{{$message->last_name}}</td>
                      <td >{{$message->email}}</td>
                      <td >{{$message->message}}</td>
                      <td>
                        <div class="row">

                            <form action="{{ route('admin.message.destroy', $message->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-default"><i class="fa fa-trash"></i> Delete</button>
                            </form>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $messages->links() }}
              </div>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
