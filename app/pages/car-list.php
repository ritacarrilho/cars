<h1>Nos voitures</h1>

<?php if(count($arr_cars) <= 0) :?>
    <div>Aucune voitures en ce moment</div>
<?php else: ?>
    <ul>
        <?php foreach( $arr_cars as $car ): ?>
            <li>
                <a href="/voiture?=$car['id']">Detail</a>
                <h2><?php echo $car['title'] ?></h2>
                <p><?php echo $car['brand-name']?></p>
                <p>
                    <strong>Prix:</strong> <?php echo $car['price'] ?>€
                </p>
                <?php if( strlen($car['description']) > 0 ): ?>
                    <p><?php echo $car['description']?></p>
                <?php endif ?>
            </li>

        <?php endforeach ?>
    </ul>
<?php endif ?>