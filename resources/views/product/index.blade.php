@extends('product.layout')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Product price</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
          <tr>
            <th scope="row">{{++$i}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->name}}</td>
            <td>
                <a href="{{route ('products.edit')}}"></a>
                <a href="{{route ('products.show')}}"></a>
                <form action ="{{route ('products.destroy',$item->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danager">delete</button>
                </form>
            </td>
          </tr>

        </tbody>
      </table>
    {!!$products->links()!!}
</div>
@endsection
