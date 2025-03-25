<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinXness</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .hero-section {
            background: url('{{ asset('img/banner2.jpg') }}') no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .section-padding {
            padding: 80px 0;
        }

        .footer {
            background-color: #e9ecef;
            color: black;
            padding: 20px 0;
        }

        .vision-section {
            background-color: #f8f9fa;
        }

        .testimonial-section {
            background-color: #e9ecef;
        }

        .testimonial-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .testimonial-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        @media (max-width: 991px) {
            .navbar-toggler {
                display: none;
            }

            .navbar-collapse {
                display: flex !important;
                justify-content: flex-end;
            }
        }

        .logo {
            width: 120px;
            /* Adjust width as needed */
            height: auto;
            /* Ensures aspect ratio is maintained */
            max-height: 60px;
            /* Prevents logo from becoming too large */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>CoinXness</h3>
            </a>
            <div class="d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('user.account') }}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">Welcome to CoinXness</h1>
            <p class="lead">Your trusted partner in investment and financial growth.</p>
            <a href="#about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p class="lead">CoinXness empowers traders with cutting-edge forex solutions. We provide access to
                        global markets through advanced platforms and expert analysis. Our focus is on transparency,
                        reliability, and personalized support, enabling clients to navigate the complexities of forex
                        trading with confidence.</p>
                    <p>We aim to foster a community of informed and successful traders, leveraging technology and
                        expertise for optimal results. We prioritize secure and efficient trading experiences, built on
                        a foundation of integrity and client trust.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/first.png') }}" alt="About Us" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section id="vision" class="section-padding vision-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('img/secornd.png') }}" alt="Our Vision" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2>Our Vision</h2>
                    <p class="lead">CoinXness envisions becoming a leading global forex trading platform, recognized
                        for its innovative technology and exceptional client service. We aim to democratize access to
                        forex markets, empowering individuals to achieve financial independence.</p>
                    <p>We strive to be the preferred partner for traders worldwide, fostering a culture of continuous
                        learning and growth. We will lead the industry in ethical practices, transparency, and
                        technological advancement, setting new standards for excellence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <h3>Investment Planning</h3>
                    <p>We offer comprehensive investment planning services to help you build a diversified portfolio
                        that aligns with your financial goals.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Wealth Management</h3>
                    <p>Our wealth management services are designed to grow and protect your assets through strategic
                        planning and risk management.</p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Retirement Planning</h3>
                    <p>Plan for a secure future with our retirement planning services, ensuring you have the resources
                        you need when you need them most.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding testimonial-section">
        <div class="container">
            <h2 class="text-center mb-5">What Our Clients Say</h2>
            <div class="row">
                <!-- Testimonial 1 -->
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        {{-- <img src="https://via.placeholder.com/80" alt="Client 1"> --}}
                        <h4>Majid Habib</h4>
                        <p>⭐ Trusted & Transparent Trading <br>
                            "CoinXness has transformed my trading experience with its reliable platform and transparent
                            policies. I feel secure knowing my trades are executed fairly.CoinXness ensures a secure
                            trading experience"</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        {{-- <img src="https://via.placeholder.com/80" alt="Client 2"> --}}
                        <h4>Hanan</h4>
                        <p>⭐ Expert Guidance & Support <br>
                            "The expert analysis and insights provided by CoinXness have significantly improved my
                            trading strategies. Their support team is always responsive and helpful!"</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        {{-- <img src="https://via.placeholder.com/80" alt="Client 3"> --}}
                        <h4>Danyal Anjum</h4>
                        <p>⭐ Seamless & Efficient Experience <br>
                            "From fast trade execution to a user-friendly interface, CoinXness delivers everything a
                            trader needs. Highly recommended for both beginners and professionals!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Contact Us</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="{{ route('support.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name ">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter Your Message"></textarea>
                            @error('message')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2025 CoinXness. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
