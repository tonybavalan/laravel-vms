@extends('layouts.app')

@section('title', 'Sites')

@section('content')		
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Site Allocation</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<hr/>

			<div class="container">
				<div class="main-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-body">
									<h4>Supervisor</h4><hr />
									<ul class="list-group list-group-flush">
									@foreach($managers as $manager)
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0">
												<img src="assets/images/avatars/avatar-1.png" width="50" height="50" class="rounded-circle" alt="" onerror="this.src='{{ asset('assets/images/sites/beaverton.jpg') }}'"/>
												{{$manager->name}}
											</h6>
											<span class="text-secondary">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="staff">
												</div>
											</span>
										</li>
									@endforeach
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<h4>Site List</h4><hr />
									<ul class="list-group list-group-flush">
									@foreach($sites as $site)
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0">
												<img src="assets/images/sites/beaverton.jpg" width="50" height="50" class="rounded-circle" alt="" onerror="this.src='{{ asset('assets/images/sites/beaverton.jpg') }}'"/>
												Beaverton Court
											</h6>
											<span class="text-secondary">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
												</div>
											</span>
										</li>
									@endforeach
									<br />
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-3">
							
						</div>
						<div class="col-9">
							<button class="btn btn-primary success" type="button">Save Site Allocation</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end page wrapper -->
@endsection

@pushOnce('scripts')
@endpushOnce