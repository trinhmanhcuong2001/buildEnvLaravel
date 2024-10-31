@extends('layout')
@section('content')
    <form action="" method="POST">
        @csrf
        <legend>Create Task</legend>
        <div class="mb-3">
            <label for="nameTextInput" class="form-label">Tên</label>
            <input type="text" name="title" id="nameTextInput" class="form-control" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="descriptionTextInput" class="form-label">Mô tả</label>
            <input type="text" name="description" id="descriptionTextInput" class="form-control"
                placeholder="Enter Description">
        </div>
        <div class="mb-3">
            <label for="completedSelect" class="form-label">Trạng thái</label>
            <select id="completedSelect" class="form-select" name="completed">
                <option value="Chưa hoàn thành">Chưa hoàn thành</option>
                <option value="Hoàn thành">Hoàn thành</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>
    </form>
@endsection
