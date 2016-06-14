
	<!-- post display!! -->
<?php foreach($posts as $post) : ?>
	<div class="container">
	<article>
		<header>
			<h2>Title: <a href="single.php?id=<?= $post['id'] ?>">
			<?= $post['title'] ?></a>
			</h2>
		
			<p>Published: <small><time pubdate="pubdate"><?= $post['date'] ?></time></small></p>
		</header>
<hr>
		<div class="body"><p><?= $post['post'] ?></p></div>

		<footer>
		<hr>
			<p>
			<small>Author: <?= $post['author'] ?></small>
			</p>
		</footer>
	</article>
	</div>
<?php endforeach; ?>
