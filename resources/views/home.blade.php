<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    
     <main>
        <div class="container">
             <div class="row">
                <div class="col-lg-6 m-auto my-5">
                    <div class="card">
                     <div class="card-header title text-center bg-info"><span>Welcome Page</span></div>
                     <div class="card-body d-flex justify-content-center align-items-center py-5">
                        <form>
                             @if (Auth::check())

                                  @if (Auth::user()->is_role == 0)
                                      <div class="signup-lin">User Alredy Login : <a href="{{route('userdesgboard')}}">Deshboard</a></div>
                                   @elseif(Auth::user()->is_role == 1)  
                                      <div class="signup-lin">Admin Alredy Login : <a href="{{route('admindesgboard')}}">Deshboard</a></div> 
                                   @elseif(Auth::user()->is_role == 2)  
                                      <div class="signup-lin">Super Admin Alredy Login : <a href="{{route('superadmindesgboard')}}">Deshboard</a></div> 
                                  @endif

                             @else   
                             <div class="signup-link">Sign In? <a href="{{route('loginpage')}}">Login</a></div>
                             <div class="signup-link">Join Now? <a href="{{route('registration')}}">Registration</a></div>
                             @endif
                        </form>
                     </div>
                    </div>
                 </div>
             </div>
        </div>
     </main>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>










