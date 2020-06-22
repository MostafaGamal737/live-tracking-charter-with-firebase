@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="">
        <table>
          <tr>
            <th>Name</th>
            <th>email</th>
            <th>role</th>
            <th>action</th>
          </tr>
          @foreach ($users as $key => $user)

            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <select class="role" name="role" >

                  <option @if ($user->roles=='user')
                    selected
                  @endif value="user {{$user->id}}">
                  User
                </option >
                <option  @if ($user->roles=='admin')
                  selected
                @endif  value="admin {{$user->id}}" >
                Admin
              </option>


            </select>
          </td>
          <td>

            <a class="btn btn-danger" href="#">lol</a>
          </td>
        </tr>
      @endforeach


    </table>
  </div>

</div>
@csrf
</div>
@endsection
<style>
  table, td, th {
    border: 1px solid ;
    border-color:#ccc;
  }

  table {
    border-collapse: collapse;

    width: 1000px;
  }

  th {
    height: 50px;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.role').each(function(){
      $(this).change(function(event){
        var role=$(this).val();
        $.post('/admin/Ubdate',{'role':role,'_token':$('input[name=_token]').val()},function(data){
          console.log(data);
        });
      });
    });
  });
</script>
