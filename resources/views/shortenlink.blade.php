<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>URL Link Shortner</title>
  </head>
  <body>
    <div class="container mt-5">
        <h1>Create URL Shortner</h1>
        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div class="card">
            <div class="card-header" >
                <form action="{{ route('generate.shorten.link.post')  }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="link" class="form-control" placeholder="Enter URL" >
                        <div class="input-group-addon">
                            <button class="btn btn-success">Generate Shorten Link</button>
                        </div>
                    </div>
                    @error('link') <p class=" m-0 p-0 text text-danger"> {{ $message }}</p> @enderror

                </form>
            </div>

        </div>
        <div>

        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Short Link</td>
                    <td>Link</td>
                </tr>
            </thead>
            <tbody>
                @foreach($shortLink as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>
                    <td>{{ $row->link }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
  
  </body>
</html>