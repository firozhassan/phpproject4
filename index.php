<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>এসাইনমেন্ট ৪</title>
  </head>
  <body>
  
      <?php

        if (isset($_POST['insert'])){

          // form value get


          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $file = $_POST['file'];

          if (empty($name)){

            $req['name'] = "<P style=\"color:red;\"> * Required </p>";

          }
          if (empty($email)){

            $req['email'] = "<P style=\"color:red;\"> * Required </p>";

          }
          if (empty($phone)){

            $req['phone'] = "<P style=\"color:red;\"> * Required </p>";

          }


          //Email extension checking
          if (isset($email)){

            $email_ex = explode('@', $email);
            $ins_email = end($email_ex);

          }

          // Phone number checking

           $mobile_start = substr($phone, 0, 3 );



          if( empty($name) || empty($email) || empty($phone)  ){

           $msg = "<p class=\"alert alert-danger alert-dismissible fade show\"> All Fields are Required ! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>  </p>";

          }else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
            
            $msg = "<p class=\"alert alert-warning alert-dismissible fade show\"> Invalid Email Address ! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>  </p>";

          }else if ($ins_email != 'codertrust.com'){
            
            $msg = "<p class=\"alert alert-info alert-dismissible fade show\"> Email should be our Organization ! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>  </p>";

           } else if( in_array($mobile_start, ['017', '013', '014', '018', '015', '016', '019' ]) == false ){

            $msg = "<p class=\"alert alert-danger alert-dismissible fade show\"> Please put valid Phone number ! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>  </p>";

           }
          else{

          $msg = "<p class=\"alert alert-success alert-dismissible fade show\"> Data Uploaded Successfully ! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>  </p>";

          }

        }



      ?>




  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3>Add New Student </h3>
 
            <?php

            if(isset($msg) ){

                echo $msg;
         }
            ?>

            <form action="" method="post" enctype="multipart-form-data" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  
                  <?php

                  if (isset($req['name'])){

                    echo $req['name'];
                  }

                  ?>

                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                  <?php

                  if (isset($req['email'])){

                    echo $req['email'];
                  }

                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone *</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #">

                  <?php

                if (isset($req['phone'])){

                echo $req['phone'];
                }

                ?>
                </div>

                <div class="col-md-6 form-group mb-5">
                  <label for="file-upload" class="col-form-label"> <img style="cursor:pointer;" data-toggle="tooltip" title="Profile Photo" width="250px" src="images/profile.png" alt="">    </label>
                  <input type="file" style="display: none;" class="form-control" name="file" id="file-upload">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">age *</label>
                  <input type="number" class="form-control" name="age" id="age"  placeholder="Your Age">

                  <?php

                if (isset($req['age'])){

                echo $req['age'];
                }

                ?>
                </div>
              
              </div>

              
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Sign Up" name="insert" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>




            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-info h-100">
            <h3>=== এ সপ্তাহের এসাইনমেন্ট ===</h3>
            <p class="mb-5"> - ফরম ভেলু গেট
                - ফরম ভেলিডেসন গ্লোবাল
                - ফরম ফিল্ড ভেলিডেসন
                - ইমেইল ভেলিডেসন
                - স্পেসিফিক ইমেইল ভেলিডেসন
                - ফোন নাম্বার ভেলিডেসন
                - বয়স ভেলিডেট করুন যেখানে শুধু মাত্র ১৮ বছরের বেশি এবং ৪০ বছরের কম ইউজার রা সাইনআপ করতে পারবে
                - সাইন আপ করার সময় একটি ম্যাথমেটিকস সলিওসন সিসটেম এড করুন এবং সেটা ভেলিডেট করুন
                - সাথে একটি প্রফাইল ফটো আপলোড করুন এবং জাভাস্ক্রিপ্ট প্রিভিও সিসটেম টাও রেডি করুন
                - স্ট্রিং কেপচা সিসটেম এড করুন এবং সেটার সলিওসন ভেলিডেট করুন
                - ফাইল আপলোডের ক্ষেত্রে ফরমেট ভেলিডেট করুন
                - ৫০০ কিলোবাইট এর বেশি সাইজের ফাইল গুলাকে বাধা দিন</p>
            <ul class="list-unstyled">
              <li class="d-flex">
                <span class="wrap-icon icon-room mr-3"></span>
                <span class="text">Rajshahi, Bangladesh</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-phone mr-3"></span>
                <span class="text">+880 (1712) 3132 95</span>
              </li>
              <li class="d-flex">
                <span class="wrap-icon icon-envelope mr-3"></span>
                <span class="text">iamfirozhassan@gmail.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>