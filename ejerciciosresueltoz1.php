<div class="container">
    <h1>Frutas</h1>
    <ul class="list-group">
        <?php 
     
        $frutas = ["Manzana", "Banana", "Cereza", "Durazno"];
        
        foreach ($frutas as $fruta): ?>
            <li class="list-group-item"><?php echo $fruta; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
