<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  padding-top: 56px;
  font-family: Arial, sans-serif;
}

.sidebar {
  position: fixed;
  z-index: -10;
  top: 56px;
  bottom: 0;
  left: 0;
  background-color: #fff;
  padding: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background-color: #f8f9fa;
  border-right: 1px solid #dee;
  border-right: 1px solid #dee2e6;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
nav.navbar{
    position: fixed;
    top: 0;
    width: 100vw;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #333;
  text-decoration: none;
}

.nav-link:hover {
  background-color: #e9ecef;
}

.main-content {
  padding: 20px;
}

h1 {
  margin-bottom: 20px;
}

h3 {
  margin-bottom: 10px;
}
.statistique_container {
    margin: 1rem;
    width: 15rem;
}
.statistique_item {
    margin-left: 2rem ;
    
}
.statistique_item h3 {
  background-color: #333;
  color: white;
  padding: .5rem;
  border-radius: 1rem;
  margin-left: 1rem;
}
.statistique_item p{
  background-color: blue;
  color: white;
  padding: .5rem;
  border-radius: 1rem;
  margin-left: 1rem;
}
table {
      background-color: #f2f2f2;
      border: 1px solid #ddd;
      border-collapse: collapse;
      width: 100%;
      color: #333;
    }
    th {
      background-color: #000;
      color: white;
      padding: 8px;
      text-align: left;
    }
    td {
      padding: 8px;
    }
    button {
      padding: 5px 10px;
      border: none;
      cursor: pointer;
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block  sidebar ">
        <div class="sidebar-sticky ">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Users
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>
        <div class="container statistique">
        <table class="table">
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Actions</th>
    </tr>
    <tr>
      <td>John</td>
      <td>25</td>
      <td>Male</td>
      <td>
        <button class="btn btn-primary">Update</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
   
  </table>
        </div>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

