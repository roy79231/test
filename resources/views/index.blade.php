@extends('testblade')

@section('content')
    <div>屁眼</div>
    <div>
        <div>
            @foreach ($all_comment as $comment)
                <p>{{$comment->content}} 編寫者: {{$comment->inputer}}</p>                
            @endforeach
        </div>
    </div>
    <div>   
        <form action="{{route('comment.add')}}" method="POST">
        @csrf
            <textarea name="content">
            </textarea>
            <button type="submit">送出</button>
        </form>
    </div>
@endsection
