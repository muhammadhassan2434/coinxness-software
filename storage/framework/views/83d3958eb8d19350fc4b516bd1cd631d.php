<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/logo.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <title>Coinxness</title>
    <style>
        #whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #25D366;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: opacity 0.3s ease-in-out;
            opacity: 1;
        }
    
        #whatsapp-button img {
            width: 50px;
            height: 50px;
        }
    
        #whatsapp-button.hidden {
            opacity: 0;
            pointer-events: none;
        }
    </style>
    
</head>

<body>

    
    <div class="container ">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Logo with Controlled Size -->
                    <a class="navbar-brand" href="<?php echo e(route('welcome')); ?>">
                        <img src="<?php echo e(asset('img/image1.png')); ?>" class="logo-img" width="150px" alt="Logo">
                    </a>
            
                    <!-- Always Show Dashboard Link on Mobile -->
                    <div class="d-lg-none ms-auto">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('user.account')); ?>">Dashboard</a>
                    </div>
            
                    <!-- Regular Menu (Visible on Larger Screens) -->
                    <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo e(route('user.account')); ?>">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </div>
    </div>


    
    <div class="container px-4 ">
        <div class="row flex-lg-row-reverse align-items-center g-5 ">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?php echo e(asset('img/banner.png')); ?>" class="d-block mx-lg-auto img-fluid" width="" alt="About"
                     loading="lazy" style="width: 350px">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About CoinXness</h1>
                <p class="lead ">CoinXness empowers traders with cutting-edge forex solutions. We provide access to global markets through advanced platforms and expert analysis. Our focus is on transparency, reliability, and personalized support, enabling clients to navigate the complexities of forex trading with confidence. We aim to foster a community of informed and successful traders, leveraging technology and expertise for optimal results. We prioritize secure and efficient trading experiences, built on a foundation of integrity and client trust.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    
                    
                </div>
            </div>
        </div>
    </div>

    
    <section>
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="<?php echo e(asset('img/logo.png')); ?>" alt="About 1">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Vision</h2>
                            <p class="lead fs-4 text-secondary mb-3">CoinXness envisions becoming a leading global forex trading platform, recognized for its innovative technology and exceptional client service. We aim to democratize access to forex markets, empowering individuals to achieve financial independence. </p>
                            <p class="mb-5">We strive to be the preferred partner for traders worldwide, fostering a culture of continuous learning and growth. We will lead the industry in ethical practices, transparency, and technological advancement, setting new standards for excellence.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </footer>
      </div>
      <a href="https://wa.me/+923187443293" target="_blank" id="whatsapp-button">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
    </a>
    
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH E:\laravel\tradeSoftware\resources\views\welcome.blade.php ENDPATH**/ ?>