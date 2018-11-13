@extends('layouts.default')

@section('content')

<!-- contactus start here -->
<div class="contactus">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
				<h4>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i> 
					Contact us
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
					<i class="icon_star_alt"></i>
				</h4>
				<p>Pellentesque sed posuere nisi. Nunc nec looreet mauris.</p>
			</div>
			<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
				<form method="post" enctype="multipart/form-data" class="form-horizontal">
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Name *">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" name="email" value="" id="input-email" class="form-control" placeholder="Email *">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="subject" value="" id="input-subject" class="form-control" placeholder="Subject *">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 col-md-12 col-xs-12">
							<i class="icofont icofont-pencil-alt-5"></i>
							<textarea name="enquiry" id="input-enquiry" class="form-control" placeholder="Your Comment"></textarea>
						</div>
					</div>
					<div class="buttons text-right">
						<input class="btn btn-primary" type="submit" value="Send Message">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
