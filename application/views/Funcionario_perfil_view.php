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
            echo '<div>';
            echo $this->session->flashdata('sucesso');
            echo '</div>';
        }
        elseif($this->session->flashdata('block')){
            echo '<div>';
            echo $this->session->flashdata('block');
            echo '</div>';
            
        }

    ?>

    <a href="funcionarios">Funcionarios</a>
    <a href="<?= base_url('/sair')?>">Logout</a>
    
</body>
</html>