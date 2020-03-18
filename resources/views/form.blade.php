<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/form') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" placeholder="your name" name="name">
        <input type="text" placeholder="your email" name="email" >
        <input type="text" placeholder="your city" name="city">

       <input type="file" placeholder="upload your file" name="photo" >

        <button type="submit">submit</button>
        


    </form>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>