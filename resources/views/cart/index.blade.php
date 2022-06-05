@extends('layouts.store')
@section('content')
<section class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
<<<<<<< HEAD
                <th>Quantidade</th>
=======
                <th>Unidade</th>
>>>>>>> 7529cbfffc250a5e0fb1562d67e1bac2505c1ae9
            </tr>
        </thead>
        <tbody>
        @foreach($itens as $item)
            <tr>
                <td>{{$item->Product->name}}</td>
                <td>{{$item->Product->price}}</td>
<<<<<<< HEAD
                <td>
                    <form action="{{ route('cart.store', $item->Product->id) }}" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">+</button>
                    </form>
                    {{$item->units}}
                    <form action="{{ route('cart.destroy', $item->Product->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-primary btn-sm">-</button>
                    </form>
                </td>
=======
                <td><form action="{{ route('cart.store', $item->Product->id)}}" method="POST" style ="display:inline">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">+</button>
                </form>
                {{$item->units}}
                <form action="{{ route('cart.destroy', $item->Product->id)}}"method="POST" style="display:inline">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-primary btn-sm">-</button>
                </form></td>
>>>>>>> 7529cbfffc250a5e0fb1562d67e1bac2505c1ae9
            </tr>

        @endforeach
        </tbody>
    </table>
</section>
@endsection
