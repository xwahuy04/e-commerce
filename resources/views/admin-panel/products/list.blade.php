@extends('admin-panel.layouts.app')
@section('content')
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Products</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Products<small>List</small></h2>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Discount Price</th>
                          <th>Category</th>
                          <th>Sub Category</th>
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $k => $product)
                            <tr>
                              <td>{{ $k + 1  }}</td>
                              <td>{{ $product->title }}</td>
                              <td>{{ $product->price }}</td>
                              <td>{{ $product->discount_price }}</td>
                              <td>{{ $product->category_id }}</td>
                              <td>{{ $product->sub_category_id }}</td>
                              <td>
                                <img src="{{ asset('uploads/products/'  .$product->image) }}" alt="" height="100px">
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
        </div>
@endsection