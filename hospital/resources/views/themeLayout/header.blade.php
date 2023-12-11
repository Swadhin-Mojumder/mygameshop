<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==title========================-->
    <title>Medical Website HTML</title>
    <!--==Fav-icon=====================-->
    <link rel="shortcut icon" href="images/fav-icon.png">
    <!--==CSS==========================-->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--==Font-Awesome-for-icons=====-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

</head>
<body>

    <!--==Hero-Section========================-->
    <section id="hero">

        <!--==navigation====================-->
        <nav class="navigation">
            <!--**menu-btn*****-->
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
            <!--**logo*********-->
            <a href="{{url('/')}}" class="logo"><span>We</span>Care</a>
            <!--**menu*********-->
            <ul class="menu">
                <li><a href="{{url('/showdoctor')}}">Find A Doctor</a></li>
                <li><a href="{{url('/catashow')}}">Our Services</a></li>

                <li><a href="{{url('/dashboard')}}">Login</a></li>
               

                <li><a href="#testimonials">Testimonial's</a></li>
            </ul>
            <!--**contact*******-->
            <a href="{{url('/appointmentadd')}}" class="nav-appointment-btn">Appointment</a>
        </nav><!--nav-end-->

        <style>
            *{
    margin: 0px;
    padding: 0px;
    font-family: poppins;
    box-sizing: border-box;
    scroll-behavior: smooth;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}

/* width */
::-webkit-scrollbar {
    width: 7px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgb(233, 233, 233);
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: rgb(56, 56, 56);
    border-radius: 10px;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #1b1b1b;
  }
/*==hero========================*/
#hero{
    min-height: 600px;
    background-color: #f5f7fb;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.navigation{
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    width: 90%;
    margin: 0px auto;
    padding: 30px 0px;
}
.logo{
    color:#122853;
    font-weight: 700;
    font-size: 1.4rem;
}
.logo span{
    background-color: #014dd5;
    color: #ffffff;
    padding: 0px 5px;
    border-radius: 5px;
    font-weight: 600;
    margin-right: 5px;
}
.menu{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: auto;
    margin-left: 40px;
}
.menu li a{
    margin: 0px 20px;
    color: #303030;
    font-weight: 500;
    transition: all ease 0.3s;
}
.menu li a:hover{
    color: #014dd5;
}
.nav-appointment-btn{
    height: 45px;
    padding: 0px 20px;
    border-radius:4px;
    background-color: #014dd5;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 500;
    letter-spacing: 1px;
    font-size: 0.9rem;
}
/*==hero-content==================*/
.hero-content{
    max-width: 1200px;
    width: 90%;
    margin: 0px auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: flex-start;
    margin-top: auto;
}
.hero-img{
    display: flex;
}
.hero-img img{
    width: 100%;
    height: 100%;
    max-height: 450px;
    object-fit: contain;
    object-position: center bottom;
}
.hero-text{
   display: flex;
   flex-direction: column;
   margin-top: 30px;
}
.hero-text h1{
    font-size: 3.2rem;
    color: #122853;
    line-height: 3.6rem;
}
.hero-text p{
    color: #535353;
    margin: 15px 0px;
    max-width: 500px;
    letter-spacing: 0.3px;
    line-height: 1.8rem;
}
.hero-text-btns{
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.hero-text-btns a{
    height: 45px;
    padding: 0px 15px;
    background-color: #122853;
    color: #ffffff;
    border-radius: 4px;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
    font-weight: 500;
}
.hero-text-btns a i{
    width: 18px;
    height: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #014dd5;
    margin-right: 8px;
    color: #ffffff;
    font-size: 0.5rem;
    padding-bottom: 1px;
}
/*==appointment-search=====================*/
.appointment-search-container{
    max-width: 1000px;
    width: 90%;
    background-color: #ffffff;
    padding:20px;
    margin: auto;
    border-radius: 10px;
    box-shadow: 2px 16px 30px rgba(0,0,0,0.12);
    margin-top: -60px;
    z-index: 3;
    position: relative;
}
.appointment-search-container h3{
    color: #122853;
    font-size: 1rem;
    margin-bottom: 5px;
}
.appointment-search{
    display: grid;
    grid-template-columns: 1fr 1fr 60px;
    grid-gap: 10px;
}
.appo-search-box{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f7fbff;
    padding: 15px;
    border-radius: 4px;
    border: 1px solid #e4e4e4;
}
.appo-search-box i{
    color: #535353;
    margin-right: 10px;
}
.appo-search-box input{
    width: 100%;
    background-color: transparent;
    border: none;
    outline: none;
}
.appointment-search button{
    background-color: #014dd5;
    color: #ffffff;
    border: none;
    outline: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
}
/*==what-we-provide===============*/
.what-we-provide{
    max-width: 1200px;
    width: 90%;
    margin: 50px auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}
.w-info-box{
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.w-info-icon{
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    margin-right: 15px;
    font-size: 1.4rem;
}
.w-info-text{
    display: flex;
    flex-direction: column;
}
.w-info-text strong{
    color: #122853;
    font-weight: 700;
}
.w-info-text p{
    color: #535353;
    font-size: 0.9rem;
    letter-spacing: 0.3px;
}
.w-i-box1 .w-info-icon{
    background-color: #ffdad4;
}
.w-i-box2 .w-info-icon{
    background-color: #d4ffe1;
}
.w-i-box3 .w-info-icon{
    background-color: #d4e7ff;
}
/*==our-story=======================*/
#our_story{
    background-color: #f5f7fb;
    max-width: 1200px;
    width: 90%;
    margin: 80px auto;
    border: 10px solid #ffffff;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.12);
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.our-story-img{
    position: relative;
    display: flex;
}
.our-story-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.story-play-btn{
    position: absolute;
    left: 10px;
    top: 0px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #dd3f3f;
    padding: 20px 10px;
    border-radius: 4px 4px 10px 10px;
    color: #ffffff;
    font-size: 0.6rem;
    text-transform: uppercase;
    font-weight: 500;
}
.story-play-btn i{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #aa2f0a;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}
.our-stroy-text{
    padding: 50px;
}
.our-stroy-text h2{
    font-size: 2.8rem;
    color: #122853;
    line-height: 3rem;
}
.our-stroy-text p{
    color: #535353;
    font-size: 0.9rem;
    margin: 10px 0px;
    line-height: 1.4rem;
    letter-spacing: 0.3px;
}
.our-stroy-text p a{
    color: #122853;
    text-decoration: underline;
}
.story-numbers-container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
    margin-top: 20px;
}
.story-numbers-box{
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 10px;
}
.story-numbers-box strong{
    color: #122853;
    font-weight: 700;
    font-size: 1.8rem;
}
.story-numbers-box span{
    color: #535353;
    font-size: 0.9rem;
}
.s-n-box1{
    background-color: #d4dfff;
}
.s-n-box2{
    background-color: #d4e7ff;
}
.s-n-box3{
    background-color: #ffd4fd;
}
.s-n-box4{
    background-color: #d7d4ff;
}
/*==our-services=====================*/
#our-services{
    width: 100%;
    margin: 50px auto 0px auto;
    background-color: #f5f7fb;
    padding: 50px 0px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.services-heading{
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    width: 90%;
    margin: auto;
}
.services-heading-text strong{
    color: #014dd5;
    font-size: 0.9rem;
    font-weight: 600;
    letter-spacing: 1px;
}
.services-heading-text h2{
    font-size: 2.2rem;
    color: #122853;
    font-weight: 700;
    max-width: 600px;
}
.swiper-button-next,
.swiper-button-prev{
    position: static !important;
    transform: translate(0,0);
    margin: 10px !important;
}
.service-slide-btns{
    display: flex;
    justify-content: center;
    align-items: center;}
.swiper-button-next::after,
.swiper-button-prev::after{
    font-size: 25px !important;
    font-weight: 800;
    color: #122853;
}
.services-box-container{
    max-width: 1200px;
    width: 90%;
    margin: 40px auto;
    overflow: hidden;
}
.service-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    max-width: 100%;/*350px*/
    border: 5px solid #ffffff;
    padding: 30px;
}
.service-box:hover{
    border: 5px solid #c7d0eb;
}
.service-box i{
    font-size: 2rem;
    color: #122853;
    width: 60px;
    height: 60px;
    border-radius:5px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.service-box strong{
    color: #122853;
    font-size: 1.4rem;
    margin-top: 20px;
}
.service-box p{
    font-size: 0.9rem;
    line-height: 1.4rem;
    color:#122853;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.service-box a{
    height: 45px;
    background-color: #122853;
    color: #ffffff;
    padding: 0px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 0.9rem;
    font-weight: 500;
    border-radius: 5px;
    margin-top: 30px;
}
.s-box1 i{
    background-color: #d4e2ff;
}
.s-box2 i{
    background-color: #d4ffe1;
}
.s-box3 i{
    background-color: #ffdad4;
}
.s-box4 i{
    background-color: #faf4b8;
}

.s-box1{
    background-color: #ecf6fd;
}
.s-box2{
    background-color: #edfff3;
}
.s-box3{
    background-color: #fff0ee;
}
.s-box4{
    background-color: #fcffcf;
}
.service-btn{
    color: #535353;
    font-size: 0.9rem;
    margin-top: 10px;
    text-align: center;
    padding: 0px 10px;
}
.service-btn a{
    color: #014dd5;
    text-decoration: underline;
    font-weight: 600;
}
/*==why-choose-us======================*/
#why-choose-us{
    width: 100%;
    display: grid;
    grid-template-columns: 1.5fr 1fr;
}
.why-choose-us-left{
    padding: 50px;
    background-color: #3c8167;
}
.why-choose-us-right{
    background-color: #4c71d0;
    padding: 50px;
}
.why-choose-us-right h3,
.why-choose-us-left h3{
    font-size: 2.6rem;
    color: #ffffff;
    font-weight: 600;
    line-height: 3.2rem;
}
.why-choose-box-container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    margin-top: 20px;
    grid-gap: 10px;
}
.why-choose-box{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 20px;
    background-color: #4a8a70;
}
.why-choose-box i{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    background-color: #25503f;
    margin-right: 10px;
}
.why-choose-box-text{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.why-choose-box-text strong{
    color: #ffffff;
    font-weight: 600;
}
.why-choose-box-text p{
    color: #ececec;
    font-size: 0.9rem;
    opacity: 0.7;
}
.why-choose-us-left a{
    background-color: #1a1a1b;
    color: #ffffff;
    padding: 0px 10px;
    height: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    max-width: 200px;
    margin-top: 30px;
    font-size: 0.9rem;
}
.why-choose-us-right p{
    color: #dfdfdf;
    font-size: 0.8rem;
    line-height: 1.4rem;
    letter-spacing: 0.5px;
    margin: 10px 0px;
}
.w-right-contact-container{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.w-right-contact-box{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-top: 10px;
}
.w-right-contact-box i{
    width: 50px;
    height: 50px;
    background-color:#4060b3;
    border-radius: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    font-size: 1.2rem;
    margin-right: 10px;
}
.w-right-contact-box-text{
    display: flex;
    flex-direction: column;
}
.w-right-contact-box-text span{
    color: #e4e4e4;
    font-size: 0.7rem;
}
.w-right-contact-box-text strong{
    font-size: 1rem;
    color: #ffffff;
    font-weight: 600;
}
/*==our-team====================*/
#our-team{
    max-width: 1200px;
    width: 90%;
    margin: 80px auto;
}
.our-team-heading{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.our-team-heading h3{
    font-size: 2.4rem;
    color: #122853;
}
.our-team-heading p{
    color: #535353;
    letter-spacing: 0.3px;
    font-size: 0.9rem;
}
.team-box-container{
    width: 100%;
    overflow: hidden;
    margin-top: 40px;
}
.team-box{
    max-width: 100%;/*300px*/
    display: flex;
    flex-direction: column;
}
.team-img{
    background-color: #f5f7fb;
    padding: 10px 10px 0px 10px;
    border-radius: 10px;
    height: 300px;
    display: flex;
    align-items: flex-end;
}
.team-img img{
    width: 100%;
    height: 95%;
    object-fit: contain;
    object-position: center bottom;
}
.team-text{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 10px;
    margin-top: 10px;
}
.team-text strong{
    color: #122853;
}
.team-text span{
    color: #303030;
    font-size: 0.9rem;
    margin-top: 5px;
}
/*==Testimonials=============================*/
#testimonials{
    background-color: #f5f7fb;
    padding: 50px 0px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.testimonials-heading{
    max-width: 1200px;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.testimonials-heading h3{
    font-size: 2.4rem;
    color: #122853;
}
.testimonials-heading p{
    color: #535353;
    margin-top: 10px;
    max-width: 600px;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
    line-height: 1.4rem;
}
.testimonials-content{
    max-width: 1200px;
    width: 90%;
    display: grid;
    grid-template-columns: 1.4fr 1fr;
    margin-top:50px;
}
.testimonials-img{
    height: 100%;
    margin-left: auto;
    margin-right: 60px;
}
.testimonials-img img{
    height: 100%;
    max-height: 450px;
    object-fit: contain;
    object-position: center;
}
.testimonials-box-container{
    margin-top: 50px;
    overflow: hidden;
}
.testimonials-box{
    display: flex;
    flex-direction: column;
    width: 100%;
}
.t-profile{
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.t-profile-img{
    width: 70px;
    height: 70px;
    border-radius: 6px;
    background-color: #c7d0eb;
    margin-right: 10px;
    overflow: hidden;
}
.t-profile-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.t-profile-text{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.t-profile-text strong{
    color: #122853;
    font-size: 1.2rem;
}
.t-profile-text span{
    color: #535353;
    font-size: 0.9rem;
    letter-spacing: 0.3px;
}
.t-rating{
    font-size: 0.8rem;
    color: #ffbc02;
    margin-top: 5px;
}
.testimonials-box p{
    font-size: 0.9rem;
    color: #122853;
    line-height: 1.4rem;
    letter-spacing: 0.3px;
    margin-top: 30px;
}
.swiper-pagination{
   position: static !important;
}
/*==subscribe=====================*/
#subscribe{
    max-width: 1000px;
    width: 90%;
    background-color:#174dac;
    padding: 50px;
    border-radius: 10px;
    margin: 50px auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#subscribe h3{
    font-size: 2.6rem;
    color: #ffffff;
    font-weight: 600;
    line-height: 3.4rem;
    max-width:600px;
    text-align: center;
}
.subscribe-box{
    max-width: 600px;
    width: 100%;
    background-color: #ffffff;
    border-radius: 4px;
    height: 50px;
    display: flex;
    padding: 5px;
    margin-top: 20px;
}
.subscribe-box input{
    width: 100%;
    height: 100%;
    padding: 0px 10px;
    border: none;
    outline: none;
}
.subscribe-box button{
    background-color: #122853;
    color: #ffffff;
    border-radius: 4px;
    max-width: 120px;
    width: 100%;
    border: none;
    outline: none;
    cursor: pointer;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 0.4px;
}
/*==footer================================*/
footer{
    width: 100%;
    background-color:  #f5f7fb;
}
.footer-container{
    max-width: 1200px;
    width: 90%;
    margin: 0px auto;
    padding: 50px 0px;
    display:flex;
    justify-content: space-between;
    align-items: flex-start;
}
.footer-company-box{
    max-width: 330px;
}
.footer-company-box p{
    color: #585858;
    margin: 5px 0px;
    font-size: 0.9rem;
    letter-spacing: 0.3px;
    line-height: 1.4rem;
}
.footer-social{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.footer-social a{
    margin-top: 10px;
    margin-right: 10px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #e9e9e9;
    color: #333333;
    font-size: 0.9rem;
    transition: all ease 0.3s;
}
.footer-social a:hover{
    background-color: #122853;
    color: #ffffff;
}
.footer-link-box strong{
    font-size: 1.2rem;
    color: #122853;
    font-weight: 600;
}
.footer-link-box ul{
    margin-top: 5px;
}
.footer-container ul li a{
    color: #585858;
    font-size: 0.9rem;
    margin-bottom: 5px;
    display: flex;
    transition: all ease 0.3s;
}
.footer-container ul li a:hover{
    color: #122853;
}
.footer-bottom{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    grid-gap: 10px;
    border-top: 1px solid #e9e9e9;
    padding: 20px 0px;
    max-width: 1200px;
    width: 90%;
    margin: auto;
}
.footer-bottom span{
    color: #252525;
    font-size: 0.9rem;
}

/*==making-responsive====================*/
.menu-icon,
.menu-btn{
    display: none;
}
@media(max-width:1200px){
    .footer-container{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 40px;
    }
}
@media(max-width:1050px){
    .hero-content{
        display: flex;
        flex-direction: column-reverse;
        justify-content: center;
        align-items: center;
        margin: 50px auto;
    }
    .hero-text{
        margin-bottom: 40px;
        background-color: #ffffff;
        padding: 30px;
        margin-top: 0px;
    }
}
@media(max-width:950px){
    .navigation{
        justify-content: space-between;
        padding: 30px 0px;
        position: relative;
        width: 100%;
        padding: 20px;
    }
    .logo,
    .nav-appointment-btn{
        z-index: 103;
    }
    .logo{
        margin-right: auto;
        margin-left: 20px;
    }
    .navigation .menu{
        display: none;
        position: absolute;
        left: 0px;
        top:100%;
        background-color: #ffffff;
        width: 100%;
        padding: 0px;
        margin: 0px;
        z-index: 102;
        box-shadow: 2px 30px 30px rgba(0,0,0,0.06);
    }
    .navigation .menu::after{
        content: '';
        position: absolute;
        left: 0px;
        top: -100%;
        background-color: #ffffff;
        width: 100%;
        height: 100%;
    }
    .navigation .menu li{
        width:100%;
        margin: 0px;
        padding: 0px;
    }
    .navigation .menu li a{
        width: 100%;
        height: 40px;
        display: flex;
        align-items: center;
        margin: 0px;
        padding: 30px 20px;
    }
    .menu-icon{
        display: block;
    }
    .navigation .menu-icon{
        cursor: pointer;
        float: right;
        padding: 10px 0px;
        position: relative;
        user-select: none;
        z-index: 106;
    }
    .navigation .menu-icon .nav-icon{
        background-color: #181818;
        display: block;
        position: relative;
        height: 2px;
        transition: background 0.2s ease-out;
        width: 25px;
    }
    .navigation .menu-icon .nav-icon::before,
    .navigation .menu-icon .nav-icon::after{
        background-color: #181818;
        content: '';
        position: absolute;
        height: 100%;
        transition: all ease-out 0.2s;
        width: 100%;
    }

    .navigation .menu-icon .nav-icon::before{
        top: 9px;
    }
    .navigation .menu-icon .nav-icon::after{
        top: -9px;
    }
    .navigation .menu-icon:checked ~ .menu-icon .nav-icon,
    .navigation .menu-btn:checked ~ .menu-icon .nav-icon{
        background-color: transparent;
    }
    .navigation .menu-btn:checked ~ .menu-icon .nav-icon::before{
        transform: rotate(-45deg);
        top: 0px;
    }
    .navigation .menu-btn:checked ~ .menu-icon .nav-icon::after{
        transform: rotate(45deg);
        top: 0px;
    }

    .navigation .menu-btn:checked ~ .menu{
        display: block;
    }

    .what-we-provide{
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }
    #our_story{
        grid-template-columns: 1fr;
    }
    .our-story-img img{
        max-height: 400px;
    }
    .our-stroy-text{
        padding: 30px;
    }
    #why-choose-us{
        grid-template-columns: 1fr;
    }
    .testimonials-content{
        grid-template-columns: 1fr;
    }
    .testimonials-img{
        margin-right: auto;
    }
    .testimonials-img img{
        width: 100%;
    }
}
@media(max-width:620px){
    .hero-text{
        padding: 20px;
    }
    .hero-text h1,
    .our-stroy-text h2,
    .services-heading h2,
    .why-choose-us-left h3,
    .why-choose-us-right h3,
    .our-team-heading h3,
    .testimonials-heading h3{
        font-size: 1.8rem;
        line-height: 2.2rem;
    }
    .hero-text-btns{
        flex-direction: column;
    }
    .hero-text-btns a{
        width: 100%;
        margin-top: 5px;
    }
    .appointment-search{
        grid-template-columns: 1fr;
    }
    .appointment-search button{
        height: 45px;
    }
    .what-we-provide{
        grid-template-columns: 1fr;
    }
    .our-stroy-text{
        padding: 20px 15px;
    }
    .story-numbers-box{
        padding: 15px;
    }
    .story-numbers-box strong{
        font-size: 1.4rem;
    }
    .why-choose-us-right,
    .why-choose-us-left{
        padding: 30px 20px;
    }
    .why-choose-box-container{
        grid-template-columns: 1fr;}
    #subscribe h3{
        font-size: 1.4rem;
        line-height: 1.8rem;
    }
    #subscribe{
        padding: 20px;
    }
	 .footer-container{
        grid-template-columns: 1fr;
    }
}
@media(max-width:320px){
    .nav-appointment-btn{
        display: none;
    }
    .story-numbers-container{
        grid-template-columns: 1fr;
    }
}
        </style>
