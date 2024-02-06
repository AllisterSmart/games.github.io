@extends('admin.layouts.app')

@section('content')


     <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>

<div class="container mt-5">
    <!-- <h3 style="text-align: center;">Add Purchase Projects</h3> -->
    <div class="myform mt-5">
                    <form action="{{ route('updateadmin')}}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        
                        <div class="row">
                            @foreach($adminsetting as $admin)
                                   @endforeach
                        <div class="form-group col-md-6">
                            <label for="">Your Name</label>
                            <input type="text" name="name" class="form-control" value="{{$admin->name}}"><br>
                            <input type="hidden" name="id" value="{{$admin->id}}">
                            @error('name')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="">Your Email</label>
                            <input type="email" name="email" class="form-control" value="{{$admin->email}}"><br>
                            <input type="hidden" name="id" value="{{$admin->id}}">
                            @error('email')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="">Change Password</label>
                            <input type="password" name="password" class="form-control" value=""><br>
                            <input type="hidden" name="id" value="{{$admin->id}}">
                            @error('password')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                        </div>
                    </div>
                
                        <div class=" mt-3 mb-3">
                            <button type="submit" class="btn btn-primary">Update Account</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection