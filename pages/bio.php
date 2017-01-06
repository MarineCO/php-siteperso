<?php $data = getUserData('../data/user.json'); ?>

<div>

	<h2>Affichage des données utilisateur :</h2>

	<h3>
		<?= $data->name ?>
	</h3>
	<h3>
		<?= $data->first_name ?>
	</h3>
	<h3>
		<?= $data->occupation ?>
	</h3>
	<h3>
		<?php foreach ($data->experiences as $val): ?>
			
			<h4>
				<?= $val->year ?>
			</h4>
			<h4>
				<?= $val->company ?>
			</h4>

		<?php endforeach ?>
	</h3>

</div>

<h2>Web Développeuse</h2>

<img src="#" alt="photo">

<p>Parcours. Résumé en 2 lignes. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur repellat et soluta sapiente pariatur excepturi mollitia quaerat qui, facere, possimus deserunt molestiae atque animi aut commodi suscipit adipisci odio dolor.</p>

<p>Ce que je fais. Résumé en 2 lignes. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo recusandae eius deserunt aperiam quam, iste nostrum corporis dolores est perspiciatis voluptatum praesentium accusamus ipsum nam doloribus magni voluptate commodi laudantium.</p>

<div class="punchline">
	<h2>Jeune développeuse junior motivée, dynamique et curieuse.</h2>
	<p class="citation">"Lorsqu'on s'occupe d'informatique il faut faire comme les canards... Paraître calme en surface et pédaler comme un forcené par en dessous." Richard LALLEMENT</p>
	<h2>#InCodeWeTrust</h2>
</div>
