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
				{{-- <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li> --}}
				{{-- <li class="nav-item"><a href="{{ route('speakers') }}" class="nav-link">Speakers</a></li> --}}
				<li class="nav-item"><a href="{{ route('schedule') }}" class="nav-link">Schedule</a></li>
				{{-- <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li> --}}
				<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
				{{-- <li class="nav-item cta mr-md-2"><a href="#" class="nav-link">Buy ticket</a></li> --}}
				
				

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Developer <br><span>Conference 2019</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">December 21-24, 2019. Paris, Italy</p>
            <div id="timer" class="d-flex mb-3">
						  <div class="time" id="days"></div>
						  <div class="time pl-4" id="hours"></div>
						  <div class="time pl-4" id="minutes"></div>
						  <div class="time pl-4" id="seconds"></div>
						</div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-placeholder"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Venue</h3>
                <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Transport</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-hotel"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Hotel</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-cooking"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Restaurant</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
   	
    {{-- <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Speaker</span>
            <h2 class="mb-4"><span>Our</span> Speakers</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-testimony owl-carousel">
        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-1.jpg" class="img-fluid" alt="Colorlib HTML5 Template">
			        		<div class="text text-center py-3">
			        			<h3>John Adams</h3>
			        			<span class="position">Web Developer</span>
			        			<ul class="ftco-social mt-3">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-2.jpg" class="img-fluid" alt="Colorlib HTML5 Template">
			        		<div class="text text-center py-3">
			        			<h3>Paul George</h3>
			        			<span class="position">Web Developer</span>
			        			<ul class="ftco-social mt-3">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-3.jpg" class="img-fluid" alt="Colorlib HTML5 Template">
			        		<div class="text text-center py-3">
			        			<h3>James Smith</h3>
			        			<span class="position">Web Developer</span>
			        			<ul class="ftco-social mt-3">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-4.jpg" class="img-fluid" alt="Colorlib HTML5 Template">
			        		<div class="text text-center py-3">
			        			<h3>Angelie Crawford</h3>
			        			<span class="position">Web Developer</span>
			        			<ul class="ftco-social mt-3">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
			        		</div>
			        	</div>
        			</div>

        			<div class="item">
        				<div class="speaker">
			        		<img src="images/speaker-5.jpg" class="img-fluid" alt="Colorlib HTML5 Template">
			        		<div class="text text-center py-3">
			        			<h3>Jackie Spears</h3>
			        			<span class="position">Entrepreneur</span>
			        			<ul class="ftco-social mt-3">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
			        		</div>
			        	</div>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section> --}}
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
    {{-- <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4"><span>Happy</span> Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Pricing Tables</span>
            <h2 class="mb-1"><span>Our</span> Ticket Pricing</h2>
          </div>
        </div>
        <div class="row">
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Personal</h2>
	            <span class="price"><sup>$</sup> <span class="number">85</span></span>
	            <span class="excerpt d-block">per Month</span>
	            
	            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text mb-5">
	              <li>Conference Seats</li>
	              <li>Free Wifi</li>
	              <li>Coffee Breaks</li>
	              <li>Lunch</li>
	              <li>Workshops</li>
	              <li>One Speakers</li>
	              <li>Papers</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Buy Ticket</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Small Team</h2>
	            <span class="price"><sup>$</sup> <span class="number">200</span></span>
	            <span class="excerpt d-block">per Month</span>
	            
	            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text mb-5">
	              <li>Conference Seats</li>
	              <li>Free Wifi</li>
	              <li>Coffee Breaks</li>
	              <li>Lunch</li>
	              <li>Workshops</li>
	              <li>One Speakers</li>
	              <li>Papers</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Buy Ticket</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Family Pack</h2>
	            <span class="price"><sup>$</sup> <span class="number">499</span></span>
	            <span class="excerpt d-block">per Month</span>
	            
	            <h3 class="heading-2 my-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text mb-5">
	              <li>Conference Seats</li>
	              <li>Free Wifi</li>
	              <li>Coffee Breaks</li>
	              <li>Lunch</li>
	              <li>Workshops</li>
	              <li>One Speakers</li>
	              <li>Papers</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Buy Ticket</a>
	            </div>
	          </div>
	        </div>
	      </div>
      </div>
    </section> --}}

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

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
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
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui distinctio esse, incidunt laborum minima nesciunt quis asperiores exercitationem sit id, soluta sunt? Tempore laboriosam iste esse laudantium laborum accusantium recusandae.</p>
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
                {{-- <li><a href="#" class="py-2 d-block">Blog</a></li> --}}
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