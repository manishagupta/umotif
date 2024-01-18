<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Result</h3>
                    <div class="card-body">
						<div class="form-group mb-3">
							<label class="form-label" for="emp_name">
								<b>  
								@if (session('message'))
									<div class="alert">{{ session('message') }}</div>
								@endif
								</b>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</main>
