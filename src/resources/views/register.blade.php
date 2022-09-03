<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>
<body>
    
    <form action="{{ url('/register') }}" method="post">
        @CSRF
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="text" name="instrument">
        <input type="submit" value="登録する">
    </form>
</body>
</html>