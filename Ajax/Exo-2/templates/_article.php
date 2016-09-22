
<?php include "_header.php"; ?>



    <section id="actus" class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title"><?= $article["title"]?></h1></a>
                        <time><?= "Cré le :".$article["created_at"]?></time>
                    </div>
                    <div clas="panel-body">
                        <p><?= $article["content"];?></p>
                    </div>
                </div>
            </div>


    </section>

<?php include "_footer.php"; ?>