<div class="card-body">
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
    </div>
    <div class="card-body">
      <div class="dataTable-container">
        <table id="datatablesSimple" class="dataTable-table">
          <thead>
          <tr><th><input type="hidden" name="id" value="{{old('id')?? $product->CID ?? null}}">
              <label for="title" class="font-weight-bold">Product Code</label>
            <th><input type="text" class="form-control" id="product_code" name="product_code"
                       value="{{old('product_code')?? $product->product_code ?? null}}"></th>
          </tr>
          <tr>
            <th><label for="title" class="font-weight-bold">Fabric</label></th>
            <th><input type="text" class="form-control" id="fabric" name="fabric"
                       value="{{old('fabric')?? $product->fabric ?? null}}"></th>
          </tr>
          <tr>
            <th><label for="title" class="font-weight-bold">Price</label></th>
            <th><input type="text" class="form-control" id="price" name="price"
                       value="{{old('price')?? $product->price?? null}}"></th>
          </tr>
          <tr>
              <th><label for="size" class="font-weight-bold">Size</label></th>
              <th><input type="text" class="form-control" id="size" name="size"
                         value="{{old('size')?? $product->size?? "S-M-L"}}"></th>
          </tr>
          @php
              $img = 'images/product/';
             $sid = old('stylist') ??  $product->SID ??  null;
             $cid = old('collection') ?? $product->CollectionID  ?? null;
          @endphp
          <tr>
            <th><label for="title" class="font-weight-bold">Url for image</label></th>
            <th><input type="text" class="form-control" id="urlimg" name="urlimg"
                       value="{{old('urlimg')?? $product->urlimg?? null}}"><input type="file" name="image"><br>
                <img src="{{asset($img.$product->urlimg)}}" width="350" height="400">
           </th>

          </tr>

          <tr>
            <th><label for="stylist" class="font-weight-bold">Stylist</label></th>
            <th><select name="stylist" class="form-control" id="stylist" required>
                <option value="0">Please select a stylist :)</option>
                @foreach($stylist as $s)
                  <option value="{{ $s->SID }}"
                    {{ ($sid != null && $s->SID == $sid) ? 'selected' : '' }}
                  >  {{ $s->name }}</option>
                @endforeach
              </select></th>
          </tr>
          <tr>
            <th><label for="collection" class="font-weight-bold">Collection</label></th>
            <th><select name="collection" class="form-control" id="collection">
                <option value="0">Please select a Collection :)</option>
                @foreach($collection as $c)
                  <option value="{{ $c->CollectionID }}"
                    {{ ($cid != null && $c->CollectionID == $cid) ? 'selected' : '' }}
                  >  {{ $c->name }}</option>
                @endforeach
              </select></th>
          </tr>

          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
