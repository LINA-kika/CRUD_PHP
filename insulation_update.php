<?php
    require_once 'db.php';

if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    print_r("UPDATE insulation_material SET insulation_material_name = '$name', price = '$price' where idinsulation_material = '$id'");
    $result = $db->query("UPDATE insulation_material SET insulation_material_name = '$name', price = '$price' where idinsulation_material = '$id'");
    header("Location: insulation_main.php");
}


require_once 'base.php';
    $id =  $_GET['id'];
    $insulation = $db->query("SELECT * from insulation_material where idinsulation_material = '$id'");
?>
<!-- create.page -->
<body>
    <div class="container">
    <div class="px-1 py-1 my-1 text-center">
        <h3 class="display-7 fw-bold change_client"
        style="margin-top: 30px"
        >Изменить данные об утеплителе</h3>
        </div>
                <form action="insulation_update.php" method="POST">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Идентификатор материала</label>
                    <?php while ($row = $insulation->fetch_assoc())
                        {
                    ?>
                    <input type="text" value="<?php  echo $row['idinsulation_material']?>" name="id" class="form-control" id="exampleFormControlInput1" placeholder="ID" readonly>
                    </div>

                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Название</label>
                    <input type="text" value="<?php  echo $row['insulation_material_name']?>" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Название">
                    </div>
    
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Цена</label>
                    <input type="text" value="<?php  echo $row['price']?>" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Цена"> <br>
                    <?php
                        }
                        ?>
                    </div>
                    <input class="btn btn-outline-secondary" type="submit" value="Обновить">
    
                </form>
        </div>
    </div>       
    </container>
</body>


