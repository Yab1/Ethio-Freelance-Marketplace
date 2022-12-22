<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

</head>

<style type="text/css">
  *, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 100%;
}

body {
  font-family: acumin-pro, system-ui, sans-serif;
  margin: 0;
  display: grid;
  grid-template-rows: auto 1fr auto;
  font-size: 14px;
  background-color: #f4f4f4;
  align-items: start;
  min-height: 100vh;
}

.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  background-color: #141d2a;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-family: 'Pacifico', cursive;
  font-weight: 400;
  text-transform: lowercase;
  font-size: 1.5rem;
  color: white;
}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
  color: white;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
  color: white;
  
}

.footer address {
  font-style: normal;
  color: #999;
}


.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}
.footer a:hover{
  color: white;
}
.footer__nav {
  display: flex;
  flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: #999;
}

.nav__ul--extra {
  column-count: 2;
  column-gap: 1.25em;

}


.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}
.footer__addr p{
color: white;
}
.social-logo{
cursor: text;
}
.social-logo #icons{
color: #999;
width: 20px;
margin-right: 15px;
}
#icons:hover{
 color: white;
}
@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}

</style>
<body>
<footer class="footer" >
  <div class="footer__addr">
    <h1 class="footer__logo">Freelance Marketplace</h1>
        
    <h2>Email</h2>
    
    <address>
      FreelanceJobs@gmail.com<br>
    </address>
    <p>Follow Us</p>
      <div class="social-logo">
             <a href=""><i class="fa fa-facebook" id="icons"></i></a>
              <a href=""><i class="fa fa-twitter" id="icons"></i></a>
              <a href=""><i class="fa fa-instagram" id="icons"></i></a>
              <a href=""><i class="fa fa-linkedin" id="icons"></i></a>
        </div> 
  </div>
   
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">About</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">About Us</a>
        </li>

        <li>
          <a href="#">Contact Us</a>
        </li>
            
        
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Categories</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">Graphics & Design</a>
        </li>
        
        <li>
          <a href="#">Web Development</a>
        </li>
        
        <li>
          <a href="#">Video Editing</a>
        </li>
        
        <li>
          <a href="#">Translation</a>
        </li>
        
        <li>
          <a href="#">Writing</a>
        </li>
        
        <li>
          <a href="#">Voice Over</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Support</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Help & support</a>
        </li>
        
        <li>
          <a href="#">Getting Hired</a>
        </li>
        
        <li>
          <a href="#">Hiring Freelancer</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2022 Something. All rights reserved.</p>
    
   
  </div>
</footer>

</body>
</html>