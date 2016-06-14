	

	<!-- post display!! -->
<?php foreach($post as $post) : ?>
	<div class="container">
	<article>
		<header>
			<h2>Title: <?= $post['title'] ?></h2>
			<p>Published: <small><time pubdate="pubdate"><?= $post['date'] ?></time></small></p>
		</header>

		<div class="body"><p><?= $post['post'] ?></p></div>

		<footer>
			<p>
			<small>Author: <?= $post['author'] ?></small>
			</p>
		</footer>
	</article>
	</div>
<?php endforeach; ?>
