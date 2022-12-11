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
      <form action="{{route('product.index')}}" method="get">

          <div style="display: flex;justify-content: space-around">
         <div style="display:flex;flex-direction: column">
         <h1>Фильтр</h1>
             <div style="display: flex;justify-content: space-between;">
             <div style="display: flex;flex-direction: column;margin-right: 100px">
             По продукциям
          @foreach($categories as $category)
                 <label for="category" style="color: blue">{{$category->title}}</label>

                 <input type="checkbox" name="category_id[]" id="category"  value="{{$category->id}}">
          @endforeach
             </div>
             <div style="display: flex;flex-direction: column">
             По магазинам
             @foreach($shops as $shop)
                 <label for="shop" style="color: blue">{{$shop->title}}</label>

                 <input type="checkbox" name="shop_id[]" id="shop"  value="{{$shop->id}}">
          @endforeach
             </div>
                 <div style="display: flex;flex-direction: column">
             По цене
                     <select name="sort" >
                         <option ></option>
                         <option value="asc">По возрастанию</option>
                         <option value="desc">По убыванию</option>
                     </select>

             </div>

                 <div class="mb-3">
                     <label class="form-label">Поиск</label>
                     <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control"  placeholder="Введите что то">
                 </div>
             </div>
          <button type="submit" style="width:50%;margin-top: 20px">Фильтр</button>
         </div>

          <div>
              <h1>Результаты фильтра</h1>
              @foreach($products as $product)
                  <div class="col-lg-4">
                      <div class="card mb-3" style="width: 18rem;">
                          <div class="card-body">
                              <a href="{{route('product.show',$product->id)}}"><i class="far fa-eye"></i><h5 class="card-title">{{$product->title}}</h5></a>

                              <p class="card-text">{{$product->price}}...</p>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
          </div>
      </form>


  </div>


</body>
</html>
