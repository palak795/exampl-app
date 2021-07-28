

<table>
	<thead>
		<tr>
			<th>project name</th>
			<th>project file</th>
			<th>asd</th>
			<th>qwe</th>
			<th>qwe</th>
		</tr>
	</thead>
	<tbody>
		@foreach($projects as $project)
		<tr>
			<td>{{ $project->project_name }}</td>
			<td>
				<img src="{{asset('/uploads/'.$project->project_file)}}">
			
			</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>