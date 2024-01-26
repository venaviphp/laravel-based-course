<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create page</h1>
</body>
    <form action="{{ route('worker.store') }}" method="POST">
        @csrf
        <div style="margin-top: 15px"><input type="text" name="name" placeholder="name"></div>
        <div style="margin-top: 15px"><input type="text" name="surname" placeholder="surname"></div>
        <div style="margin-top: 15px"><input type="email" name="email" placeholder="email"></div>
        <div style="margin-top: 15px"><input type="number" name="age" placeholder="age"></div>
        <div style="margin-top: 15px"><textarea name="description" placeholder="description"></textarea></div>
        <div style="margin-top: 15px"><input type="checkbox" name="is_married" id="isMarried"><label for="isMarried">Is married</label></div>
        <div style="margin-top: 15px"><input type="submit" value="Добавить"></div>
    </form>
</html>
