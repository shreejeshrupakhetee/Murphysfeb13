<table class="table table-hover">

    <thead>

      <th>Firstname</th>

      <th>Lastname</th>

      <th>Email</th>

    </thead>

    <tbody>
@foreach($users as $user)
        <tr>

          <td>{{$user->firstname}} </td>

          <td>{{$user->lastname}} </td>

          <td>{{$user->email}} </td>
        </tr>
        @endforeach

    </tbody>

</table>