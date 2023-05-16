@extends('admin.layouts.template')

@section('page_title')
    Liste des produits - Ecom
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Liste des Produits</h4>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Information disponible sur le produit</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Nom Produit</th>
                            <th>image</th>
                            <th>Prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>
                                <img style="height: 100px" src="{{asset($product->product_img)}}" alt="">
                                <br>
                                <a href="{{route('editproductimg', $product->id)}}" class="btn btn-primary">Editer l'image</a>
                            </td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a href="{{route('editproduct', $product->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deleteproduct', $product->id)}}" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
