<html>
<head>
<title>Hello/Index</title>
<style>
body{font-size:16pt; color:#999;}
h1{font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -120px 0px;}
</style>
</head>
<body>
<h1>Blade/Index</h1>
<p>whileの例</p>
<ol>
@php
$counter = 0;
@endphp

@while($counter < count($data))
<li>{{$data[$counter]}}</li>
@php
$counter++;
@endphp
@endwhile
</ol>
</body>
</html>