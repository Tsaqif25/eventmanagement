<!DOCTYPE html>
<html lang="en">
	<style>
		/* Mengubah warna tanda panah ke hitam */
		.carousel-control-prev-icon,
		.carousel-control-next-icon {
			background-color: black;
			background-image: none; /* Menghilangkan ikon default */
		}
	
		/* Menambahkan ikon panah sendiri */
		.carousel-control-prev-icon::after {
			content: '\2039'; /* Karakter panah kiri */
			font-size: 30px;
			color: black;
		}
	
		.carousel-control-next-icon::after {
			content: '\203A'; /* Karakter panah kanan */
			font-size: 30px;
			color: black;
		}
	</style>
  <head>
    <title>Eventalk - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Even<span>talk.</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
				{{-- <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
				<li class="nav-item"><a href="{{ route('speakers') }}" class="nav-link">Speakers</a></li> --}}
				<li class="nav-item"><a href="{{ route('schedule') }}" class="nav-link">Schedule</a></li>
				{{-- <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li> --}}
				<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
				{{-- <li class="nav-item cta mr-md-2"><a href="#" class="nav-link">Buy ticket</a></li> --}}

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
			<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Schedule</span>
            <h2 class="mb-4"><span>Event</span> Schedule</h2>
          </div>
        </div>
        <div class="ftco-search">
          <div class="row">
            <!-- Carousel for Dates -->
            <div class="col-md-12 nav-link-wrap">
                <div id="dateCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php $chunkedEvents = $eventsByDate->chunk(3); @endphp <!-- Mengelompokkan 3 tanggal per slide -->
                        @foreach($chunkedEvents as $chunkIndex => $chunk)
                            <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                                <div class="nav nav-pills d-flex text-center justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                                    @foreach($chunk as $date => $events)
                                        <a class="nav-link ftco-animate {{ $loop->first && $chunkIndex == 0 ? 'active' : '' }}" 
                                           data-toggle="pill" 
                                           href="#event-{{ \Illuminate\Support\Str::slug($date) }}" 
                                           role="tab">
                                            {{ \Carbon\Carbon::parse($date)->format('d M. Y') }}
                                        </a>
                                    @endforeach
                                </div>
                                <!-- Tombol untuk melihat lebih banyak tanggal -->
                                @if($chunkIndex < $chunkedEvents->count() - 1)
                                    <div class="text-center mt-3">
                                        <button class="btn btn-secondary" data-target="#dateCarousel" data-slide="next">Lihat Lebih Banyak</button>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#dateCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#dateCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        
            <!-- Tab content for each event -->
            <div class="col-md-12 tab-wrap">   
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach($eventsByDate as $date => $events)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" 
                             id="event-{{ \Illuminate\Support\Str::slug($date) }}" 
                             role="tabpanel">
                            @foreach($events as $event)
                                <div class="speaker-wrap ftco-animate d-flex">
                                    <div class="img speaker-img" style="background-image: url('{{ asset('images/person_1.jpg') }}');"></div>
                                    <div class="text pl-md-5">
                                        <h2 class="event-title"><a href="#" class="text-decoration-none text-dark">{{ $event->event_name }}</a></h2>
                                        <p class="event-description">{{ $event->about }}</p>
                                        <div class="event-details">
                                            <span class="event-location font-weight-bold">Tempat: <span class="text-muted">{{ $event->location }}</span></span><br>
                                            <span class="event-time font-weight-bold">Jam: <span class="text-muted">{{ $event->event_time }}</span></span>
                                        </div>
                                        <h3 class="speaker-name mt-3"> 
                                            <p class="text-decoration-none text-primary">Pembicara: {{ $event->speaker }}</p>
                                            <span class="position">Penyelenggara: <span class="font-weight-bold">{{ $event->organizer->organizer_name }}</span></span>
                                        </h3>
                      
                                        @if($event->tickets->count() > 0)
                                            <div class="ticket-info mt-4">
                                                <h4>Tickets:</h4>
                                                @foreach($event->tickets as $ticket)
                                                    <p>
                                                        <span class="font-weight-bold">Ticket Tersedia:</span> {{ $ticket->availability }}<br>
                                                        <span class="font-weight-bold">Price:</span> {{ $ticket->price }}<br>
                                                    </p>
                                                @endforeach
                                            </div>
                                        @else
                                            <p class="text-danger mt-4">No tickets available for this event.</p>
                                        @endif
        
                                        {{-- Disable button if event is in the past --}}
                                        @php
                                            $eventDate = \Carbon\Carbon::parse($event->event_date);  // Assuming `event_date` is the correct field
                                            $isPastEvent = $eventDate->isPast();  // Check if event date is in the past
                                        @endphp
                                        
                                        <a href="#" class="btn btn-primary d-block mt-3 px-2 py-3 {{ $isPastEvent ? 'disabled' : '' }}" 
                                           {{ $isPastEvent ? 'aria-disabled="true"' : '' }}>
                                            {{ $isPastEvent ? 'Event Passed' : 'Buy Ticket' }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        </div>
        
        
        
        </div>
			</div>
		</section>
		

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Eventalk</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Speakers</a></li>
                <li><a href="#" class="py-2 d-block">Shcedule</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>