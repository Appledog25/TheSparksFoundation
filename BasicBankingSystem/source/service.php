<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="text/css">
   <style type=text/css>
   
   .head{
    font-family: 'Oxygen', sans-serif;
    font-weight:600;
    text-shadow:10px 10px 15px black;
   }
   .detail{
    background-color: whitesmoke;

}
.detail-item{
    background: #fff;
    text-align: center;
    box-shadow: 0 1px 2px 0 rgba(90,91,95,0.1);
    -webkit-box-shadow:0 1px 2px 0 rgba(90,91,95,0.1);
    -moz-box-shadow:0 1px 2px 0 rgba(90,91,95,0.1);
    margin: 2rem 0;
    padding: 3.5rem 1.5rem;
    border-radius: 4px;
    transition: all 0.5s ease-in-out;
}
.detail-item:hover{
    -webkit-box-shadow:0 21px 19px -2px rgba(217,217,217,1);
    -moz-box-shadow:0 21px 19px -2px rgba(217,217,217,1);
    box-shadow:0 21px 19px -2px rgba(217,217,217,1);
    transform: translateY(-5px);
}
.detail-item span{
    font-size: 2.5rem;
}
.detail-item h2{
    font-size: 1.4rem;
    opacity: 0.8;
    font-weight: 300;
}
.line{
    width: 45px;
    margin:1.2rem auto ;
    background: black;
    height: 2.5px;
}
/* Feature */
.feature .title{
    text-align: left;
}
.feature-left img{
    width: 80%;
    margin: 0 auto;

}
.feature-right{
    margin-top: 4rem;
}
.feature-item{
    margin: 1.4rem 0;
    display: flex;
}
.feature-item div h3{
margin-top: 0;
font-size: 1.4rem;
font-weight: 300;
opacity: 0.85;

}
.feature-item span{
    font-size: 1.1rem;
    color: #fff;
    background: black;
    align-self: flex-start;
    padding: 0.4rem 0.7rem;
    border-radius: 2px;
    margin-right: 1.4rem;
}

/* Feature End */
/* Contact */
.contact .row{
    margin-top: 2rem;
}
.contact .row > div{
     margin: 2rem 0;
     padding: 1rem 0;
}
.contact .row > div h2{
    font-size: 1.4rem;
    font-weight: 300;
    opacity: 0.9;
}
.contact-left form input,
.contact-left form textarea{
    width: 100%;
    font-size: 1.1rem;
    margin: 0.2rem 0;
    padding: 0.8rem 0.6rem;
    border: none;
    border-bottom:1.5px solid #f0f0f0 ;
    outline: 0;
}
.contact-left form input::placeholder,
.contact-left form textarea::placeholder{
    font-size: 1.1rem;
    font-weight: 100;
    opacity: 0.8;
}
.contact-left form input:focus,
.contact-left form textarea:focus{
    border-color: black;
}
.submit-btn{
    margin: 1rem 0;
    border: none;
    font-size: 1.3rem;
    color: #fff;
    background:black ;
    opacity: 0.9;
    padding: 0.8rem 3.4rem;
    border-radius: 2rem;
    transition: all 0.5s ease-in-out;
}
.submit-btn:hover{
    background:#616c6f ;
}
.contact-right div{
    margin: 2rem 0;
}
/* Contact End */
@media screen and (min-width:768px){
    .detail .row{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    .detail-item{
        margin: 0;
    }
    .contact .row{
        display: grid;
        grid-template-columns:repeat(2,1fr) ;
        column-gap: 2rem;
    }
    .contact-right > div:first-child{
        margin-top: 0;
    }
  }
  @media screen and (min-width:992px){
    
    .feature .row{
        display: grid;
        grid-template-columns:repeat(2, 1fr) ;
        align-items:center;
        column-gap: 2rem;
    }
    .feature-right{
        margin-top: 0;
    }
}
  @media screen and (min-width:1200px){
    
    .detail .row{
        grid-template-columns: repeat(3, 1fr);
    }
    .contact .row{
        column-gap: 4rem;
    }
    .contact-right{
        padding-left: 4rem!important;
    }
  }

   </style>
  
    
    <link rel="stylesheet" href="sources/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="sources/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
</head>
<body>
    <!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa fa-university" aria-hidden="true"></i> Secure Bank </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customer.php"><i class="fa fa-users" aria-hidden="true"></i> Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transaction.php"><i class="fa fa-history" aria-hidden="true"></i> Transfer History</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="service.php"><i class="fa fa-cog" aria-hidden="true"></i> Service Desk </a>
        </li>
     </ul>
      
    </div>
  </div>
</nav>
<!-- Quora section -->
<section class="main">
    <h1 class="head">How can we help you?</h1>
    

</section>

 <!-- features -->
 <section class="feature" id="feature">
        <div class="container">
            <div class="row">
                <div class="feature-left">
                    <img src="images/ss.jpeg" alt="">
                </div>
                <div class="feature-right">
                    <div class="title">
                        <h2>Frequently Asked Questions</h2>
                        <p class="text">Customer satisfaction is our policy.</p>

                    </div>
                    <div class="feature-item">
                        
                        <div>
                            <h3>What are your branch hours?</h3>
                            <p class="text">The hours of operation for our branches are:

9:00AM - 5:00PM Monday thru Thursday
9:00AM - 6:00PM on Friday
9:00AM - 12:00PM on Saturday</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        
                        <div>
                            <h3>What do i need to open a new account ? How much money ?</h3>
                            <p class="text">A valid Drivers License, State ID card, or Passport and Social Security Number.

There is no minimum amount required to open a checking or savings account. Certificates of Deposit require a minimum deposit of Rs 10,000.00.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        
                        <div>
                            <h3>Is the mobile banking app free ?</h3>
                            <p class="text">Yes, our Mobile Banking app is free! Our standard banking fees apply, and message and data rates from your mobile carrier may apply.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of feature section -->


 <!-- middle section details -->
 <section class="detail" id="detail">
        <div class="container">
            <div class="row">
                <div class="detail-item">
                    <span><i class="fa fa-university" aria-hidden="true"></i></span>
                    <h2>Branch Details</h2>
                    <div class="line"></div>
                    <p class="text">A bank branch typically consists of a collection of tellers who can aid you in withdrawing money, depositing checks and cash and more. Many Americans prefer the in-person service a bank branch can offer, as it can be frustrating to deal with phone- and email-based customer service representatives. Branches can also be especially helpful if you’re applying for a loan, opening an investment portfolio or making any number of other important financial decisions.</p>

                </div>
                <div class="detail-item">
                    <span><i class='fas fa-balance-scale'></i> </span>
                    <h2>Loan Details</h2>
                    <div class="line"></div>
                    <p class="text">In finance, a loan is the lending of money by one or more individuals, organizations, or other entities to other individuals, organizations etc. The recipient (i.e., the borrower) incurs a debt and is usually liable to pay interest on that debt until it is repaid as well as to repay the principal amount borrowed.</p>

                </div>
                <div class="detail-item">
                    <span><i class="far fa-bell" aria-hidden="true"></i><br></span>
                    <h2>Support & Service</h2>
                    <div class="line"></div>
                    <p class="text">A program that prepares individuals to perform a wide variety of customer services in banks, insurance agencies, savings and loan companies, and related enterprises. Includes instruction in communications and public relations skills, business equipment operation, and technical skills applicable to the methods and operations of specific financial or insurance services.</p>

                </div>
            </div>
        </div>
    </section>

    <!-- End of middle section details -->
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="title">
                <h2><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</h2>
                <p class="text">We'll be glad to help you!</p>

            </div>
            <div class="row">
                <div class="contact-left">
                    <h2>Send Message Here</h2>
                    <form>
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="email" class="form-control" placeholder="Email">
                        <textarea placeholder="Message" rows="6"></textarea>
                        <button type="submit" class="submit-btn">Send</button>
                    </form>
                </div>
                <div class="contact-right">
                    <div>
                        <h2>Visit Branch</h2>
                        <p class="text">Branch Code: 11513, Bank: Secure Bank, Address: Oasis Street, Zip Code: 226002: City: Mumbai: State: Maharashtra</p>

                    </div>
                    <div>
                        <h2>Call Us</h2>
                        <p class="text">0250-67****/0250-578****</p>
                    </div>
                    <div>
                        <h2>Send Email</h2>
                        <p class="text">securebank@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

<!-- Footer -->
<footer class="text-center mt-5 py-5">
<p> <i class="fa fa-copyright" aria-hidden="true"></i> Since 1952  <b>Secure Bank</b> </p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="sources/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>