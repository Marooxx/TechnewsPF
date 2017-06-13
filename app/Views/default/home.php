<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<!-- Pour inclure le css-->
<?php $this->start('css'); ?>
<!--TOut ce qui sera inclut ici, viendra se placer dans la section "css" du layout  -->
<?php $this->stop('css'); ?>


<?php $this->start('contenu'); ?>
	<h2>Let's code.</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
<?php $this->stop('contenu'); ?>



<!-- Pour inclure es scripts  -->
<?php $this->start('script'); ?>
<!--TOut ce qui sera inclut ici, viendra se placer dans la section "script" du layout  -->
<?php $this->stop('script'); ?>
