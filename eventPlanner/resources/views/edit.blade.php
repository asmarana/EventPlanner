<!DOCtype html>

	<head>
		
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>


	<body>
		

		<div class ="container">
			<h1 class="text-center">Update Data</h1>

			<form method="POST" action="/update/{{$posts->id}}">
				@csrf
				<div class ="mb-3">
					<label><b>Email</b></label>
					<input type ="text" name="email" class="form-control" value={{$posts->email}}>
				</div>
				<div class ="mb-3">
					<label><b>Password</b></label>
					<input type ="text" name="password" class="form-control" value={{$posts->password}}>
				</div>
				<input type ="submit" name="updated" value="Update" class="btn btn-success">

			</form>

		</div>



	</body>

	</html>