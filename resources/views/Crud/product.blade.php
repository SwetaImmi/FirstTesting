@extends('layout.app')
@section('message')
@section('nav')

<form class="form-horizontal" action="{{ url('/product') }}" method="POST" enctype="multipart/form-data"> @csrf
  <fieldset>

    <!-- Form Name -->
    <legend>PRODUCTS</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>
      <div class="col-md-4">
        <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
      <div class="col-md-4">
        <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

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
        <input id="available_quantity" name="product_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">

      </div>
    </div>




    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_price">PRICE</label>
      <div class="col-md-4">
        <input id="product_price" name="product_price" placeholder="COMMENT" class="form-control input-md" required="" type="text">

      </div>
    </div>

    <!-- File Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_image">main_image</label>
      <div class="col-md-4">
        <input type="file" name="image" class="form-control">
        <!-- <input id="product_image" name="product_image" class="input-file" type="file"> -->
      </div>
    </div>
    <!-- File Button -->
    <!-- <div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">auxiliary_images</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div> -->

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
@endsection;