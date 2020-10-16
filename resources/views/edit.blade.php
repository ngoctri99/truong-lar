sua
<form action="{{route('update',['id' => $category->id])}}" method="POST">
    @csrf
    <input type="text" value="{{$category->name}}" name="category_name" placeholder="Enter Name">
    <button type="submit">Edit</button>
</form>
