<?php include "_header.php"; ?>



	<section id="actus" class="row">
		<?php foreach($articles as $key => $article): ?>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="article-<?=$article['id']?>.html"><h2 class="panel-title"><?= $article["id"]?><?= $article["title"]?></h2></a>
				</div>
				<div class="panel-body">
					<p><?= extrait($article["content"],200);?></p>
				</div>
			</div>
		</div>

		<?php endforeach;?>

	</section>
    <button id="addArticle" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus">&nbsp;</span>d'articles</button>



<?php include "_footer.php"; ?>
