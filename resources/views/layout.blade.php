<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngonyoku | KBANDA</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-dark.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/medium-zoom/dist/medium-zoom.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
       <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xc6hq3B1m1F/3Jdd3fdt6pbRbqgMSSg3LqN4Xms2BZ3S5HyIwJQ/STL4eW3+/ZzFLxIunbSDw6XUtQ1MQNRwZQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

      @yield('head')

    <style>
        /* .carousel-fixed-height */
    {
        height: 100px; /* Set your desired height here */
    }
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 24px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .whatsapp-float i {
        margin-top: 18px;
    }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" style=" background-color: #4d4d99;">
        <div class="container">
            <a class="navbar-brand" href="/">Kbanda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-car"></i> Kitchenware</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i> Electronics</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-tshirt"></i> Clothing & Apparel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
                <!-- Search field -->
                <form class="d-flex" action="/">
                    <input class="form-control me-2" type="search" placeholder="Search Items" name="search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <br>
    <main>
        <div class="content-section">
            @yield('content')
            <br>
        </div>
    </main>
    {{-- Footer --}}
    <div>
        @include('components.footer')
    </div>
     {{-- WhatsApp --}}
     <a href="https://wa.me/254707670113" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- Font Awesome JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-Xi8l2tYt94uSGcLTHkhr1APp2pMh6dZjnsf69eDLnHhEy+3FEbhlHvUf2wUEmmgm2n8DhLj4Xq/tv7RwntF7eA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#increment-btn').click(function() {
                var quantityInput = $('#quantity');
                var quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
            });
            
            $('#decrement-btn').click(function() {
                var quantityInput = $('#quantity');
                var quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var zoom = mediumZoom('[data-zoomable]');
        });
    </script>

</body>
</html>


