<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <p>Название:{{$product->title}}</p>
      <p>Цена:{{$product->price}}</p>
      <p>Магазин:{{$shop}}</p>
      <p>Категория продукта:{{$category}}</p>

      <form action="{{route('comment.show',$product->id)}}" method="POST">
          @csrf
          <label for="author" class="text-sm font-medium text-gray-700">id</label>
          <input type="text" name="user_id" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" readonly value="{{ auth()->user()->id}}" required>

          <label for="text" class="mt-6 block text-sm font-medium text-gray-700">комментарий</label>
          <textarea name="comment" class="mt-1 py-2 px-3 block w-full borded border-gray-400 rounded-md shadow-sm" required>{{ old('comment') }}</textarea>

          <button type="submit">Добавить комментарий</button>
      </form>
      @foreach($comments as $comment)
          <div class="flex flex-col justify-center">
              <p class="mr-2 font-bold">ID-пользователя:{{ $comment->user_id }}</p>
              <p class="text-gray-600">Дата добавления:{{ $comment->created_at->diffForHumans() }}</p>
          </div>
          </div>

          <div class="mt-3">
              <p>И наконец сам комментарий:{{ $comment->comment }}</p>
          </div>
      @endforeach
</body>
</html>
