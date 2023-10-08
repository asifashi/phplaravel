<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 >PHP LARAVEL TRIALS</h2><br>
    <h3>Total value:
        {{$c}}
    </h3>
    <h4>{{$newName}}</h4>
    
    <ul>
    <h2>today is {{ date('d-M-Y') }}</h2>
    <li><a  href='{{ route('about') }}'>About</a></li>
    <li><a href='{{route('contact') }}'>Contact Me</a></li>
    @if($c == 12)
    <h6>you are allowed</h6>
    @else
    <h6>you are not allowed</h6>
    @endif
    @isset($record)
    <h3>color getting</h3>
    @endisset
    @empty($record)
    <h4>color empty</h4>
    @endempty
    @switch($status)
       @case(1)
       
       <p>status 1</p>
       @break
       @case(0)
       
       <p>status 0</p>
       @break
       @default
       <h5>default status</h5>
       @endswitch
    
    <li></li>
      
    @unless ($c == 13)
    <h2>you are not allowed</h2>
    @endunless
    
   
    </ul>
</body>
</html>