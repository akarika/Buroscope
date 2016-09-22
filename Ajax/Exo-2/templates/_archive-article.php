<?php include "_header.php"; ?>



	<section id="actus" class="row">
		<?php foreach($articles as $key => $article): ?>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="article-<?=$article['id']?>.html"><h2 class="panel-title"><?= $article["title"]?></h2></a>

				</div>
				<div clas="panel-body">
					<p><?= extrait($article["content"]);?></p>
				</div>
			</div>
		</div>

		<?php endforeach?>

	</section>

<?php include "_footer.php"; ?>
