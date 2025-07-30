<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Youtique</title>
    <link rel="icon" href="<?php echo e(asset('storage/img/favicon.jpg')); ?>" type="image/jpeg">

    <!-- Bootstrap & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&display=swap" rel="stylesheet">

    <!-- Shared Styles -->
    <style>
             *{
            margin: 0px;
            padding: 0px;
        }
        body {
            background-color: #fdfaf6;
            color: #333;
            font-family: 'Cabin', sans-serif;
        }

        #mainNavigation {
            background-color: #d8a7b1;
        }

        .navbar-brand span {
            color: #fff;
            font-size: 20px;
        }

        .nav-item a {   
            font-size: 20px;
            padding: 100px
            color: #fff;
            font-weight: 500;
            justify-content: space-between;
        }

        .nav-item a:hover,
        .nav-item .active {
            color: #c7bfd9 !important;
        }

        .dropdown-menu {
            background-color: #b8c9b8;
        }

        .dropdown-item:hover {
            background-color: #c7bfd9;
            color: #fff !important;
        }
        .product-image {
            height: 300px;            
            object-fit: cover;        
            width: 100%;              
            border-radius: 8px;      
        }
        .brand-slider {
        overflow: hidden;
        white-space: nowrap;
        /* background-color: #b8c9b8; light pink for Youstique */
        padding: 20px 0;
        }

        .logo-group {
        display: inline-block;
        animation: slide 20s linear infinite;
        }

        .logo-group i {
        font-size: 2.5rem;
        margin: 0 40px;
        color: #000000; /* Youstique main color */
        transition: transform 0.3s ease;
        }

        .logo-group i:hover {
        transform: scale(1.2);
        color: #a61e62;
        }

        @keyframes slide {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
        }
       
    .card-has-bg {
  background-size: cover;
  background-position: center;
  min-height: 280px;
  position: relative;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 12px;
  overflow: hidden;
}

.card-has-bg:hover {
  transform: scale(1.02);
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  background-size: 150%;
  /* background: url("asset('img/favicon-removebg-preview.png') "); */
}

.card-img-overlay {
  background: linear-gradient(to top, rgba(0,0,0,0.5) 50%, transparent 100%);
  border-radius: inherit;
}

.card-title {
  font-size: 1.5rem;
  font-weight: bold;
}
/* .card-img-top:hover{
 image-orientation:flip url("asset('img/favicon-removebg-preview.png') ");
} */
      
        footer {
            background-color: #b8c9b8;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav id="mainNavigation" class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="<?php echo e(asset('storage/img/favicon-removebg-preview.png')); ?>" alt="Logo" height="40" class="me-2">
                <span class="fw-bold text-light">Youtique</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Collections</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">about us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
<?php /**PATH E:\downloads\NTI\Xampp\htdocs\ecommerce\Youtiuqe\resources\views/parts/navbar.blade.php ENDPATH**/ ?>