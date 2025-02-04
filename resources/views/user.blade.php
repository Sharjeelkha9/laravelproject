<h1>Users List</h1>
{{-- {{print_r($userdata)}} --}}
 <table border="2">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
        </tr>
        @foreach ($users as $values)
        <tr>
          <td>{{$values->name}}</td>
          <td>{{$values->email}}</td>
          <td>{{$values->phone}}</td>
        </tr>
        @endforeach
      </table>
      {{-- <h1>Users List</h1> --}}
{{-- {{print_r($userdata)}} --}}
    {{-- <table border="2">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
        </tr>
        <tr>
          <td>{{$userdata->name}}</td>
          <td>{{$userdata->email}}</td>
          <td>{{$userdata->phone}}</td>
        </tr>
      </table> --}}

    
