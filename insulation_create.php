<?php
    require_once 'db.php';

if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    echo "INSERT INTO insulation_material VALUES( $id, '$name', $price)";
    $result = $db->query("INSERT INTO insulation_material VALUES( $id, '$price', '$name')");
    header("Location: insulation_main.php");
}

require_once 'base.php';
?>
       

<!-- create.page -->

<body>
    <div class="container">
        <div class="px-1 py-1 my-1 text-center">
        <h3 class="display-7 fw-bold">Добавить новый материал</h3>
        </div>
                <form action="insulation_create.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Идентификатор</label>
                        <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Идентификатор">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Название">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Цена</label>
                        <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Цена"> <br>
                    </div>
                    <input class="btn btn-outline-secondary" type="submit" value="Создать">
                </form>
    </div>       
    </container>
</body>
