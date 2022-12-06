<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($categories as $category)
        <p>
           <a href="products/{{$category->id}}">{{$category->title}}</a> 
        </p>
    @endforeach

    @foreach ($products as $product)
        <p>
            {{$product->title}}
            {{$product->price}}
            {{$product->image}}
        </p>
    @endforeach
</body>
</html>