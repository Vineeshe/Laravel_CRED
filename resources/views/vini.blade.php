<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Hello world</h1>
    @php
    $sucessMessage="saved Sucessfully laravek";
@endphp


<x-alert-message :message="$sucessMessage"/>
<x-test />

</body>

</html>  