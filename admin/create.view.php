<div class="container">
			<h1>Create a new post</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="title">Title: </label>
				<input type="text" name="title" id="title">	
			</li>

			<li>
				<label for="post">Post: </label>
				<textarea type="text" name="post" id="post"></textarea>
			</li>

			<li>
				<label for="author">Author: </label>
				<input type="text" name="author">	
			</li>
			<li>
				<input type="submit" value="Create post">	
			</li>
		</ul>
	</form>
	<?php if (isset($status)): ?>
		<p><?= $status; ?></p>
	<?php endif; ?>
</div>
