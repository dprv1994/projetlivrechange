<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<h1> <i class="fa fa-paper-plane" aria-hidden="true"></i> Laissez-nous un message</h1>
<br><br>
    <?php if(isset($errors) && !empty($errors)):?>
        <div class="alert alert-danger">
            <?=implode('<br>', $errors); ?>
        </div>
    <?php endif; ?>

    <?php if(isset($success) && $success == true):?>
        <div class="alert alert-success">
            Votre message a bien été envoyé !
        </div>
    <?php endif; ?>
<form method="post">           
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="fullname">Nom complet :</label>
                                    <input type="text" class="form-control" placeholder="Votre nom complet" id="fullname" name="fullname" required data-validation-required-message=" SVP entrez votre nom...">
                                    <p class="help-block text-danger"></p>
                                </div>

                                
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" placeholder="Votre Email *" id="email" name="email" required data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                <label for="subject">Objet :</label>
                                    <input type="tel" class="form-control" placeholder="L'objet de votre message *" id="subject" name="subject" required data-validation-required-message="SVP entrez un objet.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="message">Message :</label>
                                    <textarea class="form-control" placeholder="Votre Message *" id="message" name="message" required data-validation-required-message="SVP saisissez votre message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
                                <div class="btnsubmit">
                                <button type="submit" id="submit" class="linebuttons">ENVOYER</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</form>
<br><br>


<?php $this->stop('main_content') ?>