
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif


<div class="card">
    <div class="card-header">
        <h4>Add Student</h4>
    </div>
    <div class="card-body">

        <form action="{{ route('complete.Form') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="">Student Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" >

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>


            <div class="form-group mb-3">
                <label for="">Student Email</label>
                <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror ">
              
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="">Student Class</label>
                <input type="text" name="class" class="form-control @error('class') is-invalid @enderror">

                
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>


            <div class="form-group mb-3">
                <label for="">Student Addres</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror ">
              
                
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Save Student</button>
            </div>

        </form>

    </div>
</div>
</div>
</div>
</div>


  
</body>
</html>

