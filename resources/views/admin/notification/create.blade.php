@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Notification</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
<section class="content">
                <div class="container-fluid">

                    <div class="card card-primary">
                        <form id="game" action="{{route('storenotification')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="card-body">
                                <div class="form-group col">
                                    <label>Title * </label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                
                                <div class="form-group col mt-3">
                                    <label>Image *</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" placeholder="Upload File" name="image" id="file">
                                    </div>
                                </div>
                                
                                <div class="form-group col mt-3">
                                    <label>Message * </label>
                                    <input required="" type="text" class="form-control" name="message">
                                </div>

                                <div class="form-group col mt-3">
                                    <label>Click Action * </label>
                                    <input type="text" class="form-control" name="click_action">
                                </div>

                                <div class="form-group col mt-3">
                                    <label>Destination * </label>
                                    <input type="text" class="form-control" name="destination">
                                </div>

                                <div class="form-group col mt-3">
                                    <label>Payload * </label>
                                    <input type="text" class="form-control" name="payload">
                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-primary" type="submit" id="submitBtn" fdprocessedid="k9rt9k">
                                        Send Notification
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div><!-- /.container-fluid -->
            </section>



            @endsection