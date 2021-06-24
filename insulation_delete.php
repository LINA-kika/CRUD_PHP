<body>
        <?php
            require_once 'db.php';

            $id =  $_GET['id'];

            $result = $db->query("DELETE FROM insulation_material WHERE idinsulation_material = '$id'");

            require_once 'base.php';
        ?>

        <div class="container">   
        <div class="text" style="display: flex; margin-top:15px;">
            <h5 style="margin-right:15px;"><?php echo($id) ?></h5>
            <h3>Успешно удален</h3>
        </div>
        <div class="button" style="display:flex; justify-content:center; margin-top:15px;">
        <a href="insulation_main.php" class="btn btn-outline-secondary" tabindex="-1" role="button">Вернуться на главную</a>
        </div>
        </div>
</body>