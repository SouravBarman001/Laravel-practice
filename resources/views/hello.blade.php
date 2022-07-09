

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <x-header/>
      <h1>full url {{URL::full()}}</h1>
   <h1>Visited url {{URL::previous()}}</h1>
   <ul>
    <li><a href="{{URL::to('/home')}}">home</a>
    </li>
    <li><a href="{{URL::to('/about')}}">about</a>
    </li>
   </ul>
     
</body>
</html>