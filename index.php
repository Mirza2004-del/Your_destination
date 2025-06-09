<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Odisha-Destination</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Bhubaneswar, Odisha, India</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 86511 40539</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>hammadahmad438543@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <h1 class="text-warning m-0"><img src="img/logo.jpg" alt="Logo"></i>Odisha-Destination</h1>
                <!-- <i class="fa fa-map-marker-alt me-3"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="package.php" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Best Offers </a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item">Destination</a>
                            <a href="booking.php" class="dropdown-item">Booking</a>
                          
                     
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="login.php" class="btn btn-warning rounded-pill py-2 px-4">Register</a>
            </div>
        </nav>

        <div class="container-fluid bg-warning py-2 mb-2 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Discover the Hidden Treasures of Odisha</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">From the majestic temples of Puri to the tranquil beaches and lush forests, explore Odisha's vibrant heritage and natural beauty</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <div class="container mt-5">
                                <div class="search-container">
                                    <input id="searchInput" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Odisha">
                                    <button id="searchButton" class="btn btn-warning rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                                </div>
                            </div>
                        
                            <script>
                                document.getElementById("searchButton").addEventListener("click", function() {
                                    const searchTerm = document.getElementById("searchInput").value;
                                    if (searchTerm) {
                                        // Redirect to table.php with the search term as a query parameter
                                        window.location.href = `table.php?search=${encodeURIComponent(searchTerm)}`;
                                    } else {
                                        alert("Please enter a search term.");
                                    }
                                });
                            </script>
                        
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


 <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Image Section -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-90" src="img/about.jpg" alt="Odisha's Scenic Beauty" style="object-fit: cover;">
                </div>
            </div>
            <!-- Text Section -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-warning pe-3">Discover Odisha</h6>
                <h1 class="mb-4">Explore the Wonders of <span class="text-warning">Odisha-Destination</span></h1>
                <p class="mb-4">
                    Step into the heart of Odisha, where ancient traditions meet pristine landscapes. Our platform uncovers the hidden treasures of this magnificent region, blending rich cultural heritage with unparalleled natural beauty. Whether you seek adventure, serenity, or a deep dive into history, Odisha has it all.
                </p>
                <p class="mb-4">
                    Your gateway to authentic experiences, we offer expertly crafted itineraries, local insights, and personalized travel tips that promise to make your journey unforgettable.
                </p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Luxury Air Travel</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Handpicked Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Exclusive Heritage Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Luxury Transportation</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Tailored City Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>24/7 Dedicated Support</p>
                    </div>
                </div>
                <body>
                    <div class="container mt-5">
                           
                                        <button type="button" class="btn btn-warning py-3 px-1 mt-1" data-toggle="modal" data-target="#schedulerModal"> <i class="fas fa-calendar-alt"></i>Scheduler Time</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Modal -->
                    <div class="modal fade" id="schedulerModal" tabindex="-1" aria-labelledby="schedulerModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div style="background: #ffc107; color: white;" class="modal-header">
                                    <h5 class="modal-title" id="schedulerModalLabel">Schedule Your Time</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div style="padding: 30px;" class="modal-body">
                                    <form id="schedulerForm">
                                        <div class="form-group">
                                            <label for="date">Select Date:</label>
                                            <input type="date" class="form-control" id="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="time">Select Time:</label>
                                            <input type="time" class="form-control" id="time" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea class="form-control" id="description" rows="3" required></textarea>
                                        </div>
                                        <button type="submit" style="background-color: #ffc107; color: white;" class="btn btn-warning">Schedule</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script>
                        document.getElementById('schedulerForm').addEventListener('submit', function(event) {
                            event.preventDefault();
                            alert("Scheduled successfully!");
                            $('#schedulerModal').modal('hide'); // Hide modal after submission
                        });
                    </script>
                </body>
                </html>
                
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-warning px-3">Our Services</h6>
            <h1 class="mb-5">Experience the Best with Us</h1>
        </div>
        <div class="row g-4">
            <!-- Worldwide Tours -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-warning mb-4"></i>
                        <h5>Odisha Tours</h5>
                        <p>Discover the Odisha's most captivating destinations with our expert-led, carefully curated tours that promise unforgettable experiences.</p>
                    </div>
                </div>
            </div>
            <!-- Hotel Reservation -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-warning mb-4"></i>
                        <h5>Hotel Reservation</h5>
                        <p>Stay at top-rated, luxurious hotels with seamless booking services that ensure comfort and convenience during your travels.</p>
                    </div>
                </div>
            </div>
            <!-- Travel Guides -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-warning mb-4"></i>
                        <h5>Expert Travel Guides</h5>
                        <p>Navigate through your travel adventures with our knowledgeable and friendly guides who bring local culture and history to life.</p>
                    </div>
                </div>
            </div>
            <!-- Event Management -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-warning mb-4"></i>
                        <h5>Event Management</h5>
                        <p>From corporate retreats to personal celebrations, we deliver flawlessly organized events with a personal touch, tailored to your needs.</p>
                    </div>
                </div>
            </div>
            <!-- Additional Services -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-plane text-warning mb-4"></i>
                        <h5>Airline Booking</h5>
                        <p>Enjoy stress-free flight reservations with access to exclusive deals and premium seating for a smooth travel experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-car text-warning mb-4"></i>
                        <h5>Luxury Transportation</h5>
                        <p>Travel in style with our premium fleet of vehicles, ensuring safety, comfort, and a touch of luxury in every ride.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-map text-warning mb-4"></i>
                        <h5>Custom Itineraries</h5>
                        <p>Let us craft personalized itineraries tailored to your unique preferences, ensuring an experience that is both enjoyable and memorable.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-heart text-warning mb-4"></i>
                        <h5>24/7 Customer Support</h5>
                        <p>Our dedicated team is here to assist you around the clock, ensuring that every aspect of your trip is smooth and hassle-free.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="konark.php">
                                <img class="img-fluid" src="img/destination-1.jpg" alt="Konark">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                <div class="bg-white text-warning fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Konark</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="mahendragiri.php">
                                <img class="img-fluid" src="img/destination-2.jpg" alt="Mahendragiri">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div>
                                <div class="bg-white text-warning fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Mahendragiri</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="puri_beach.php">
                                <img class="img-fluid" src="img/destination-3.jpg" alt="Puri Beach">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div>
                                <div class="bg-white text-warning fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Puri Beach</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="jagannath_temple.php">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt="Jagannath Temple" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                        <div class="bg-white text-warning fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Jagannath Temple</div>
                    </a>
                </div>
            </div>
    <!-- Destination Start -->

<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-warning px-3">Packages</h6>
            <h1 class="mb-5">Awesome Indian Adventure Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Konark Package -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/package-1.jpg" alt="Konark Sun Temple">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-warning me-2"></i>Konark Sun Temple</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-warning me-2"></i>2 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-warning me-2"></i>4 Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">₹9,000.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                        <p>Explore the magnificent Konark Sun Temple, a UNESCO World Heritage Site, and enjoy local cuisine and cultural experiences.</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-warning px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-warning px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jagannath Package -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/package-2.jpg" alt="Jagannath Temple">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-warning me-2"></i>Jagannath Temple</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-warning me-2"></i>2 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-warning me-2"></i>4 Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">₹11,000.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                        <p>Join the spiritual journey at the Jagannath Temple in Puri and experience the vibrant culture of Odisha.</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-warning px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-warning px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rath Yatra Package -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/package-3.jpg" alt="Rath Yatra Festival">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-warning me-2"></i>Puri Rath Yatra</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-warning me-2"></i>5 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-warning me-2"></i>4 Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">₹15,000.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                            <small class="fa fa-star text-warning"></small>
                        </div>
                        <p>Experience the grand Rath Yatra festival in Puri, where the majestic chariots of Lord Jagannath are pulled through the streets.</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-warning px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="btn btn-sm btn-warning px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Package End -->



   <!-- Booking Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="mb-4">Plan Your Next Adventure with Us!</p>
                    <p class="mb-4">Experience the beauty of Odisha with our exclusive tour packages. Whether you're looking to explore ancient temples, scenic beaches, wildlife sanctuaries, or vibrant local markets, we've got the perfect trip for you. Simply fill in the form below, and our team will handle the rest.</p>
                    <p class="mb-4">Let’s make your journey unforgettable!</p>
                    <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Book A Tour</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-transparent" id="select1">
                                        <option value="1">Puri</option>
                                        <option value="2">Konark</option>
                                        <option value="3">Bhubaneswar</option>
                                        <option value="4">Chilika Lake</option>
                                        <option value="5">Cuttack</option>
                                    </select>
                                    <label for="select1">Destination</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->



    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-warning pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-warning rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-warning mb-1">
                        <hr class="w-50 mx-auto bg-warning mt-0">
                        <p class="mb-0">Pick from our well compiled list of Odisha places. See beaches and temples.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-warning pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-warning rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-warning mb-1">
                        <hr class="w-50 mx-auto bg-warning mt-0">
                        <p class="mb-0">Secure and easy payment options. Book your tour in just a few clicks!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-warning pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-warning rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-warning mb-1">
                        <hr class="w-50 mx-auto bg-warning mt-0">
                        <p class="mb-0">Start your adventure immediately. Your dream destination is just a flight away!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5>Get In Touch</h5>
                <p class="mb-4">We are here to assist you with your travel plans to Odisha. Feel free to reach out anytime!</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Office</h5>
                        <p class="mb-0">123 Street, Bhubaneswar, Odisha, India</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Mobile</h5>
                        <p class="mb-0">+91 9876543210</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Email</h5>
                        <p class="mb-0">info@odisha-destination.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.912342671176!2d85.82453921483777!3d20.296059986398095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909f0a04a34f9%3A0x8a1c89c4dc6c49d!2sBhubaneswar%2C%20Odisha%2C%20India!5e0!3m2!1sen!2sin!4v1603794290143!5m2!1sen!2sin"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
           <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="https://api.web3forms.com/submit" method="POST">
                    <input type="hidden" name="access_key" value="40587034-b875-41f3-a753-2bc6cf4f62a4">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="eamil" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bhubaneswar, Odisha</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 86511 40539</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>hammadahmad438543@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Odisha-Destination</h4>
                    <p>A travel platform showcasing Odisha's hidden gems, rich heritage, 
                        and natural beauty, offering practical tips, itineraries, and local insights for explorers.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Odisha-Destination</a>, All Right Reserved.

                       
                        Designed By <a class="border-bottom" href="">Odisha-Destination</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>