<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@isset($name)
    <b>{{$name}}</b>
    @endisset

    @isset($email)
    <b>{{$email}}</b>
    @endisset

    @isset($city)
    <b>{{$city}}</b>
    @endisset

    {{session('name')}}
{{request()->session()->get('name')}}

<b> {{ Cookie::get('name') }} </b>

@isset($message)
  <b> {{ $message }}</b>
@endisset


</body>
</html>