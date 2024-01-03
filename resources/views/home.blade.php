@extends('layouts.app')

@section('content')
    <div class="container">
            <table id="productify_table" class="table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}INR</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex">
            {!! $products->links() !!}
            </div>
    </div>
@endsection
