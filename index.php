<?php
// new_dawn_technologies.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Dawn Technologies</title>
    <link href="NDT_LOGO_bg.png" rel="icon" type="image/png"> <!-- Favicon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
    body {
      background-color: #0A0E29;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
    .orange {
      color: #ff7f00;
    }
    .bg-deep {
      background-color: #11152F;
    }
    .bg-footer {
      background-color: #1A1F3C;
    }
    .logo {
      max-height: 120px;
    }
    .header-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .header-title {
      flex: 1;
      text-align: center;
    }
    .card ul li {
      color: #f8f9fa;
    }
    .text-warning {
      color: #fff !important;
      font-weight: bold;
    }
    .package-card {
      border: 1px solid #ff7f00;
      background-color: #11152F;
      padding: 1.5rem;
      border-radius: 0.75rem;
      transition: all 0.3s ease;
    }
    .package-card:hover {
      transform: translateY(-5px);
      background-color: #191f45;
    }
    .package-price {
      font-size: 1.5rem;
      color: #ff7f00;
      font-weight: bold;
    }
    @media (max-width: 576px) {
      .header-title {
        text-align: center;
        flex: 100%;
      }
    }
  </style>
</head>
<body>
  <header class="py-4 container">
    <div class="header-flex">
      <img src="NDT_LOGO_bg.png" alt="New Dawn Technologies Logo" class="logo">
      <div class="header-title">
        <h1 class="display-4 orange fw-bold">NEW DAWN TECHNOLOGIES</h1>
        <p class="fst-italic text-light">Innovating the Web, One Dawn at a Time</p>
      </div>
    </div>
  </header>

  <section class="container py-5">
    <h2 class="text-center mb-4">Core Services</h2>
    <div class="row g-4">
      <div class="col-md-4 animate__animated animate__fadeInUp">
        <div class="card bg-deep h-100 p-4">
          <h4 class="orange">Web Development & Design</h4>
          <ul>
            <li>Responsive & Modern Website Design</li>
            <li>E-commerce Websites</li>
            <li>Personal & Business Websites</li>
            <li>Website Maintenance & Updates</li>
          </ul>
          <p class="text-warning">Packages start from $80 (Basic)</p>
        </div>
      </div>
      <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="card bg-deep h-100 p-4">
          <h4 class="orange">System Development & Design</h4>
          <ul>
            <li>Custom Software Solutions</li>
            <li>Business Management Solutions</li>
            <li>Inventory & Payroll Systems</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="card bg-deep h-100 p-4">
          <h4 class="orange">Domain Services</h4>
          <ul>
            <li>Domain Registration (.com, .net, .org, etc)</li>
            <li>Domain Hosting Packages</li>
            <li>Email Hosting</li>
            <li>Secure & Reliable Servers</li>
          </ul>
          <p class="text-warning">
            Get a free domain with every new website<br>
            Discounted rates for Startups & SMEs
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="container py-5">
    <h2 class="text-center orange mb-4">Check Out Our Packages</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="package-card h-100">
          <h5 class="orange">Basic</h5>
          <p class="package-price">USD 80</p>
          <ul>
            <li>3 Pages Maximum</li>
            <li>Mobile Responsive</li>
            <li>Search Engine Optimised</li>
            <li>Hyperlinks Integration</li>
            <li>Google Maps Integration</li>
            <li>Copywriting</li>
            <li>High Quality Images</li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="package-card h-100">
          <h5 class="orange">Standard</h5>
          <p class="package-price">USD 115</p>
          <ul>
            <li>Free Domain (.co.zw)</li>
            <li>1 Month Hosting</li>
            <li>8 Pages Maximum</li>
            <li>Free SSL Certificate</li>
            <li>Control Panel</li>
            <li>Mobile Responsive</li>
            <li>Search Engine Optimised</li>
            <li>Hyperlinks Integration</li>
            <li>Google Maps Integration</li>
            <li>Copywriting</li>
            <li>High Quality Images</li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="package-card h-100">
          <h5 class="orange">Premium</h5>
          <p class="package-price">USD 240</p>
          <ul>
            <li>Free Domain (.co.zw)</li>
            <li>5 Month Hosting</li>
            <li>25 Pages Maximum</li>
            <li>Better Overall Design</li>
            <li>Mobile Responsive</li>
            <li>Free SSL Certificate</li>
            <li>Control Panel</li>
            <li>Search Engine Optimised</li>
            <li>Hyperlinks Integration</li>
            <li>Google Analytics</li>
            <li>Google Maps Integration</li>
            <li>Copywriting</li>
            <li>High Quality Images</li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="package-card h-100">
          <h5 class="orange">E-Commerce</h5>
          <p class="package-price">USD 480</p>
          <ul>
            <li>Free Domain (.co.zw)</li>
            <li>Online Payments</li>
            <li>12 Month Free Hosting</li>
            <li>Unlimited Pages</li>
            <li>Free SSL Certificate</li>
            <li>Control Panel</li>
            <li>Better Overall Design</li>
            <li>Mobile Responsive</li>
            <li>Search Engine Optimised</li>
            <li>Hyperlinks Integration</li>
            <li>Google Analytics</li>
            <li>Google Maps Integration</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-footer">
    <div class="container text-center">
      <h2 class="mb-4">Why Choose Us</h2>
      <div class="row text-light">
        <div class="col-md-4 mb-3">✅ Experienced & Innovative Team</div>
        <div class="col-md-4 mb-3">✅ Affordable Packages</div>
        <div class="col-md-4 mb-3">✅ Fast Turnaround Times</div>
        <div class="col-md-4 mb-3">✅ Ongoing Support & Maintenance</div>
        <div class="col-md-4 mb-3">✅ Tailored Solutions for Your Business</div>
      </div>
    </div>
  </section>

  <footer class="text-center py-5">
    <h3>Contact Us</h3>
    <p class="orange fs-5">+263 777 233 862 | +263 773 697 673</p>
    <a href="tel:+263777233862" class="btn btn-warning px-4 py-2">Call Now</a>
    <p class="text-muted mt-3">Let’s build your digital presence today!</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
