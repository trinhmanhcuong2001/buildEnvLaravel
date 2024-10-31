@extends('layout')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Danh sách công việc</h1>
        <div>
            <a href={{ URL::to('/create-task') }} class="btn btn-success">Tạo công việc</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tính năng</th>
            </tr>
        </thead>
        <tbody>
            @if (count($tasks) > 0)
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->completed }}</td>
                        <td>
                            <a class="btn btn-primary" href={{ URL::to('/update-task', $task->id) }}>Cập nhật</a>
                            <a class="btn btn-danger" href={{ URL::to('delete-task', $task->id) }}>Xóa</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Không có công việc nào!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
