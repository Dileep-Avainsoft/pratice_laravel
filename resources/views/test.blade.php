<h3>Hello This is test page in laravel </h3>

@foreach($collection as $users)
<table>
<tr>
           <td>{{$users['id']}}</td>

           <td>{{$users['email']}}</td>

           <td>{{$users['first_name']}}</td>

           <td>{{$users['last_name']}}</td>

           <td> <img src="{{$users['avatar']}}"></td>

        </tr>
    </table>
   @endforeach
