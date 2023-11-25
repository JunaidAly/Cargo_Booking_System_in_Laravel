<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Care Page</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Customer Care</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#support">Support</a>
        </li>
      </ul>
    </div>
  </nav>

  
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Contact Us</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-6">
          <h5>Contact Information</h5>
          <p>Email: cargobooking@gmail.com</p>
          <p>Phone: +1 123 456 7890</p>
          <p>Address: 123 Street, City, Country</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-5">Frequently Asked Questions</h2>
      <div class="accordion" id="faqAccordion">
        <div class="card">
          <div class="card-header" id="faqHeading1">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse1"
                aria-expanded="true" aria-controls="faqCollapse1">
                Question 1?
              </button>
            </h5>
          </div>
          <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
            <div class="card-body">
            
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="faqHeading2">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faqCollapse2"
                aria-expanded="false" aria-controls="faqCollapse2">
                Question 2?
              </button>
            </h5>
          </div>
          <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
            <div class="card-body">
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

 
  <section id="support" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Support</h2>
      <div class="row">
        <div class="col-md-6">
          <h5>Customer Support</h5>
          <p>Email: cargobooking@gmail.com</p>
          <p>Phone: +1 987 654 3210</p>
        </div>
        <div class="col-md-6">
          <h5>Technical Support</h5>
          <p>Email: techsupport@gmail.com</p>
          <p>Phone: +1 555 123 4567</p>
        </div>
      </div>
    </div>
  </section>


</body>

</html>
