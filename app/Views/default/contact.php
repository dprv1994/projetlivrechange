<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

    

    <h1 class="section-heading">Laissez-nous un message</h1>
               
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre nom *" id="name" required data-validation-required-message=" SVP entrez votre nom...">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="L'objet de votre message *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="btnsubmit">
                                <button type="submit" class="linebuttons">ENVOYER</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   <br><br>


<?php $this->stop('main_content') ?>