<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
    .fa-trash{
        font-size: 2em;
        color: red;
    }
    .fa-edit{
        font-size: 2em;
        margin-left: 10px;
        color: rgb(83, 204, 83);
    }
    .fa-trash:hover,.fa-edit:hover{
        color: rgb(172, 165, 165);
        cursor: pointer;
    }
</style>
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">image</th>
        <th scope="col">role</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->image }}</td>
            <td>{{ $user->role }}</td>
            <td><a href="{{ route('user.delete', ['id' => $user->id] ) }}"><i class="fas fa-trash"></i></a><a href=""><i class="far fa-edit"></i></a></td>
        </tr>
    @endforeach
    </tbody>
  </table>
