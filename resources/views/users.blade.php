<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
  </head>
  <body>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">İsdifadəçilər</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive-md">
                    <table id="news-table" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Mail ünvanı</th>
                        <th style="width: 150px">Proses</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($userdata as $user)
                            
                        
                        <tr>
                          <td>{{$user->name}}</td>
                          <td> {{$user->surname}}</td>
                          <td> {{$user->email}}</td>
                          <td>
                            <a href="sendmail/{{$user->id}}"><button class="btn btn-success" >Mail göndər</button></a>
                          </td>
                          
                        </tr> 
                        @endforeach
                    
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>