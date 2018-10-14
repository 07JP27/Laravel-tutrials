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
<p>loopの例</p>
@foreach($data as $item)
@if($loop->first)
<p>データ一覧</p><ul>
@endif
<li>No,{{$loop->iteration}}. {{$item}}</li>
@if($loop->last)
</ul><p>ここまで</p>
@endif
@endforeach
</body>
</html>