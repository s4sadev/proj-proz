<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <?php
        if($this->session->flashdata('sucesso')){
            echo $this->session->flashdata('sucesso');
        }
        elseif($this->session->flashdata('block')){
            echo $this->session->flashdata('block');
        }

    ?>

    <a href="funcionarios">Funcionarios</a>
    
</body>
</html>