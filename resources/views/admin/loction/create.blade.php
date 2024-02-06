@extends('admin.layouts.app')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

    <div class="main-panel">
			<div class="content">
				<div class="page-inner">
							<div class="card card-with-nav">
								<div class="card-body">
									<form action="{{ route('storeloction') }}" method="POST" enctype="multipart/form-data">
                        				@csrf
									<div class="row mt-3">
										<div class="col-md-6">
												<label>Country</label>
												<input type="text" class="form-control" name="country" placeholder="Country">
									</div>

										<div class="col-md-6">
												<label>State</label>
												<input type="text" class="form-control" name="state" placeholder="State">
										</div>

										<div class="col-md-6">
												<label>City</label>
												<input type="text" class="form-control" name="city" placeholder="City">
									</div>
									

									<div class="col-md-6">
												<label>Loction Image</label>
												<input type="file" class="form-control" name="image" placeholder="Upload Loction Image">
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
				</div>
			</section>
		</main>


@endsection