<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

    <h1>POUR NOUS CONTACTER</h1>


<form action="" method="post" class="STYLE-NAME">
    <h1>LAISSEZ-NOUS UN MESSAGE</h1>
    <label>
        <span>Votre Nom :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>
   
    <label>
        <span>Votre Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
   
    <label>
        <span>Message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
    </label>
     <label>
        <span>Objet :</span><select name="selection">
        <option value="Job Inquiry">Job Inquiry</option>
        <option value="General Question">General Question</option>
        </select>
    </label>    
     <label>
        <span>&nbsp;</span>
        <input type="button" class="button" value="Envoyer" />
    </label>    
</form>

<?php $this->stop('main_content') ?>