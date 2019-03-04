@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
                <div class="card-header">Products List</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">category id</th>
                          <th scope="col">category name</th>
                          <th scope="col">price</th>
                          <th scope="col">quantity</th>
                          <th scope="col">avg rating</th>
                          <th scope="col">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                            <tr class="row_{{ $product->id }}">
                              <th scope="row">{{ $product->id }}</th>
                                <td>
                                    <a href="/products/{{ $product->id }}">{{ $product->category_id }}</a>
                                </td>
                                <td>
                                    <a href="/products/{{ $product->id }}">{{ $product->category_name }}</a>
                                </td>
                                <td>
                                    <a href="/products/{{ $product->id }}">{{ $product->price }}</a>
                                </td>
                                <td>
                                    <a href="/products/{{ $product->id }}">{{ $product->quantity }}</a>
                                </td>
                                <td>
                                    <a href="/products/{{ $product->id }}">{{ $product->avg_rating }}</a>
                                </td>
                                <td>
                                    <a href="/products/{{ $product->id }}">{{ $product->action }}</a>
                                </td>

                              
                              <td>
                                  <a href="products/{{ $product->id }}/edit" class="btn btn-info" role="button">Edit</a>
                                  <a href="#" class="btn btn-info btn-del-user" role="button" data-user-id="{{ $product->id }}">Delete</a>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
