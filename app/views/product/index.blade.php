@extends('layout.main')
@section('content')
<table border="1" style="border-collapse: collapse">
    <thead>
        <th>ID</th>
        <th>Product name</th>
        <th>Giá</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($products as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->price }}</td>

                <th>
                    <button onclick="location.href='./add'">Thêm</button>
                    <button onclick="location.href='./edit-{{$p->id}}'">Sửa</button>
                    <button onclick="javascript:confirmDelete('./delete-product-{{$p->id}}')">Xóa</button>
{{--                    <a href="{{ route('edit-product/'.$p->id) }}">Sửa</a>--}}
{{--                    <a href="javascript:confirmDelete('delete-product/{{$p->id}}')">Xóa</a>--}}
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
