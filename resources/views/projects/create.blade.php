

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
	<section>
		<div class="container">
			<form method="post" action="{{route('projects.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Project Name</label>
					<input type="text" name="project_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Project password</label>
					<input type="password" name="project_password" class="form-control">
				</div>
				<div class="form-group">
					<label>Project File</label>
					<input type="file" name="project_file" class="form-control">
				</div>
				<div class="form-group">
					<label>Project time</label>
					<input type="time" name="project_time" class="form-control">
				</div>
				<div class="form-group">
					<label>Projects tags</label>
					<select multiple="" name="project_tags[]">
						<option value="it">IT</option>
						<option value="accounts">Accounts</option>
						<option value="hr">HR</option>
						<option value="student">Student</option>
					</select>
				</div>
				<button>SUbmit</button>
			</form>
				
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('select').select2();
		});
	</script>
</body>
</html>