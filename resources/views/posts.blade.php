<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Blog</title>
	<link rel="stylesheet" href="app.css">
</head>

<body>
	<?php foreach ($posts as $post) : ?>
	<article>
		<?= $post; ?>
	</article>
	<?php endforeach; ?>
	<!-- <h1><a href="/posts/my-first-post">My First Post</a></h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore natus a minima deserunt id alias esse illo
			quisquam explicabo placeat molestias ab ipsam, voluptas, suscipit sit ad! Explicabo aliquam fuga,
			repudiandae
			facilis repellendus ratione asperiores aut nam laborum consequatur incidunt ex vitae, quis quos consequuntur
			magnam esse doloremque, tempore blanditiis?
		</p>
	</article>
	<article>
		<h1><a href="/posts/my-second-post">My Second Post</a></h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore natus a minima deserunt id alias esse illo
			quisquam explicabo placeat molestias ab ipsam, voluptas, suscipit sit ad! Explicabo aliquam fuga,
			repudiandae
			facilis repellendus ratione asperiores aut nam laborum consequatur incidunt ex vitae, quis quos consequuntur
			magnam esse doloremque, tempore blanditiis?
		</p>
	</article>
	<article>
		<h1><a href="/posts/my-third-post">My Third Post</a></h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore natus a minima deserunt id alias esse illo
			quisquam explicabo placeat molestias ab ipsam, voluptas, suscipit sit ad! Explicabo aliquam fuga,
			repudiandae
			facilis repellendus ratione asperiores aut nam laborum consequatur incidunt ex vitae, quis quos consequuntur
			magnam esse doloremque, tempore blanditiis?
		</p> -->
	<!-- </article> -->
</body>

</html>