<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Export</title>
</head>

<body>
	<table>
		<tr>
			<td>Number </td>
			<td>Surname </td>
			<td>Name </td>
			<td>Patronymic </td>
			<td>Birthday </td>
			<td>Position </td>
			<td>Salary </td>
		</tr>
		@foreach($hr_request as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->surname}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->patronymic}}</td>
                    <td>{{$row->birthday}}</td>
                    <td>{{$row->position}}</td>
                    <td>{{$row->salary}}</td>
                    <td>
                       
                        <button type="button" class="btn btn-success">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach


		
	</table>
</body>	

</html>