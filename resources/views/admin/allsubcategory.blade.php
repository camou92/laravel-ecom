@extends('admin.layouts.template')

@section('page_title')
    Liste des sous-categories - Ecom
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Liste des sous-catégories</h4>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        <div class="card">
            <h5 class="card-header">Information disponible sur la sous-catégorie</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Nom Sous-catégorie</th>
                            <th>Category</th>
                            <th>Produit</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($allsubcategories as $subcategory)

                        <tr>
                            <td>{{$subcategory->id}}</td>
                            <td>{{$subcategory->subcategory_name}}</td>
                            <td>{{$subcategory->category_name}}</td>
                            <td>{{$subcategory->product_count}}</td>
                            <td>
                                <a href="{{route('editsubcat', $subcategory->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deletesubcat', $subcategory->id)}}" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
