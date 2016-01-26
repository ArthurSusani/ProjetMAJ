<?php $this->layout('layout', ['title' => 'Telephone !']) ?>

<?php $this->start('main_content') ?>

<?php if (isset($_GET['envois'])): ?>

<p> Votre email a peut etre été envoyé </p>
<?php endif ?>



<?php $this->stop('main_content') ?>