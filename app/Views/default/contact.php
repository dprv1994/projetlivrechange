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
                                <label for="lastname">Nom :</label>
                                    <input type="text" class="form-control" placeholder="Votre nom *" id="lastname" required data-validation-required-message=" SVP entrez votre nom...">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <label for="email">Email :</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre Email *" id="email" required data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                <label for="object">Objet :</label>
                                    <input type="tel" class="form-control" placeholder="L'objet de votre message *" id="object" required data-validation-required-message="SVP entrez un objet.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="message">Message :</label>
                                    <textarea class="form-control" placeholder="Votre Message *" id="message" required data-validation-required-message="SVP saisissez votre message"></textarea>
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