<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
<h1>Contact Us Every Things</h1>

<form action="{{route('contact.store')}}" method="post">
    @csrf
    <input name="last_name" placeholder="enter lastname"/>
    <input name="city" placeholder="enter city"/>
    <input name="message" placeholder="enter message"/>
    <input name="name" placeholder="enter name"/>
    <button type="submit">Send</button>
</form>
</body>
</html>
