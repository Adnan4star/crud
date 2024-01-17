<!doctype html>
<html lang="en">
<head>
    <title>User Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
</head>
<body>
    <form action="{{route('register.post')}}" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">User Registration System</h1>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" aria-describedby="HelpId" placeholder="Enter Name Please"/>
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email')}}" aria-describedby="HelpId" placeholder="Enter Email Please" />
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="HelpId" placeholder="Enter Password Please" />
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirm" aria-describedby="HelpId" placeholder="Re-Enter Password" />
                <span class="text-danger">
                    @error('password_confirm')
                        {{$message}}
                    @enderror
                </span>
            </div>
            
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
