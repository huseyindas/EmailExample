<form action="{{route("product.save")}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="product_name">
    <input type="text" name="product_price">
    <input type="file" name="product_photo">

    <button type="submit">submit</button>

</form>
