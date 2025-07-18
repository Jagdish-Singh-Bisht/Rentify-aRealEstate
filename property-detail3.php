<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI']; // save current page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>1BHK Studio Apartment in Aliganj - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; margin: 0; padding: 0; background: #f9f9f9; }
    .container { max-width: 1100px; margin: auto; padding: 20px; background: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
    .property-header img { width: 100%; border-radius: 8px; }
    .property-info { padding: 20px 0; }
    .property-info h1 { margin: 0; font-size: 28px; color: #333; }
    .property-meta { color: #666; margin-top: 8px; }
    .price { font-size: 24px; font-weight: bold; color: #e67e22; margin-top: 10px; }
    .details-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px; }
    .detail-box { padding: 15px; border: 1px solid #ddd; border-radius: 6px; background: #fefefe; }
    .section-title { margin-top: 40px; font-size: 22px; border-left: 5px solid #e67e22; padding-left: 10px; }
    .description { margin-top: 15px; line-height: 1.6; color: #444; }
    .contact-card { margin-top: 30px; padding: 15px; background: #fff3e0; border-radius: 6px; border: 1px solid #f5c994; }
    .contact-btn { margin-top: 10px; display: inline-block; padding: 10px 15px; background: #e67e22; color: #fff; border-radius: 4px; text-decoration: none; }
  </style>
</head>
<body>
  <div class="container">
    <div class="property-header">
      <img src="./assets/images/buyer3-img.webp" alt="1BHK Studio in Aliganj">
    </div>
    <div class="property-info">
      <h1>1BHK Studio Apartment in Aliganj, Lucknow</h1>
      <div class="property-meta">Fully Furnished | 550 sq.ft | 2nd Floor | North Facing</div>
      <div class="price">₹22 Lakhs</div>
    </div>
    <div class="details-grid">
      <div class="detail-box"><strong>Property Type:</strong> Studio Apartment</div>
      <div class="detail-box"><strong>BHK:</strong> 1</div>
      <div class="detail-box"><strong>Bathrooms:</strong> 1</div>
      <div class="detail-box"><strong>Age of Property:</strong> 1 year</div>
      <div class="detail-box"><strong>Water Supply:</strong> Corporation + Borewell</div>
      <div class="detail-box"><strong>Parking:</strong> Street Parking</div>
    </div>
    <h2 class="section-title">Property Description</h2>
    <div class="description">
      Compact and cozy studio apartment ideal for bachelors or small family. Includes bed, AC, modular kitchen, and is ready to move in.
    </div>
    <h2 class="section-title">Verification Details</h2>
    <div class="description">
      ✔ Property Tax Paid<br>
      ✔ RERA ID: UPLKO123458<br>
      ✔ Verified on 15 May 2025
    </div>
    <div class="contact-card">
      <strong>Owner:</strong> Aamir Khan (Owner Verified)<br>
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        📞 Phone: +91 9876543210<br>
        📧 Email: aamir.khan@rentify.in
      <?php else: ?>
        <a href="login.html" class="contact-btn">Login to View Contact</a>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
