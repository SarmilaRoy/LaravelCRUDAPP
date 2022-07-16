<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
   
    <div class="contrainer">
        <a href="{{ url('/add-data') }}" class="btn btn-primary my-3">Add Data</a>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }}</p>
        @endif
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($showData as $key=>$data)
    <tr>
      <td>{{ $key+1 }}</td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->email }}</td>

      <td>
      <a href="{{ url('/edit-data/'.$data->id) }}" class="btn btn-sm btn-success">Edit</a>
      <a href="{{ url('/delete-data/'.$data->id) }}"  onclick="return confirm('are you sure to delete?')" class="btn btn-sm btn-danger">Delete</a>
    </td>
    
    </tr>
    @endforeach
  </tbody>
</table>
{{ $showData->links() }}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>