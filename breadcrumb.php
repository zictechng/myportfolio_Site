 <!-- breadcrumb area start -->
 <?php
 $breadcrumb_message = '';

    if ( _VERIFICATION_ == "about" ) {
    //Here the code should be executed
    $breadcrumb_message = 'About Me';
    } else if ( _VERIFICATION_ == "project" ){
    // Something else
    $breadcrumb_message = 'Projects Handled';
    }
    else if ( _VERIFICATION_ == "contact" ){
        // Something else
        $breadcrumb_message = 'Contact';
        }
    else {
        $breadcrumb_message = 'Abel Portfolio';
    }
    ?>
    <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative"
         data-background="assets/img/breadcrum/ab-1a.jpg">
         
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title"><?php echo $breadcrumb_message;?></h3>
                      <a href="contact" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
    </section>