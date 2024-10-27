<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form-input {
            min-width: 300px;
            display: block;
            margin: 10px 0;
            padding: 5px;
        }

        .btn {
            padding: 10px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="title" class="form-input" value="{{ $task->title }}">
        <input type="text" name="description" class="form-input" value="{{ $task->description }}">
        <select name="completed" class="form-input">
            <option value="Chưa hoàn thành" {{ $task->completed == 'Chưa hoàn thành' ? 'selected' : '' }}>Chưa hoàn
                thành</option>
            <option value="Hoàn thành" {{ $task->completed == 'Hoàn thành' ? 'selected' : '' }}>Hoàn thành</option>
        </select>
        <button type="submit" class="btn">Cập nhật</button>
    </form>
</body>

</html>
