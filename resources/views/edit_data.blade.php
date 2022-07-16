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
        <a href="{{ url('/') }}" class="btn btn-primary my-3">Show Data</a>

        <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->



        <form action="{{ url('/updatedata/'.$editData->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="{{ $editData->name }}" name="name"
                placeholder="Enter your name">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" value="{{ $editData->email }}" name="email"
                placeholder="Enter your Email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <input type="submit" value="submit" class="btn btn-primary my-3">
        </form>
 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>