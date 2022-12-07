<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div>
      <form action="{{route('product')}}" method="get">
              <select name="category_id" >
          @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->title}}</option>
          @endforeach
              </select>

          <button type="submit">поиск</button>
      </form>


  </div>

  @foreach($products as $product)
      <div class="col-lg-4">
          <div class="card mb-3" style="width: 18rem;">
              <div class="card-body">
                  <h5 class="card-title">{{$product->title}}</h5>
                  <p class="card-text">{{$product->price}}...</p>
              </div>
          </div>
      </div>
  @endforeach
</body>
</html>
