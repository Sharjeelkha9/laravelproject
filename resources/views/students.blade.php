<h1>Students List</h1>
{{-- {{print_r($users)}} --}}
    <table border="2">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Batch Code</th>
        </tr>
        @foreach ($students as $values)
        <tr>
          <td>{{$values->name}}</td>
          <td>{{$values->email}}</td>
          <td>{{$values->batch}}</td>
        </tr>
        @endforeach
      </table>