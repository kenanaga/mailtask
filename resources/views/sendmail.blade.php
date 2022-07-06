<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
  </head>
  <body>
    <form action="{{route('sendmail')}}" method="post">
        @csrf
        <div class="form-floating">
            <input type="text" name="id" value="{{$id}}" hidden>
            <textarea class="form-control" name="text" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Mətn</label>
          </div>
    <button type="submit" class="btn btn-primary"> Mail Göndər</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>