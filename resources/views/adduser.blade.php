<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
  </head>
  <body>

    <!-- Example Code -->
    @if ($errors->any())
    <div class="alert alert-danger">
      <b>{{$errors->first()}}</b>
    </div>
  @endif
    <form action="{{route('adduser')}}" method="post">
      @csrf
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Ad</span>
  </div>
  <input type="text" class="form-control" name="name" required placeholder="Ad" aria-label="name" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Soyad</span>
  </div>
  <input type="text" name="surname" required class="form-control" placeholder="soyad" aria-label="Surname" aria-describedby="basic-addon1">
</div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="email" class="form-control"  id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <button type="submit" class="btn btn-primary">Əlavə et</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>