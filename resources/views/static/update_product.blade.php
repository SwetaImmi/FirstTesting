@extends('layout.app-ui')
@section('nav')

<div class="wrapper">

  <div class="main">


    <main class="content">
      <div class="container-fluid p-0">

        <form class="form-horizontal" action="{{ url('/product') }}" method="POST" enctype="multipart/form-data"> @csrf
          <fieldset>

            <!-- Form Name -->
            <legend>PRODUCTS</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
              <div class="col-md-4">
                <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text" value="{{$product->id}}">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
              <div class="col-md-4">
                <input value="{{$product->product_name}}" id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

              </div>
            </div>


            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_catogery">PRODUCT CATEGORY</label>
              <div class="col-md-4">
                <select id="product_catogery" name="product_catogery" class="form-control" type="text">
                  <!-- <option value=""></option> -->
                  <option value="Chocolate">Chocolate</option>
                  <option value="Juice">Juice</option>
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_quantity">AVAILABLE QUANTITY</label>
              <div class="col-md-4">
                <input value="{{$product->product_quantity}}" id="available_quantity" name="product_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">

              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_price">PRICE</label>
              <div class="col-md-4">
                <input value="{{$product->product_price}}" id="product_price" name="product_price" placeholder="PRICE" class="form-control input-md" required="" type="text">

              </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_image">main_image</label>
              <div class="col-md-4">
                @if($product->product_image)

               
                <img src="{{ asset('uploads/'.$product->product_image) }}" style="height: 50px;width:100px;">
                @else
                <span>No image found!</span>
                @endif
              </div>
            </div>


            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="product_image">Single Button</label>
              <div class="col-md-4">
                <!-- <button id="product_image" name="product_image" class="btn btn-primary">Button</button> -->
                <button type="submit" class="btn btn-success">Upload</button>
              </div>
            </div>

          </fieldset>
        </form>

      </div>
    </main>


  </div>
</div>
@section('bottom')
@endsection;