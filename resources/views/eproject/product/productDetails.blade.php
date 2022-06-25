<dl class="row">
  <div class="col-sm-6">
    <dt class="col-sm-3">CID</dt>
    <dd class="col-sm-9">{{ $product->CID }}</dd>

    <dt class="col-sm-3">Product Code</dt>
    <dd class="col-sm-9">{{ $product->product_code }}</dd>

    <dt class="col-sm-3">Fabric</dt>
    <dd class="col-sm-9">{{ $product->fabric }}</dd>

    <dt class="col-sm-3">Price</dt>
    <dd class="col-sm-9">{{ $product->price }}</dd>

    <dt class="col-sm-3">Size</dt>
    <dd class="col-sm-9">{{ $product->size }}</dd>

    <dt class="col-sm-3">Collection</dt>
    <dd class="col-sm-9">{{ $collection->name}}</dd>

    <dt class="col-sm-3">Stylist</dt>
    <dd class="col-sm-9">{{ $stylist->name }}</dd>
  </div>
  <div class="col-sm-6">
    <img src="{{asset($product->urlimg)}}" width="500" height="600">
  </div>

</dl>
