<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Index</h1>
    <div>
        @foreach ($workers as $worker)
            <div>
                <div><span>Имя: </span>{{ $worker->name }}</div>
                <div><span>Фамилия: </span>{{ $worker->surname }}</div>
                <div><span>Емайл: </span>{{ $worker->email }}</div>
                <div><span>Возраст: </span>{{ $worker->age }}</div>
                <div><span>Семейное положение:</span>{{ $worker->is_married }}</div>
                <div>
                    <a href="{{ route('show', $worker->id)}}">Посмотреть работника</a>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
</body>

</html>
