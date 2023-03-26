<h1>welcome</h1>
@if(session('user'))
    {{session('user')}}
@endif


<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
        <td>Delete</td>
    </tr>
    @foreach($members as $item )
        <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td><a href={{"delete/".$item['id']}}>Delete</a></td>
    </tr>
    @endforeach
</table>
