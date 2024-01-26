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
<form action="{{ route('worker.update', $worker->id) }}" method="POST">
    @csrf
    @method('Patch')
    <div style="margin-top: 15px"><input type="text" name="name" placeholder="name" value="{{ $worker->name }}">
    </div>
    <div style="margin-top: 15px"><input type="text" name="surname" placeholder="surname"
            value="{{ $worker->surname }}"></div>
    <div style="margin-top: 15px"><input type="email" name="email" placeholder="email" value="{{ $worker->email }}">
    </div>
    <div style="margin-top: 15px"><input type="number" name="age" placeholder="age" value="{{ $worker->age }}">
    </div>
    <div style="margin-top: 15px">
        <textarea name="description" placeholder="description">
            {{ $worker->description }}
        </textarea>
    </div>
    <div style="margin-top: 15px"><input type="checkbox" name="is_married" id="isMarried"
            {{ $worker->is_married ? ' checked' : '' }}><label for="isMarried">Is married</label></div>
    <div style="margin-top: 15px"><input type="submit" value="Сохранить"></div>
</form>

</html>
