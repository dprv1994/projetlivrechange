<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

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

<?php $this->stop('main_content') ?>