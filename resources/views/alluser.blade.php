@extends('layout.dashlayout')
@section('alluser')
<div id="page-wrapper">
                  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           All Other Users Details..
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profiles as $profile)
                                    @if($profile['name']!=Auth::user()->name)
                                    <tr class="odd gradeX">
                                        <td>{{$profile['name']}}</td>
                                        <td>{{$profile['age']}}</td>
                                        <td>{{$profile['address']}}</td>
                                        <td>{{$profile['email']}}</td>
                                        <td><img src="{{URL::asset('upload/'.$profile['photo'])}}" width="50px" height="50px"/></td>
                                    </tr>
                                    @endif
                                 @endforeach
                                </tbody>
                            </table>
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
    </div>
        </div>
@endsection