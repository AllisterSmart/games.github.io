@extends('admin.layouts.app')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                            <div class="card card-with-nav">
                                <div class="card-body">
									<form action="{{ route('storebanner') }}" method="POST" enctype="multipart/form-data">
                        				@csrf
									<div class="row mt-3">
										<div class="col-md-6">
												<label>Name</label>
												<input type="text" class="form-control" name="name" placeholder="Name">
										</div>

										<div class="col-md-6">
												<label>Heading</label>
												<input type="text" class="form-control" name="heading" placeholder="Heading">
									</div>

									<div class="col-md-6">
												<label>Content</label>
												<input type="text" class="form-control" name="content" placeholder="Content" >
									</div>

									<div class="col-md-6">
												<label>Banner</label>
												<input type="file" class="form-control" name="image" placeholder="Upload File">
									</div>
								</div>
									<div class="text-right mt-3 mb-3">
										<button type="submit" class="btn btn-success">Submit</button>
									</div>
								</form>
								</div>
							</div>
						</div>
</div>


@endsection