<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <p>ewew</p>

    @foreach ($posts as $post )
        <p>{{$post->content}}  輸入者: {{$post->inputer}}</p>
        <form action="{{route('delete',$post->id)}}" method="POST">
            @csrf
            <!-- <button type="submit" class="px-2 bg-red-500 text-red-100">刪除</button>-->
            <input type="submit" value="刪除">
        </form>
    @endforeach
    <form action="{{route('create')}}" method="POST">
        @csrf
            <textarea name="content">
            </textarea>
            <button type="submit">送出</button>
    </form>
    <i class="bi bi-cart-dash-fill" style="font-size: 100px"></i>

</body>
</html>