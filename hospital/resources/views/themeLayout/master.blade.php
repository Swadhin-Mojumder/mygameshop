   @include('themeLayout.header')
   
   <!--==Content============================-->
    <div class="hero-content">
        <!--**text****************-->
        <div class="hero-text">
            <h1>Feel Better About Finding HealthCare</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, vitae ex! Fuga similique repudiandae molestiae libero.</p>
            <!--btns-->
            <div class="hero-text-btns">
                <a href="{{url('/showdoctor')}}"><i class="fa-solid fa-magnifying-glass"></i> Find Doctor's</a>
                <a href="{{url('/appointmentadd')}}"><i class="fa-solid fa-check"></i> Book Appointment</a>
            </div>
        </div>
        <!--**img*****************-->
        @foreach ($setting as $sett)
            
        
        <div class="hero-img">
            <img alt="" src="{{asset('head/'.$sett->head)}}">
        </div>
        @endforeach
    </div>

    
</section><!--hero-end-->


<!--==appointment-search===============================-->
<div class="appointment-search-container">
    <h3>Find Best HealthCare</h3>
    <form class="appointment-search">
    <!--**doctor-search-box*******-->
    <div class="appo-search-box">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" placeholder="Search Doctor Here or For Advice">
    </div>
    <!--**set-your-location*******-->
    <div class="appo-search-box">
        <i class="fa-solid fa-location-dot"></i>
        <input type="text" placeholder="Set Your Location">
    </div>
    <!--**btn*********************-->
    <button>
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
    </form>
</div>


<!--==service-info===========================-->
<section class="what-we-provide">

    <!--**box1***********-->
    <div class="w-info-box w-i-box1">
        <!--icon-->
        <div class="w-info-icon">
            <i class="fa-solid fa-capsules"></i>
        </div>
        <!--text-->
        <div class="w-info-text">
            <strong>Specialised Service</strong>
            <p>Lorem ipsum dolor sit </p>
        </div>
    </div>
    <!--**box2***********-->
    <div class="w-info-box w-i-box2">
        <!--icon-->
        <div class="w-info-icon">
            <i class="fa-regular fa-comments"></i>
        </div>
        <!--text-->
        <div class="w-info-text">
            <strong>24/7 Advanced Care</strong>
            <p>Lorem ipsum dolor sit </p>
        </div>
    </div>
    <!--**box3***********-->
    <div class="w-info-box w-i-box3">
        <!--icon-->
        <div class="w-info-icon">
            <i class="fa-solid fa-square-poll-horizontal"></i>
        </div>
        <!--text-->
        <div class="w-info-text">
            <strong>Get Result Online</strong>
            <p>Lorem ipsum dolor sit </p>
        </div>
    </div>

</section><!--end-->



<!--==Story=============================-->
<section id="our_story">
@foreach ($setting as $sett)
    

    <!--**img**-->
    <div class="our-story-img">
        <img src="{{asset('medile/'.$sett->medile)}}" />
        <a href="#" class="story-play-btn">
            <i class="fa-solid fa-play"></i>
            Play Video
        </a>
    </div>
    @endforeach
    <!--**text**-->
    <div class="our-stroy-text">
        <h2>Short Story About Our Clinic.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quae ad aliquid in porro. Harum ipsa debitis deserunt ad facilis maxime! Accusantium ratione vitae quae repellendus, dolor debitis minima maiores.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab accusamus explicabo alias magni mollitia ea excepturi! Aliquam temporibus <a>Read More</a></p>
        <!--numbers-of-happy-patients-->
        <div class="story-numbers-container">
            <!--box-->
            <div class="story-numbers-box s-n-box1">
                <strong>1000+</strong>
                <span>Happy Patients</span>
            </div>
            <!--box-->
            <div class="story-numbers-box s-n-box2">
                <strong>215+</strong>
                <span>Expert Doctor</span>
            </div>
            <!--box-->
            <div class="story-numbers-box s-n-box3">
                <strong>315+</strong>
                <span>Hospital Room's</span>
            </div>
            <!--box-->
            <div class="story-numbers-box s-n-box4">
                <strong>106+</strong>
                <span>Award Wining</span>
            </div>
        </div>
    </div>
    
</section><!--story-end-->



<!--==Our-Services======================-->
<section id="our-services">

    <!--**heading********************-->
    <div class="services-heading">
        <!--text-->
        <div class="services-heading-text">
            <strong>Our Services</strong>
            <h2>High Quality Services For You</h2>
        </div>
        <!--btns-->
        <div class="service-slide-btns">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!--**container*******************-->
    <div class="services-box-container">

         <!-- Swiper -->
        <div class="swiper mySwiperservices">
            <div class="swiper-wrapper">
                <!--**1*******-->
                <div class="swiper-slide">
                <!--**box1**-->
                <div class="service-box s-box1">
                    <!--icon-->
                    <i class="fa-solid fa-tooth"></i>
                    <!--title-->
                    <strong>Dental Care</strong>
                    <!--details-->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem ullam perspiciatis impedit consequuntur</p>
                    <!--read more-->
                    <a href="#">Read More</a>
                </div>
                </div><!--slide-end-->
                <!--**1*******-->
                <div class="swiper-slide">
                <!--**box1**-->
                <div class="service-box s-box2">
                    <!--icon-->
                    <i class="fa-solid fa-eye"></i>
                    <!--title-->
                    <strong>Eye Care</strong>
                    <!--details-->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem ullam perspiciatis impedit consequuntur</p>
                    <!--read more-->
                    <a href="#">Read More</a>
                </div>
                </div><!--slide-end-->
                <!--**1*******-->
                <div class="swiper-slide">
                <!--**box1**-->
                <div class="service-box s-box3">
                    <!--icon-->
                    <i class="fa-solid fa-face-smile"></i>
                    <!--title-->
                    <strong>Skin Care</strong>
                    <!--details-->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem ullam perspiciatis impedit consequuntur</p>
                    <!--read more-->
                    <a href="#">Read More</a>
                </div>
                </div><!--slide-end-->
                <!--**1*******-->
                <div class="swiper-slide">
                <!--**box1**-->
                <div class="service-box s-box4">
                    <!--icon-->
                    <i class="fa-solid fa-user-doctor"></i>
                    <!--title-->
                    <strong>Surgical</strong>
                    <!--details-->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem ullam perspiciatis impedit consequuntur</p>
                    <!--read more-->
                    <a href="#">Read More</a>
                </div>
                </div><!--slide-end-->
            </div><!--wrapper-end-->
        </div><!--swiper-end-->

    </div>

    <!--btn-->
    <span class="service-btn">Contact Us For Need Any Help And Services <a href="#">Let's get Started</a></span>

</section><!--services-end-->


<!--==Why-choose-us=======================-->
<section id="why-choose-us">

    <!--**left*****************-->
    <div class="why-choose-us-left">
        <h3>Why Choose Us?</h3>
        <!--==container====-->
        <div class="why-choose-box-container">
            <!--**box**-->
            <div class="why-choose-box">
                <!--icon-->
                <i class="fa-solid fa-check"></i>
                <!--text-->
                <div class="why-choose-box-text">
                    <strong>Advance Care</strong>
                    <p>Lorem ipsum dolor sit</p>
                </div>
            </div>
            <!--**box**-->
            <div class="why-choose-box">
                <!--icon-->
                <i class="fa-solid fa-check"></i>
                <!--text-->
                <div class="why-choose-box-text">
                    <strong>Online Medicine</strong>
                    <p>Lorem ipsum dolor sit</p>
                </div>
            </div>
            <!--**box**-->
            <div class="why-choose-box">
                <!--icon-->
                <i class="fa-solid fa-check"></i>
                <!--text-->
                <div class="why-choose-box-text">
                    <strong>Medical & Surgical</strong>
                    <p>Lorem ipsum dolor sit</p>
                </div>
            </div>
            <!--**box**-->
            <div class="why-choose-box">
                <!--icon-->
                <i class="fa-solid fa-check"></i>
                <!--text-->
                <div class="why-choose-box-text">
                    <strong>Lab Test's</strong>
                    <p>Lorem ipsum dolor sit</p>
                </div>
            </div>
        </div>
        <!--==btn========-->
        <a href="{{url('/appointmentadd')}}" class="why-choose-us-btn">Make Appointment</a>
    </div><!--left-end-->

    <!--**right*******************-->
    <div class="why-choose-us-right">
        <h3>Emergency?<br/>
            Contact Us
        </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis iste, quam ratione rerum aliquid esse vero placeat? debitis velit cupiditate magni cumque corporis.</p>
        <!--==container====-->
        <div class="w-right-contact-container">
            <!--**box**-->
            <div class="w-right-contact-box">
                <i class="fa-solid fa-phone"></i>
                <!--text-->
                @foreach ($setting as $set)
                    
                
                <div class="w-right-contact-box-text">
                    <span>Call Us Now</span>
                    <strong>{{$set->contect_number}}</strong>
                </div>
            </div>
           
            <!--**box**-->
            <div class="w-right-contact-box">
                <i class="fa-solid fa-envelope"></i>
                <!--text-->
                <div class="w-right-contact-box-text">
                    <span>Mail Us</span>
                    <strong>{{$set->email}}</strong>
                </div>
            </div>
        </div>
        @endforeach
    </div><!--right-end-->

</section><!--end-->



<!--==Team===========================-->
<section id="our-team">

    <!--**heading*****************-->
    <div class="our-team-heading">
        <h3>Meet Our Specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

    <!--**team-container***********-->
    
    
    <div class="team-box-container">
        <!-- Swiper -->
        
        
       
        <div class="swiper mySwiperteam">
           
        <div class="swiper-wrapper">
            <!--**1***-->
            @foreach ($doctor as $item)
            <div class="swiper-slide">
                <!--**box**-->
                <div class="team-box">
                    <!--img-->
                    <div class="team-img">
                        <img alt="" src="{{asset('picture/'.$item->picture)}}">
                    </div>
                    <!--text-->
                    <div class="team-text">
                        <strong>{{ $item->first_name}}  {{ $item->last_name}}</strong>
                        <h4>{{$item->type}}</h4>
                        <span>{{$item->specialist}}</span>
                    </div>
                    
                </div>
                
            </div>
            
            @endforeach
           
           <!--end-slide-->
            <!--**1***-->
           
           

        
    
    </div>
  
   

</section><!--team-end-->



<!--==Testimonials============================-->
<section id="testimonials">

    <!--**heading****************-->
    <div class="testimonials-heading">
        <h3>Our Patients FeedBack About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptates cupiditate, rerum rem odio fugit</p>
    </div>


    <!--**testimonials-Content****-->
    <div class="testimonials-content">
        @foreach ($setting as $item)
            
      
        <!--**img************-->
        <div class="testimonials-img">
            <img alt="" src="{{asset('bottom/'.$item->bottom)}}">
        </div>

        <!--**box-container**-->
        <div class="testimonials-box-container">

        <!-- Swiper -->
        <div class="swiper mySwipertesti">
        <div class="swiper-wrapper">
            <!--**1***********-->
            <div class="swiper-slide">
            <!--**box**-->
            <div class="testimonials-box">
                <!--profile-->
                <div class="t-profile">
                    <!--img-->
                    <div class="t-profile-img">
                        <img alt="" src="{{asset('clint/'.$item->clint)}}">
                    </div>
                    <!--text-->
                    <div class="t-profile-text">
                        <strong>Client Name</strong>
                        <span>From China</span>
                        <div class="t-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--feedback-->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos consequatur commodi repudiandae?</p>
            </div><!--box-end-->
        </div><!--slide-end-->
        
       
        </div><!--wrapper-end-->
        <div class="swiper-pagination"></div>
        </div><!--swiper-end-->

        </div><!--container-end-->
    
    </div><!--content-end-->

</section><!--testimonials-end-->



<!--==Subscribe===========================-->

@include('themeLayout.footer')