
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="text-center">Nyeuri</div>
    <div class="row">
        <div class="col">
            <form id="formLogout" action="{{ route('logoutUser') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>