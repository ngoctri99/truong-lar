tao moi
<form action="{{route('store')}}" method="POST">
    @csrf
    <input type="text" name="category_name" placeholder="Enter Name">
    <button type="submit">Create</button>
</form>
