
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>

      <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>


<div class="container">
    <div class="list-group">
        @foreach($posts as $post)
        <div class="qwer">
            <div class="list-group-item list-group-item-action m-1">
                <div class="d-flex justify-content-between ">
                    <!-- 標題 -->
                    <h2 class="font-bold text-lg" style="margin-bottom: 30px ">
                        <a >{{$post->content}}</a>
                        <br>
                        <br>
                    </h2>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="d-none d-md-block" style="font-size: 20px" >{{$post->inputer}}</p>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-outline-primary" style="margin-right:10px ">編輯</a>
                <form action="" method="post" onsubmit="return confirmDelete()">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger" >刪除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    function confirmDelete() {
        return confirm("確定要刪除這個遊戲嗎？");
    }
</script>
