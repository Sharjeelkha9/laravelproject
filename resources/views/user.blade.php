<h1>Users List</h1>
{{-- {{print_r($users)}} --}}
    <table border="2">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
        </tr>
        @foreach ($data as $values)
        <tr>
          <td>{{$values->name}}</td>
          <td>{{$values->email}}</td>
          <td>{{$values->phone}}</td>
        </tr>
        @endforeach
      </table>

    
