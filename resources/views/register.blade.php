<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Register User</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
<div class="container"><br>
<div class="col-md-6 col-md-offset-3">
<h2 class="text-center">FORM REGISTER USER</h2>
<hr>
<form id="registerForm" action="/api/register" method="post">
@csrf <!--Katanya buat token laravel form security -->
<div class="alert alert-success" style="display:none;"></div>
<div class="form-group">
<label><i class="fa fa-envelope"></i> Email</label>
<input type="email" name="email" class="form-control" placeholder="Email" required>
</div>
<div class="form-group">
<label><i class="fa fa-user"></i> Nama</label>
<input type="text" name="name" class="form-control" placeholder="Name" required>
</div>
<div class="form-group">
<label><i class="fa fa-key"></i> Password</label>
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>
<div class="form-group">
<label><i class="fa fa-key"></i> Confirm Password</label>
<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
</div>
<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user-plus"></i> Register</button>
<hr>
<p class="text-center">Already have an account? <a href="/login">Login here!</a></p>
</form>
</div>
</div>

<script>
// Thanks to my friend for the ajax script :love: :love:
    document.getElementById('registerForm').onsubmit = async function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        try {
            const response = await fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            
            const result = await response.json();
            if (response.ok) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.alert').textContent = 'Registration successful';
            } else {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.alert').textContent = 'Registration failed: ' + result.message;
            }
        } catch (error) {
            console.error('Error:', error);
            document.querySelector('.alert').style.display = 'block';
            document.querySelector('.alert').textContent = 'An error occurred';
        }
    }
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
    </html>
    