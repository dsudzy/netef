<!DOCTYPE html>
<html>
<head>
    <title>netennisfoundation.org</title>
</head>
<body>
    <h1>{{$name}} has sent an message from netennisfoundation.org:</h1>
    
    <h4>Message:</h4>
    <p>{{ $body }}</p>
   
    <p>{{$name}} can be reached at <a href="mailto:{{ $email_address }}">{{ $email_address }}</a></p>
</body>
</html>
