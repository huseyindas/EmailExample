<form action="{{route("product.save")}}" method="post" enctype="multipart/form-data">

    <input type="text" name="product_name">
    <input type="text" name="product_price">
    <input type="file" name="product_photo">
    @csrf
    <button type="submit">submit</button>

</form>
