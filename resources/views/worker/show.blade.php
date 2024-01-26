<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Show Page</h1>
    <div>
            <div>
                <div><span>Имя: </span>{{ $worker->name }}</div>
                <div><span>Фамилия: </span>{{ $worker->surname }}</div>
                <div><span>Емайл: </span>{{ $worker->email }}</div>
                <div><span>Возраст: </span>{{ $worker->age }}</div>
                <div><span>Семейное положение:</span>{{ $worker->is_married }}</div>
                <hr>
            </div>
            <div>
                <a href="{{ route('worker.index')}}">Назад</a>
            </div>
    </div>
</body>

</html>
