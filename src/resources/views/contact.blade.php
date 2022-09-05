<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact-Us-Any-Time</title>
</head>

<body>

    <div class="container mt-5">


        <h2>Contact Us any time</h2>
        
        @if (Session::has('success'))
        <div class="form-row">
            <div class="col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Thanks for being awesome! </strong>
                    {{Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        @endif

        <form method="post">
            @csrf
            <div class="form-row mx-auto">
                <div class="mb-3 col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" required  class="form-control" id="email" name="email" aria-describedby="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 col-md-8">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" required class="form-control" id="name" name="name" aria-describedby="name">
                </div>

                <div class="mb-3 col-md-8">
                    <label for="exampleInputMessage" class="form-label">Message</label>
                    <br>
                    <textarea name="message" required cols="72" rows="7"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>