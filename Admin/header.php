<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " href="../admin">Home</a>
        <?php 
         if(!isset($_SESSION['admin'])){ ?>
            <a class="nav-link" href="?login=true">Login</a>
       <?php  }
       else{  ?>
        <a class="nav-link" href="?logout=true">Logout</a>
        <a class="nav-link" href="?additem=true"> Add Item</a>
        <a class="nav-link" href="?itemlist=true"> Item List</a>
        <a class="nav-link" href="?orderlist=true"> Order List</a>

   <?php    }
        ?>
        
      </div>
    </div>
  </div>
</nav>
</div>