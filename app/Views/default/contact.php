<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

<<<<<<< HEAD
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    
=======
<div class="form">

    <h1>LAISSEZ-NOUS UN MESSAGE</h1>

        <br><br>
        <form method="post">

            <label for="lastname">Nom :</label>
                <input id="lastname" type="text" name="lastname" placeholder="Votre nom..." />
        <br><br>
   
   
            <label for="email">Email :</label>
                <input id="email" type="email" name="email" placeholder="Ex : johndoe@gmail.com" />
        <br><br>
   
            <label for="message">Message :</label>
                <textarea id="message" name="message" placeholder="Votre message..."></textarea>
        <br><br>
    
            <label for="object">Objet :</label>
                <input id="object" type="text" name="object" placeholder="Titre de votre message...">
        <br><br>
      
     
        <div class="btnsubmit">
            <input type="submit" class="linebuttons" value="Envoyer" />
        </div>
        <br><br>

        </form>
        
</div>

>>>>>>> origin/master
<?php $this->stop('main_content') ?>