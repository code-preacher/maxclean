<?php
include "inc/config.php";
$tl="MaxClean | Home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$tl?></title>
    <link href="images/logo/favicon.png" rel="icon" type="image/png">
   <link href="images/logo/favicon.png" rel="apple-touch-icon" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$mc?>" />
    <meta name="keywords" content="<?=$mc?>" />
    <meta name="author" content="MaxClean Laundry" />
<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/>

<script>
function disableRightClick(e)

{

  var message = "Right click disabled";

  

  if(!document.rightClickDisabled) // initialize

  {

    if(document.layers) 

    {

      document.captureEvents(Event.MOUSEDOWN);

      document.onmousedown = disableRightClick;

    }

    else document.oncontextmenu = disableRightClick;

    return document.rightClickDisabled = true;

  }

  if(document.layers || (document.getElementById && !document.all))

  {

    if (e.which==2||e.which==3)

    {

      alert(message);

      return false;

    }

  }

  else

  {

    alert(message);

    return false;

  }

}

disableRightClick();


</script>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

<?php
include "inc/header.php";
?>
    

<br>
    <!-- Main slider -->
    <section class="main-slider">
        <div class="container-fluid">
            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                <li class="slider-wrapper">
                    <div class="image"><img src="images/slider/1.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                            <div class="title"><h1><span>MaxClean and dry cleaning are off your to-do list.</span></h1></div>
                            <div class="text">MaxClean is a service that you can trust. Our attendantsare highly trained and your satisfaction  is always guaranted.</div>
                            <div class="tp-btn">
                                <a href="<?=$site?>login" class="btn-one btn-bg">Learn More</a>
                            </div>
                        </div>                             
                    </div>
                    <div class="slide-overlay"></div>
                </li>
                <li class="slider-wrapper">
                    <div class="image"><img src="images/slider/2.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                            <div class="title"><h1><span>MaxClean and dry cleaning service.</span></h1></div>
                            <div class="text">Thousands of people trust us to care for their clothes because we provide best types of equipment to get clean and fresh clothes.</div>
                            <div class="tp-btn">
                                <a href="<?=$site?>login" class="btn-one btn-bg">Learn More</a>
                            </div>
                        </div>                            
                    </div>
                    <div class="slide-overlay"></div>
                </li>
                <li class="slider-wrapper">
                    <div class="image"><img src="images/slider/3.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                            <div class="title"><h1><span>MaxClean always provide hassle free door step delivery.</span> </h1></div>
                            <div class="text">MaxClean offers a quick & reliable laundry pick-up and delivery service directly from your home.</div>
                            <div class="tp-btn">
                                <a href="<?=$site?>login" class="btn-one btn-bg">Learn More</a>
                            </div>
                        </div>                            
                    </div>
                    <div class="slide-overlay"></div>
                </li>
            </ul>
        </div>
    </section>
    <!-- main-slider end -->


    <!-- working-section -->
    <section class="working-section sp-one centred">
        <div class="container">
            <div class="sec-title"><h2>How <span>MaxClean</span> Works</h2></div>
            <div class="title-text">Keep up a vital separation from the hussle of Washing Cloths. Book your Laundry in your general region with<br /> MaxClean. Book Now and Avail Great Discounts on Your Next Order.</div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-shipped"></i></div>
                        </div>
                        <h3>Free pick up</h3>
                        <div class="count-text">1</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-shirt"></i></div>
                        </div>
                        <h3>Wash and dry</h3>
                        <div class="count-text">2</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-iron"></i></div>
                        </div>
                        <h3>Fold and iron</h3>
                        <div class="count-text">3</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 working-column">
                    <div class="single-working-content">
                        <div class="icon-box">
                            <div class="icon"><i class="flaticon-transport"></i></div>
                        </div>
                        <h3>Free delivery</h3>
                        <div class="count-text">4</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working-section end -->


    <!-- choose-section -->
    <section class="choose-section sp-one centred" style="background-image: url(images/home/choose.jpg);">
        <div class="container">
            <div class="sec-title white"><h2>Why Choose <span>MaxClean</span></h2></div>
            <div class="title-text white">Just drop-off your clothes at any of our stores or request for a pick up online. We will do the rest!<br /> We wash, dry and iron your clothes, you just have to ask.</div>
            <div class="three-column-carousel owl-nav-none">
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-clean"></i></div>
                    <h3>Hygienic</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-shipped"></i></div>
                    <h3>Convenience</h3>
                    <div class="text"><p>Save you time and energy.Just book your laundry online or drop it yourself at our nearest store.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-quality"></i></div>
                    <h3>High Quality</h3>
                    <div class="text"><p>We provide high quality laundry service for Spotless Business Reputation.We serves diverse sectors with quality.</p></div>
                </div>
               <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-curriculum-vitae"></i></div>
                    <h3>Professional</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-washing-machine-for-laundry"></i></div>
                    <h3>Best Equipments</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-business"></i></div>
                    <h3>Affordable Pricing</h3>
                    <div class="text"><p>No blending of garments. Ultra-clean laundromats with extraordinary bundling to keep up freshness.</p></div>
                </div>
                <div class="single-choose-content">
                    <div class="icon-box"><i class="flaticon-technology"></i></div>
                    <h3>Customer Friendly</h3>
                    <div class="text"><p>Save you time and energy.Just book your laundry online or drop it yourself at our nearest store.</p></div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- choose-section end -->


    <!-- service-section -->
    <section class="service-section centred">
        <div class="container">
            <div class="sec-title"><h2>Our <span>Services</span></h2></div>
            <div class="title-text">Just drop-off your clothes at any of our stores or request for a pick up online. We will do the rest! We<br /> wash, dry and iron your clothes, you just have to ask.</div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/1.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Drapery</a></h3>
                                <div class="text lh-24">Dupioni silk is centuries old and has always remained a favorite as it offers the intricately woven silk yarns of varying thickness.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/2.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Wedding Suits</a></h3>
                                <div class="text lh-24">We know it isn't just your most costly suit yet additionally the most appreciated suit of all events. Call us and we will pick.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/3.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Curtains</a></h3>
                                <div class="text lh-24">The curtains lend a special effect to your tastefully decorated furnishings and wall paint.  Often the first thing everyone.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/4.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Silk and Suede</a></h3>
                                <div class="text lh-24">Every now and again support, refreshment stains and others like pen ink engravings could damage your mollified cowhide</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/5.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Dry Cleaning</a></h3>
                                <div class="text lh-24">Dry Clean for You in MaxClean is your licensed and certified dry cleaner, offering dry cleaning pick up and delivery.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-service-content">
                        <div class="single-item-hoverly">
                            <figure class="img-box">
                                <img src="images/service/6.png" alt="">
                                <div class="overlay">
                                    <a href="#" class="btn-one btn-bg">Read More</a>
                                </div>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="#">Leather Cleaning</a></h3>
                                <div class="text lh-24">Leather garments are a chic addition to any wardrobe. While they can be pricey, with the right care they can become</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <!-- service-section end -->


    <!-- fact-counter -->
    <section class="fact-counter sp-one centred" style="background-image: url(images/home/counter.jpg);">
        <div class="container">
            <div class="sec-title white"><h2>About <span>MaxClean</span></h2></div>
            <div class="title-text"><h4 class="white">Since 1952, MaxClean puts over 66 years of expert care, handling and experience behind every garment.<br />
            Our award winning facility uses green energy & environmentally friendly processes, providing brighter, fresher<br /> and cleaner garments.</h4></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column">
                    <div class="single-counter-content">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><h2 class="count-text white" data-speed="1500" data-stop="748">0</h2></div>
                            <div class="text"><h4>Business Clients</h4></div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column">
                    <div class="single-counter-content">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><h2 class="count-text white" data-speed="1500" data-stop="200">0</h2></div>
                            <div class="text"><h4>Household Laundry</h4></div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column">
                    <div class="single-counter-content">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><h2 class="count-text white" data-speed="1500" data-stop="23540">0</h2></div>
                            <div class="text"><h4>Steam Ironing</h4></div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column">
                    <div class="single-counter-content">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><h2 class="count-text white" data-speed="1500" data-stop="4278">0</h2></div>
                            <div class="text"><h4>Dry Cleaning</h4></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter end -->


    <!-- help-section -->
    <section class="help-section centred" style="background-image: url(images/home/help.jpg);">
        <div class="container">
            <div class="sec-title"><h2>Need More <span>Help</span></h2></div>
            <div class="title-text">In the event that you have a workforce needing a standard Laundry and Dry Cleaning administration,<br /> at that point reach us today, and we'd be pleased to talk with you about the advantages and advantages<br /> of utilizing our Laundryapp at your office</div>
            <div class="three-column-carousel owl-dots-none">
                <div class="single-help-content first-column">
                    <div class="top-content">
                        <div class="icon-box"><i class="fa fa-clock-o"></i></div>
                        <h3>Trading hours</h3>
                    </div>
                    <div class="bottom-content text-left">
                        <div class="text">Monday - Friday : 8:00 am to 6:00pm</div>
                        <div class="text">Saturday : 9:00 am to 6:00pm</div>
                        <div class="text">Sunday : 11:00am - 4:00pm </div>
                        <div class="button"><a href="#">Get a quote</a></div>
                    </div>
                </div>
                <div class="single-help-content second-column">
                    <div class="top-content"><h3>Call us</h3></div>
                    <div class="text">Any time during business hours if you want to get your clothes cleaned,quickly</div>
                    <div class="call">+234 902 981 0729</div>
                    <div class="call">+234 902 981 0729</div>
                    <div class="skype"><a href="#"><i class="fa fa-whatsapp"></i></a></div>
                </div>
                <div class="single-help-content third-column">
                    <div class="top-content">
                        <div class="icon-box"><i class="flaticon-shipped"></i></div>
                        <h3>Mobile Laundry</h3>
                    </div>
                    <div class="text">Customers no longer have to worry about going to the laundromat, buying detergent, finding enough quarters, and killing time waiting for everything to finish.</div>
                    <div class="call">(+234) 902 981 0729</div>
                </div>
                <div class="single-help-content fourth-column">
                    <div class="top-content text-left">
                        <div class="icon-box"><i class="fa fa-paper-plane"></i></div>
                        <h3>Subscribe</h3>
                    </div>
                    <div class="text">If you want receive our all weekly updates about new offers and discount, signup below</div>
                    <div class="input-box">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                                <button type="submit"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="single-help-content fifth-column">
                    <div class="top-content text-left">
                        <div class="icon-box"><i class="fa fa-question-circle"></i></div>
                        <h3>See our FAQs</h3>
                    </div>
                    <div class="text">See answers to questionson how to get our services </div>
                    <div class="button"><a href="<?=$site?>faq">FAQ</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- help-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section overlay-bg centred" style="background-image: url(images/home/testimonial.jpg);">
        <div class="container">
            <div class="sec-title white"><h2>Client <span>Testimonials</span></h2></div>
            <div class="title-text white">Customer Satisfaction Drives Us</div>
            <div class="three-column-carousel owl-nav-none">
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                    <h4>Michel jordan</h4>
                    <div class="title">Bank Manager</div>
                    <div>
                        <p>I am highly impressed by the professionalism these young guys have demonstrated. They not only picked it from my doorstep but also delivered it within the given time.</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t2.png" alt=""></figure></div>
                    <h4>Hannh kobel</h4>
                    <div class="title">House Wife</div>
                    <div>
                        <p>Very good service! Always polite and quick turn around between pick up and drop of! Would definitely recommend!</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t3.png" alt=""></figure></div>
                    <h4>Din Rechard</h4>
                    <div class="title">Hotel Manager</div>
                    <div>
                        <p>These guys are the greatest! My favorite coat was stained and I needed back for my job interview on the next day. As they promised I got my coat on time.</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                    <h4>Michel jordan</h4>
                    <div class="title">Bank Manager</div>
                    <div>
                        <p>I am highly impressed by the professionalism these young guys have demonstrated. They not only picked it from my doorstep but also delivered it within the given time.</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t2.png" alt=""></figure></div>
                    <h4>Hannh kobel</h4>
                    <div class="title">House Wife</div>
                    <div>
                        <p>Very good service! Always polite and quick turn around between pick up and drop of! Would definitely recommend!</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t3.png" alt=""></figure></div>
                    <h4>Din Rechard</h4>
                    <div class="title">Hotel Manager</div>
                    <div>
                        <p>These guys are the greatest! My favorite coat was stained and I needed back for my job interview on the next day. As they promised I got my coat on time.</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                    <h4>Michel jordan</h4>
                    <div class="title">Bank Manager</div>
                    <div>
                        <p>I am highly impressed by the professionalism these young guys have demonstrated. They not only picked it from my doorstep but also delivered it within the given time.</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t2.png" alt=""></figure></div>
                    <h4>Hannh kobel</h4>
                    <div class="title">House Wife</div>
                    <div>
                        <p>Very good service! Always polite and quick turn around between pick up and drop of! Would definitely recommend!</p>
                    </div>
                </div>
                <div class="single-testimonial-content">
                    <div class="img-box"><figure><img src="images/home/t3.png" alt=""></figure></div>
                    <h4>Din Rechard</h4>
                    <div class="title">Hotel Manager</div>
                    <div>
                        <p>These guys are the greatest! My favorite coat was stained and I needed back for my job interview on the next day. As they promised I got my coat on time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- pricing-section -->
    <section class="pricing-section sp-one centred">
        <div class="container">
            <div class="sec-title"><h2>Pricing Plan</h2></div>
            <div class="title-text">We treat pieces of clothing by their authenticity and quality. Whatever the kind of articles of clothing, for instance, fabric, white's,<br /> upholstery, mats, and floor covers we treat them freely. Endeavor our organizations once and we know you will stay with us!</div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 pricing-column">
                    <div class="single-pricing-content">
                        <div class="icon-box"><i class="flaticon-basket"></i></div>
                        <div class="top-text">One Month Wash</div>
                        <div class="title"><h3>₦</h3> <h2>10,000</h2> <span>/ use</span></div>
                        <ul class="list text-left">
                            <li>Detergent Include</li>
                            <li>Dryer Sheets Include</li>
                            <li>Fabric Softener Included</li>
                            <li>Unlimited Use</li>
                        </ul>
                        <div class="pricing-btn"><a href="#">Get Plan</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pricing-column">
                    <div class="single-pricing-content active">
                        <div class="icon-box"><i class="flaticon-basket"></i></div>
                        <div class="top-text">Six Month Wash</div>
                        <div class="title"><h3>₦</h3> <h2>50,000</h2> <span>/ use</span></div>
                        <ul class="list text-left">
                            <li>Detergent Include</li>
                            <li>Dryer Sheets Include</li>
                            <li>Fabric Softener Included</li>
                            <li>Unlimited Use</li>
                        </ul>
                        <div class="pricing-btn"><a href="#">Get Plan</a></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pricing-column">
                    <div class="single-pricing-content">
                        <div class="icon-box"><i class="flaticon-basket"></i></div>
                        <div class="top-text">One Year Wash</div>
                        <div class="title"><h3>₦</h3> <h2>70,000</h2> <span>/ use</span></div>
                        <ul class="list text-left">
                            <li>Detergent Include</li>
                            <li>Dryer Sheets Include</li>
                            <li>Fabric Softener Included</li>
                            <li>Unlimited Use</li>
                        </ul>
                        <div class="pricing-btn"><a href="#">Get Plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section -->


    <!-- loundry-apps -->
    <section class="loundry-apps overlay-bg sp-one" style="background-image: url(images/home/apps-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 apps-column">
                    <div class="apps-content">
                        <div class="top-text">Tap, Clean, Deliver Even faster</div>
                        <div class="title"><h2>Order <span>Laundry</span> and <span>Dry Cleaning</span> on Your Phone</h2></div>
                        <div class="text">
                            <p>There are lots of apps out there, but not many that will do your laundry for you. That’s where MaxClean app comes in. Now this is what we call the age of convenience. With our award-winning app, your laundry and dry cleaning needs are just a tap away. We put a Quality Guarantee on all your items.</p>
                        </div>
                        <div class="apps-box">
                            <a href="#" class="single-apps-box">
                                <div class="icon-box"><img src="images/home/apps1.png" alt=""></div>
                                <div class="text white">Download it on</div>
                                <h4>App Store</h4>
                            </a>
                            <a href="#" class="single-apps-box">
                                <div class="icon-box"><img src="images/home/apps2.png" alt=""></div>
                                <div class="text white">Get it on</div>
                                <h4>Google Play</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 video-column">
                    <div class="video-gallery">
                        <img src="images/home/video-gallery.png" alt="Awesome Video Gallery">
                        <div class="overlay-gallery">
                            <div class="icon-holder">
                                <div class="icon">
                                    <a class="html5lightbox" title="Wash Video" href="https://youtu.be/yVb0mfmMV9w"><i class="fa fa-play"></i></a> 
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- loundry-apps end -->


    <!-- news-section -->
    <section class="news-section sp-one">
        <div class="container">
            
        </div>
    </section>
    <!-- news-section end -->


    <?php
include "inc/footer.php";
    ?>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->
<script type="text/javascript" id="www-widgetapi-script" src="js/www-widgetapi.js" async=""></script>
<script src="js/iframe_api"></script>
<script src="js/froogaloop2.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src="js/html5lightbox/html5lightbox.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="js/js"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
