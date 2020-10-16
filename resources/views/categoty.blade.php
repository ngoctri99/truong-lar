Trang danh muc
<table>
    <thead>
        <tr>id</tr>
        <tr>name</tr>
    </thead>
    <tbody>
        @foreach ($categorys as $key => $cate)
            <tr>{{$cate->id}}</tr>
            <tr>{{$cate->name}}</tr>
        @endforeach

    </tbody>
</table>
<a href="{{ route('create')}}">Create</a>
