<?php  
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/includes/css/inde.css">
	<link rel="stylesheet" type="text/css" href="view/includes/css/faq.css">
	
	<link rel="stylesheet" type="text/css" href="view/includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="view/includes/res/font-awesome/css/font-awesome.min.css">
	<script src="view/includes/js/jquery.js"></script>
	<script src="view/includes/js/bootstrap.min.js"></script>

<style>
	.header1{background-color: #EEEEEE;padding-left: 1%;}
	.header2{padding:20px 40px 20px 40px;color:#fff;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff;}
</style>

	<title>Login and Signup</title>
</head>
<body>
	<?php require 'view/includes/index-nav.php';?>

<!--Header-->
<div class="row header1" style=" ">
	<div class="col-lg-4">
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Freelance Marketplace</h1>
				<p>Remember, time is money. Use it properly. Do not waste your time thinking when others are getting things done here.</p>
				<a href="view/register.php" class="btn btn-warning btn-lg">It's Free!! Join Now!!!</a>
				<p></p>
				<div class="btn-group">
					<a href="#how" type="button" class="btn btn-info">How it works</a>
					<a href="#fq" type="button" class="btn btn-default">FAQ</a>
				</div>
			</div>
		</div>	
	</div>
<!--End Header-->



	<!--slider-->
	<div class="col-lg-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="view/includes/res/img/computer.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3 style=" color: black;">Work</h3>
		        <p style=" color: black;">Work hard to be successful.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="view/includes/res/img/mug.jpg" alt="Chania">
		      <div class="carousel-caption">
		        <h3 style=" color: black;">Time</h3>
		        <p style=" color: black;">Do not waste your time.</p>
		      </div>
		    </div>

		    <div class="item">
		      <img src="view/includes/res/img/coat.jpg" alt="Flower">
		      <div class="carousel-caption">
		        <h3 style=" color: black;">Believe</h3>
		        <p style=" color: black;">Always believe in yourself.</p>
		      </div>
		    </div>
		  </div>
</div>
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span><i class="fa fa-chevron-left" aria-hidden="true" style=" margin-top: 300px;"></i></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span><i class="fa fa-chevron-right" aria-hidden="true" style=" margin-top: 300px;"></i></span>  
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
<!--End slider-->

<!--Individual register tip-->

<div style="background:#cce5ff; ">
<div class="container text-center" style="padding:5%;">
	<div class="row">
		<div class="col-lg-6 card" style="padding:40px 80px 40px 80px; background:#fff; ">
			<h1>Need works done?</h1>
			<p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes. Whatever your needs, there will be a freelancer to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more). It is the simplest and safest way to get work done online.</p>
			<p></p>
			<a href="loginReg.php" class="btn btn-success btn-lg">Get Started</a>
		</div>
		<div class="col-lg-6" style="padding:40px 80px 40px 80px;margin-top:15px;box-shadow: 1px 1px 5px 5px rgba(0, 0, 0, 0.2), 0 6px 0px 0 rgba(0, 0, 0, 0.19);background:#fff;">
			<h1>Looking for work?</h1>
			<p>If you are an expert in any kind of computer related or online work, then do not hesitate to join our platform. It is easy to use and payment is secured. It is a great platform to those people who are skillful. So do not miss the chance to explore the job posts and make some money.</p>
			<p></p>
			<a href="loginReg.php" class="btn btn-primary btn-lg">Get Started</a>
		</div>
	</div>
</div>
</div>

<!--End Individual register tip-->



      <!--How it works-->
<div style="background:#cce5ff; margin: auto; width: 100% ">
<div class="container text-center" style="padding:4%; width: 100%;" id="how">
	<h1 class="card header2" style="background:#007BFF;">How it works</h1>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px; ">
		<div class="col-lg-6">
			<h3>Post Projects For Free</h3>
			<p>It's always free to post your project. You’ll automatically begin to receive bids from our freelancers. Also, you can browse through the talent available on our site, and contact them by the contact information.</p>
		</div>
		<div class="col-lg-6">
			<img src="view/includes/res/img/img01.jpg">
		</div>
	</div>

	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Feel Free To Talk</h3>
			<p>It is easier to talk with the freelancers here. So before you hire any freelancer feel free to talk with them. Tell them what you need and get the project done in the shortest possible time.</p>
		</div>
		<div class="col-lg-6">
			<img src="view/includes/res/img/img03.jpg">
		</div>
	</div>
	<div class="row card" style="padding:30px 60px 30px 60px;margin:30px;">
		<div class="col-lg-6">
			<h3>Build An Employer Profile</h3>
			<p>If you have a lot of works to be done or run a small business that needs some freelancers in a daily basis, this is the perfect place for you. Build your employer profile today and start hiring.</p>
		</div>
		<div class="col-lg-6">
			<img src="view/includes/res/img/img04.jpg">
		</div>
	</div>
</div>
</div>
<!--End How it works-->




<!--FAQ-->
<div id="fq">
	<p> Q & A</p>
</div>

<div class="content" >
<div>
  <input type="checkbox" id="question1" name="q"  class="questions">
  <div class="plus"> > </div>
  <label for="question1" class="question">
    What is Freelance Marketplace?
  </label>
  	<div class="answers">
    Freelance marketplace is an online outsourcing platform that puts employers and businesses in contact with a global network of freelancers. Any member can post a project, whether a short- or long-term job, and choose from skilled freelancers who offer bid proposals with rate for completing the work. It's a mutually beneficial arrangement. <br>Employers can have their pick of thousands of freelancers who have the exact skills needed to get the job done, without undertaking the expense and commitment of hiring full-time employees in person. <br>Freelancers can tap into a readily available source of constant part-time and full-time work opportunities from employers who are specifically seeking them out.
  	</div>
</div>

<div>
  <input type="checkbox" id="question2" name="q" class="questions">
  <div class="plus"> > </div>
  <label for="question2" class="question">
   I am an Employer, how will this site work for me?
  </label>
  <div class="answers">
    You can gain a competitive advantage over your competition by tapping into a skilled global workforce on demand. <br>If you are a small business and can't afford to hire a full-time staff, don't fret! The power of Freelancer is available for small to medium businesses! Whether it's a website that needs building, business cards or stationery that needs designing, a product that needs to be designed or manufactured, or research that needs to be done, this is the place for you! <br>Thousands of skilled workers are ready to start working right now! All you need to do is post a project!
    
  </div>
</div>
  
<div>
  <input type="checkbox" id="question3" name="q" class="questions">
  <div class="plus"> > </div>
  <label for="question3" class="question">
   I am a Freelancer, how will this site work for me?  
  </label>
  <div class="answers">
    With Freelancer, you can work at home and tap into a global network of businesses and projects across a huge range of industries - the ultimate opportunity in job flexibility! <br>Work on what you want, when you want and where you want to! The lifestyle of a freelancer is taking off. By working as a Freelancer online, you can greatly increase your client base and job throughput. <br>To start, all you need to do is sign up and start bidding. It's FREE!
   
  </div>
</div>
<div>
  <input type="checkbox" id="question4" name="q" class="questions">
  <div class="plus"> > </div>
  <label for="question4" class="question">
   Do I have to pay to register?  
  </label>
  <div class="answers">
    No. Freelance marketplace is absolutely free to register and explore the posted job offers, freelancers and employers.
  </div>
</div>

</div>

<!--end FAQ -->

	  <div class="our-services">
          <div class="service-inner">
            <h1 class="title-services">Improve your Skills or Learn new Ones</h1>
            <div class="border"></div>
            <div class="service-container">
              <div class="service-box">
              	<a href="" style=" color: #555; ">
                <div class="service-icon">
                  <i class="fa fa-paint-brush"></i>
                </div>
                <div class="title-service">Graphics & Design</div>
                <div class="service-desc">
                 Learn the theory, principles and practices involved in graphic design.
                </div>
               </a>
              </div>
 						
              <div class="service-box">
              	<a href="" style=" color: #555; ">
                <div class="service-icon">
                  <i class="fa fa-code"></i>
                </div>
                <div class="title-service">Web Dev</div>
                <div class="service-desc">
                 Learn web development starting from the fundamentals and work your way to expert level with these courses.
                </div>
              </a>
              </div>

              <div class="service-box">
              	<a href="" style=" color: #555; ">
                <div class="service-icon">
                  <i class="fa fa-video-camera"></i>
                </div>
                <div class="title-service">Video Editing</div>
                <div class="service-desc">
                 Learn video editing online at your own pace. Start today and improve your skills.
                </div>
              </a>
              </div>

              <div class="service-box">
              	<a href="" style=" color: #555; ">
                <div class="service-icon">
                  <i class="fa fa-music"></i>
                </div>
                <div class="title-service">Audio Editing</div>
                <div class="service-desc">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio totam in est a voluptate obcaecati alias, vitae perspiciatis explicabo voluptatem.
                </div>
              </a>
              </div>

              <div class="service-box">
              	<a href="" style=" color: #555; ">
                <div class="service-icon">
                  <i class="fa fa-database"></i>
                </div>
                <div class="title-service">Data Science</div>
                <div class="service-desc">
                  Today, Data rules the world. This has resulted in a huge demand for Data Scientists. Learn Data Science from the comfort of your browser.
                </div>
              </a>
              </div>

              <div class="service-box">
              	<a href="" style=" color: #555; ">
                <div class="service-icon">
                  <i class="fa fa-pencil-square-o"></i>
                </div>
                <div class="title-service">Writing</div>
                <div class="service-desc">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio totam in est a voluptate obcaecati alias, vitae perspiciatis explicabo voluptatem.
                </div>
              </a>
              </div>

            </div>
          </div>
        </div>


  


<?php
require 'view/includes/footer.php' ;
?>
</body>
</html>