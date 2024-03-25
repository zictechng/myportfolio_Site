<?php
if (isset($_POST['btn_contact'])) {
    @$contact_name = $_POST['name'];
    @$contact_email = $_POST['email'];
    @$phone_contact = $_POST['phone_number'];
    @$contact_message = $_POST['contact_message'];

    // send details by email here
    $to = "abelken99@gmail.com";
    $subject = "Contact request from Abel Portfolio Website";

    // Create the body message
    @$message .= "<br>
           <div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
      <table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
      <tbody>
          <tr>
              <td bgcolor='#FFFFFF'>
                  <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                  <tbody>
                      <tr>
                          <td>
                              <table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                              <tbody>
                                  
                                  <tr>
                                      <td align='center'>
                                          <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                          <tbody>
                                              <tr>
                                                  <td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                  <td align='center'>
                                                    <h4 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:25px;color:#404040;line-height:28px;font-weight:bold;margin:0;padding:0'> Contact request</h4>
                                                  </td>
                                                  <td width='25'></td>
                                              </tr>
                                              <tr>
                                                  <td colspan='3' height='40'></td></tr><tr>
                                                    <td colspan='5' align='center'>
                                                      <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
                                                      Hello Admin, A user have submitted contact request details from the Abel portfolio website <b> zictech-ng.com </b>! <br> find details below.</p>
                                                      <br>
                                                      <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                  </td>
                                              </tr>
                                              <tr>
                                              <td colspan='4'>
                                                  <div style='width:100%;text-align:center;margin:30px 0'>
                                                      <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                      <tbody>
                                                          <tr>
                                                              <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'><h3>Sumitted Details:</h3> <br>
                                                                  <b>Name: $contact_name</b><br><br>
                                                                  <b>Email address: $contact_email</b><br><br>
                                                                  <b>Phone Number: $phone_contact</b><br><br>
                                                            </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                     </div>
                                                 </td>
                                             </tr>
                                          
                                       </tbody>
                                      </table>
                                   </td>
                                 </tr>
                              
                              <tr bgcolor='#ffffff'>
                                  <td bgcolor='#FFFFFF'>
                                    
                                    <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                      <tbody>
                                        <tr>
                                        <td><p><b>Message:</b> &nbsp; $contact_message </p></td>
                                          
                                        </tr>
                                        <tr><td>&nbsp;</td>
                                  </tr></tbody></table></td>
                                </tr>
                                </tbody>
                              </table>
                                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                              <tbody>
                                  <tr>
                                      <td align='center'>
                                          <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                          <tbody>
                                              <tr><td colspan='2' height='30'></td></tr>
                                              <tr>
                                                   <td width='360' valign='top'>&nbsp;</td>
                                                    <td align='right' valign='top'>
                                                      <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                      <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                      <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                                    </td>
                                              </tr>
                                              <tr><td colspan='2' height='5'></td></tr>
                                            </tbody>
                                          </table>
                                      <p><span style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2024 Abel Portfolio. All Rights Reserved. </span></p></td>
                                    </tr>
                                </tbody>
                            </table>
                           </td>
                      </tr>
                    </tbody>
                  </table>
              </td>
        </tr>
       </tbody>
      </table>
  </div>";
    $header = "From: Abel-Portfolio <info@zictech-ng.com> \r\n";
    $header .= "Cc:noreply@zictech-ng.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    @$retval = mail($to, $subject, $message, $header);

    $success_message = "Message sent! Thank you for contacting me, I will get in touch swiftly. <br>".'<br/>';
}

?>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title> Abel Contact - Portfolio</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here -->
  <?php include('cssSection.php')?>
</head>

<body>
   <?php include("headerPageSection.php")?>
   <!-- tp-header-area-end -->
   <?php include('headerSticker.php')?>

   <?php include('sideBarSection.php')?>
  
   <div class="body-overlay"></div>

   <main>
    
   <?php 
        define("_VERIFICATION_", "contact");
        require('breadcrumb.php')
    ?>

    <!-- tp-abou-me-area-start -->
    <br/>
    <!--contact-area-start -->
    <div class="tp-contact-area pt-135 pb-130">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 ">
                 <div class="tp-contct-wrapper contact-space-40">
                  <div class="tp-contact-thumb mb-60">
                     <img src="assets/img/contact/contact-1.jpg" alt="">
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Mail Address</h4>
                     <span><a href="mailto:(abelken99@gmail.com)">(abelken99@gmail.com)</a></span>
                     
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Phone Number</h4>
                     <span><a href="tel:(+447884619833)">(+44 788 4619 833)</a></span>
                     
                  </div>
                  <!-- <div class="tp-contact-info">
                     <h4 class="contact-title">Address line</h4>
                     <span><a href="https://www.google.com/maps" target="blank">Bowery St, New York, NY 10013,USA. Bowery Steae</a></span>
                  </div> -->
                 </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="tpcontact">
                     <h4 class="tp-contact-big-title">Let’s Talk...</h4>
                     <p>How may I help you today? please, drop me a message I will get back swiftly, thank you.</p>
                     <div class="tpcontact__form tpcontact__form-3">
                        <form method="post">
                           <input name="name" type="text" placeholder="Enter your Name" required>
                           <input name="email" type="email" placeholder="Enter your Mail" required>
                           <input name="phone_number" type="number" placeholder="Enter your Phone" required>
                           <textarea name="contact_message" placeholder="Enter your Message" required></textarea>
                           <h3>3+4-4</h3>
                           <input name="ques" type="number" placeholder="Enter correct answer">
                           <button type="submit" name="btn_contact" class="tp-btn-yellow">Send Message</button>
                        </form>
                        
                     </div>
                     <p class="ajax-response"></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </main>

    <!-- footer-area-start -->
    <?php include('footer.php')?>
   <!-- footer-area-end -->


   <!-- backto-top-area-start -->
   <button class="scroll-top scroll-to-target d-md-none" data-target="html">
      <i class="far fa-angle-double-up"></i>
  </button>
   <!-- backto-top-area-end -->

   <?php include('javascript.php')?>
   <!-- JS here -->
   
</body>
</html>