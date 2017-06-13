<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('contenu') ?>
	<h2>Hello World</h2>
    <img src="<?php echo $this->assetUrl('img/27_spidermanf.gif'); ?>">
    <p> Bravo Amigo!!</p>

<?php $this->stop('contenu') ?>
