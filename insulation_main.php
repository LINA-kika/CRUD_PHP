
<body>

        <?php
            require_once 'db.php';
            require_once 'base.php';
        ?>


    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid textclient">
                <span class="navbar-brand mb-0 h1">Утеплитель</span>
                <a href="insulation_create.php" class="btn btn-outline-secondary($color, .5)" tabindex="-1" role="button" style="margin-right:120px;">Добавить</a>
            </div>
        </nav>


        <?php
        $result = $db->query('SELECT * from insulation_material');
        ?>
        <div class="table">
            <table class="table table-border" style="vertical-align: middle;">
            <thead>
                <tr>
                <th>Идентификатор утеплителя</th>
                <th>Название</th>
                <th>Цена</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while( $row = $result->fetch_assoc()){
            ?>
            <tr>
            <td><?php echo $row['idinsulation_material'];?></th>
            <td><?php echo $row['insulation_material_name'];?></td>
            <td><?php echo $row['price'];?></td>
            <th><div class="d-grid gap-5 d-md-block">
            <a href="insulation_update.php?id=<?php echo $row['idinsulation_material'];?>" class="btn btn-outline-secondary($color, .5)" tabindex="-1" role="button">Редактировать</a>
            <a href="insulation_delete.php?id=<?php echo $row['idinsulation_material'];?>" class="btn btn-outline-secondary($color, .5)" tabindex="-1" role="button">Удалить</a>
            </div>
            </td>

            </tr>
            <?php
                }
            ?>
            </tbody>
            </table>
        </div>
    </div>

</body>
