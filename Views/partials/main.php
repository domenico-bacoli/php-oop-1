<main>
    <div class="container">
        <h1 class="text-center my-4">FILM</h1>
        
        <?php foreach($movies as $movie) { ?>
            <ul>
                <li><strong>TITLE: </strong> <?php echo $movie->title?></li>
                <li><strong>DIRECTOR: </strong><?php echo $movie->director?></li>
                <li><strong>RELEASE DATE: </strong><?php echo $movie->releaseYear?></li>
                <li><strong>CAST: </strong><?php echo $movie->getActors($movie->actors)?></li>
                <li><strong>TYPE: </strong><?php echo $movie->getActors($movie->genres)?></li>
                <li><strong>OVERVIEW: </strong><?php echo $movie->overview?></li>
            </ul>
        <?php 
        }
        ?>
    </div>
</main>
