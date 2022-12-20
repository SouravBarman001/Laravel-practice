{{-- 
<h1>{{$name}} this is view</h1> --}}
{{-- 
<h1>User page</h1>
@include('inner')
<p>{{count($names)}}</p>

@foreach($names as $n)
<h1>{{$n}}</h1>
@endforeach --}}

{{-- <script>

    var names = @json($names);
    console.log(names);
</script>  --}}


<h2>Users list</h2>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>

@foreach ($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src={{$user['avatar']}} alt=""></td>
    </tr>

@endforeach
</table>