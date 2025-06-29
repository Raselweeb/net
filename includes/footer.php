<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ফিক্সড ফুটার উদাহরণ</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* মূল লেআউট স্টাইল */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      background:#FFFFFF;
    }
    
    .wrapper {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }
    
    .main-content {
      flex: 1;
      padding-bottom: 200px;
    }
    
    /* ফুটার স্টাইল */
    .footer {
      width: 100%;
      background: #EBEBEB;
      margin-top: auto;
      position: relative;
      z-index: 100;
    }
    
    .footer-artwork {
      background-image: url('https://i.ibb.co/RGk2fgC6/footer-bg-top3-removebg-preview.png');
      background-size: 1170px auto;
      background-repeat: no-repeat;
      background-position: center;
      width: 100%;
      height: 120px;
    }
    
    .bottom-footer {
      padding: 20px 10px;
    }
    
    /* মেনু স্টাইল */
    .footer-menu ul {
      display: flex;
      flex-wrap: wrap;
      padding: 0;
      margin: 0;
      list-style: none;
    }
    
    .footer-menu ul li {
      padding: 10px 15px;
      border-right: 1px solid silver;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .footer-menu ul li:last-child {
      border-right: none;
    }
    
    .footer-menu ul li:hover {
      background: #777777;
      color: white;
    }
    
    /* লিংক স্টাইলিং (শুধুমাত্র ফুটারের জন্য) */
    .footer a,
    .footer-menu a,
    .bottom-footer a {
      text-decoration: none !important;
      color: inherit;
    }
    
    .footer a:hover,
    .footer-menu a:hover,
    .bottom-footer a:hover {
      text-decoration: none !important;
    }
    
    /* কারিগরি সহায়তা সেকশন স্টাইল */
    .tech-support {
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }
    
    .tech-support span {
      margin-right: 10px;
    }
    
    /* রেস্পন্সিভ স্টাইল */
    @media (max-width: 768px) {
      .footer-artwork {
        height: 80px;
      }
      
      .footer-menu ul {
        flex-direction: column;
      }
      
      .footer-menu ul li {
        border-right: none;
        border-bottom: 1px solid silver;
        text-align: center;
      }
      
      .main-content {
        padding-bottom: 250px;
      }
      
      .tech-support {
        justify-content: center;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <!-- মূল কন্টেন্ট এরিয়া -->
    
    <!-- ফুটার সেকশন -->
    <footer class="footer">
      <div class="footer-artwork"></div>
      <div class="container bottom-footer">
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">ম্যাপ</a></li>
                <li><a href="#">সাইট ম্যাপ</a></li>
                <li><a href="#">প্রতিষ্ঠানের তালিকা</a></li>
                <li><a href="#">আমাদের সেবা সমূহ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-12">
            <p style="font-size:11px;">পরিকল্পনা ও বাস্তবায়নে: এইচটিএমএল, সিএসএস, জাভাস্ক্রিপ্ট, বুটস্ট্রাপ ও চ্যাটজিপিটি।</p>
          </div>
        </div>
        
        <div class="row mt-3">
          <div class="col-md-8 col-12">
            <i>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৫-০৬-২৬ ১৭:৫৬:৩৫</i>
          </div>
          <div class="col-md-4 col-12">
            <div class="tech-support">
              <span>কারিগরি সহায়তায়:</span>
              <img src="https://bteb.gov.bd/themes/responsive_npf/img/np-logo-set.png" alt="logo" class="img-fluid" style="max-width: 120px;">
            </div> 
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>