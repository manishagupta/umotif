<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Screening</h3>
						<div class="card-body">
							<form  method="POST" action="user/store">
								@csrf
								<div class="form-group mb-3">
									<label class="form-label" for="name"><b>First Name</b></label>
									  
									<input type="text" placeholder="First Name" id="name" class="form-control" name="name" required autofocus>
								</div>

								<div class="form-group mb-3">
									<label class="form-label" for="dob"><b>Date Of Birth</b></label>
								
									<input type="date" id="dob" class="form-control" name="dob" required autofocus>
								</div>

								<div class="form-group mb-3">
									<div class="form-group col-sm-10" data-toggle="tooltip" style="position:relative;">
										<label class="form-label" for="migrane_frequency"><b>Migrane Frequency</b></label>
									   <div class="radio">
											<input name="migrane_frequency" id="Monthly" value="monthly" type="radio" class="migrane_freq" required>
											<span class="me-3">Monthly</span>      
											<input name="migrane_frequency" id="Weekly" value="weekly" type="radio" class="migrane_freq">
											<span class="me-3">Weekly </span>         
											<input name="migrane_frequency" id="Daily" value="daily" type="radio"class="migrane_freq">
											Daily                                       
										</div>
									</div>
								</div>

								<div class="form-group mb-3">
									<div class="form-group col-sm-10 daily_freq" data-toggle="tooltip" style="display:none;" >
										<label class="form-label" for="daily_frequency"><b>Daily Frequency</b></label>
									   <div class="radio">
											<input name="daily_frequency" id="Monthly" value="1-2" class="me-1"type="radio" checked>
											<span class="me-3" >1-2</span> 
										
											<input name="daily_frequency" id="Weekly" value="3-4" type="radio">
											<span class="me-3" >3-4</span>
											<input name="daily_frequency" id="Daily" value="5+" type="radio">
												5+                                    
										</div>
									</div>
								</div>

								<div class="d-grid mx-auto">
									<button type="submit" class="btn btn-dark btn-block">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
        </div>
    </div>
</main>


<script>

$(document).ready(function(){
	//alert('jhjk');
	$('.migrane_freq').on('change',function(){
		if($('.migrane_freq:checked').val()=='daily'){
			$('.daily_freq').show();
		} else {
			$('.daily_freq').hide();
		}
	});
});
</script>