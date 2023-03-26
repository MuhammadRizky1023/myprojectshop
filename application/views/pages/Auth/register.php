<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Fixed top navbar example · Bootstrap</title>
        <link rel="stylesheet" href="style/style.css"/>

         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      
    </head>
    <body>
       
<nav class="navbar navbar-expand-md navbar-light  bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">MyShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
            <div class="dropdown-menu" aria-labelledby="dropdown-1">
                <a href="admin-category.html" class="dropdown-item">Kategori</a>
                <a href="admin-produk.html" class="dropdown-item">Produk</a>
                <a href="admin-order.html" class="dropdown-item">Order</a>
            </div>
        </li>
      </ul>
      </div>
      <ul class="navbar-nav">
          <li class="nav-item">
              <a href="/cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart(0)</a>
          </li>

          <li class="nav-item">
            <a href="/login.html" class="nav-link">Login</a>

            <li class="nav-item">
                <a href="/register.html" class="nav-link">Register</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                <div class="dropdown-menu" aria-labelledby="dropdown-2">
                    <a href="profile.html" class="dropdown-item">Profile</a>
                    <a href="order.html" class="dropdown-item">Order</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
        </li>
      </ul>
    </div>
</nav>

<main role="main" class="container">
  <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
              Register
            </div>
            <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" required autofocus>
                                <small class="form-text text-danger">E-mail harus diisi</small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" class="form-control" required >
                                <small class="form-text text-danger">E-mail harus diisi</small>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" required>
                                <small class="form-text text-danger">Password harus diisi</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="form-group">
                                <label for="">Password Confirmation</label>
                                <input type="password" class="form-control" required>
                                <small class="form-text text-danger">Password harus diisi</small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
          </div>
      </div>
</main>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/0302fefcf3.js" crossorigin="anonymous"></script>
  </body>
</html>
            
    </body>
</body>
</html>