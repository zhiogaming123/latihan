<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @switch($role)
    @case("admin")
    <p>You are an administrator.</p>
    @break


    @case("gamers")
    <p>You are proplayer.</p>

    @break
    @default
    <p>You are a regular user.</p>

    @endswitch
</body>
</html>