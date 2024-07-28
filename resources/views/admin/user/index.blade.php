@extends('layouts.admin.app')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Manage <small>Users</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>List of Users</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a href="{{route('admin.users.create')}}"><b>add user</b></a>
                </li>
                </li>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Registration Date</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->created_at->format('Y-m-d')}}</td>
                        <td>{{$user->full_name}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <div class="row">
                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-default"><i class="fa fa-edit"> Edit</i></a>

                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-default"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
              {{ $users->links() }}
            </div>
            </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
