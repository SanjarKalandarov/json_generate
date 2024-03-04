<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="geo_data">
    <button type="submit">Import</button>
</form>
