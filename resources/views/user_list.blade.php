<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<table border="1px" width="100%">
		<a href="{{ url('create')}}"><button>Add user</button></a>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($result as $key=>$value)
			<tr>
			<td>{{ $value->name}}</td>
			<td>{{ $value->email}}</td>
			<td>{{ $value->contact}}</td>
			<th><a href="{{ url('user_edit/'.$value->id)}}">Edit</a> <a href="{{ url('user_delete/'.$value->id)}}">Delete</a></th>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>