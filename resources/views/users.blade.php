{{-- 
<h1>{{$name}} this is view</h1> --}}

<h1>User page</h1>
@include('inner')
<p>{{count($names)}}</p>

@foreach($names as $n)
<h1>{{$n}}</h1>
@endforeach

<script>

    var names = @json($names);
    console.log(names);
</script> 