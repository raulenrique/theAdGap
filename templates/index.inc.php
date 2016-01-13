
    <!-- Home -->
    <header class="intro">
        <div class="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">The AdGap</h1>
                        <p class="intro-text">A <strong>marketplace</strong> for <strong>advertising </strong>space.<br>Created for <strong>publishers</strong> and <strong>advertisers</strong><br>to <strong>purchase</strong> and <strong>sell</strong> advertising <strong> space</strong>, <br>seamlessly.</p>
                        <a class="btn btn-info btn-lg btn-block page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>About The AdGap</h2>
                <p>Firms advertise to stay relevant. Organisations use ad spaces to sell an idea and communicate a message about their brand. Individuals through social media and blogs voice their opinions or live influential and aspirational lives and have a following. Youtubers create online content and build relationships with their loyal subscribers through vlogs and videos. 
                <br>
                <br>The Ad Gap is a simple platform where clients can purchase advertising space for offline and online channels while reducing time and money spent on maximising advertising efforts.</p>
                <a href="#statsandpress" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics and Press -->
    <section id="statsandpress" class="container content-section text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="section-header">Statistics and Press</h2>
                <p class="section-text">Firms advertise to stay relevant. Organisations use ad spaces to sell an idea and communicate a message about their brand. Individuals through social media and blogs voice their opinions or live influential and aspirational lives and have a following. Youtubers create online content and build relationships with their loyal subscribers through vlogs and videos. 
                <br>
                <br>The Ad Gap is a simple platform where clients can purchase advertising space for offline and online channels while reducing time and money spent on maximising advertising efforts.</p>
                <a href="#users" class="btn btn-circle page-scroll">
                <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Users -->
    <section id="users" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Advertisers and Publishers</h2>
                <p>Firms advertise to stay relevant. Organisations use ad spaces to sell an idea and communicate a message about their brand. Individuals through social media and blogs voice their opinions or live influential and aspirational lives and have a following. Youtubers create online content and build relationships with their loyal subscribers through vlogs and videos. 
                <br>
                <br>The Ad Gap is a simple platform where clients can purchase advertising space for offline and online channels while reducing time and money spent on maximising advertising efforts.</p>
                <a href="#technology" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>

     <!-- Technology -->
    <section id="technology" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="section-header">Technology</h2>
                <p  class="section-text">Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply downlobad the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.
                This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.
                Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.
                <br><br>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <a href="#contact" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>

     <!-- Contact -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
               
              <form id="feedbackandquestions" action=".\?page=feedbackandquestions" method="POST" class="form-horizontal">
               <h2 class="text-center">Contact Us</h2>
               <p>Feel free to email us to ask us about any general enquiries</p>


                <div class="form-group <?php if($errors['email']): ?> has-error <?php endif; ?>">

                    <label for="emailaddress" >Email</label>
                      <input type="email" class="form-control" id="emailaddress" name="email" placeholder="example@mail.com"
                      value="<?php echo $email; ?>">
                      <div class="help-block"><?php echo $errors['email']; ?></div>

                </div>

                <div class="form-group <?php if($errors['subject']): ?> has-error <?php endif; ?>">

                    <label for="messagesubject" >Subject</label>
                      <input class="form-control" id="messagesubject" name="subject" placeholder="question regarding service , feedback about site usability, media enquiries"
                      value="<?php echo $subject; ?>">
                      <div class="help-block"><?php echo $errors['subject']; ?></div>
                
                </div>

                <div class="form-group <?php if($errors['message']): ?> has-error <?php endif; ?>">
                   
                    <label for="messagecontent" >Message</label>
                    <textarea class="form-control" rows="3" id="messagecontent" name="message" placeholder="Please enter your message here."
                    value="<?php echo $message; ?>"> </textarea>
                    <div class="help-block"><?php echo $errors['message']; ?></div>
                
                </div>

                <div class="form-group">
    
                    <div class="checkbox">
                        <label>
                          <input id="newsletter" name="newsletter" type="checkbox" <?php if($newsletter): ?> checked <?php endif; ?>
                          value="yes"> 
                          Sign Up for our monthly Newsletter. Full of guides, advice, updates and tips for buying and selling on the site
                        </label>
                    
                    </div>

                </div>

                <div class="form-group">
                  
                    <div class="col-lg-8 col-lg-offset-2">
                        <button class="btn btn-primary">Send Message</button>
                    </div>
                
                </div>
                      

                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
                </form> 
            </div>
        </div>
    </section>
