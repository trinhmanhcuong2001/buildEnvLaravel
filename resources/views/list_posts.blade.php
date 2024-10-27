<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nội dung</th>
        </tr>
        @if (count($posts) > 0)
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->content }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">Không có bải đăng nào!</td>
            </tr>
        @endif
    </table>
</body>

</html>
