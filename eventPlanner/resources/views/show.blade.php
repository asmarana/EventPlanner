<!DOCtype html>

	<head>
		
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>


	<body>
		
   <div class="container">
   	
   <table class="table table-bordered shadow text-center table-striped">

   	<tr>
   		
        <th>Login Id</th>
        <th>Email</th>
        <th> Password</th>
        <th>Delete Account</th>
        <th>Edit Account</th>

   	</tr>
    @foreach($posts as $post)
   	<tr>
   		<td>{{$post->id}}</td>
   		<td>{{$post->email}}</td>
   		<td>{{$post->password}}</td>
   		<td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</td>
   		<td><a href="/edit/{{$post->id}}" class="btn btn-success">Edit</td>
   	</tr>

@endforeach
   </table>

   </div>
		
	</body>

	</html>