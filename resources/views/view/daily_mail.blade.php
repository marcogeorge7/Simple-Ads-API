<!DOCTYPE html>
<html>
<head>
    <title>Daily Mail</title>
</head>
<body>

<h1>{{ $details['title'] }}</h1>
@foreach($detail['body'] as $detail)
    <p>{{ $detail }}</p>
@endforeach

</body>
</html>
