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

        <!-- aqui vai ficar a barra de navegacao -->
        <!--tirar esse azul que que aparece no nome dos dois button, mas NAO tirar a tag <a>, por gentileza-->    
        <nav>
            <div>
                <img src="" alt="">
                <button><a href="<?= base_url('/perfil')?>">HOME</a></button>
            </div>
        
            <div>
                <img src="" alt="">
                <button type="button"> <a href="funcionarios">Funcionarios</a></button> 
            </div>
            
            <div>
                <img src="" alt="">
                <button type="button"><a href="<?= base_url('/sair')?>">Alertas</a></button>
            </div>
        
            <div>
                <img src="" alt="">
                <button type="button"><a href="<?= base_url('/sair')?>">Logout</a></button>
            </div>
        
        
        </nav>

        <main>
            <section><!--aqui vai ficar a foto dele com o nome e o tipo de conta, pode colocar uma fixa que esta no canva so para ilustrar -->
                <img src="" alt="img_user">
                <h2><?= $funcionario['nome']?></h2>
                <p><?= $funcionario['tipo']?></p>
            </section> 

            <section>
                <div>
                    <img src="" alt="paper_ico"><!--icone de papeizinhos na frente do titulo-->
                    <h2>Informacoes gerais</h2>                   
                </div>


                <table> <!--aqui vai ser a tabelinha de informacoes se quiser tirar a tag de tabela pode tirar-->
                    <tbody>
                        <tr>
                            <th>Nome Completo</th>
                            <td><?= $funcionario['nome']?></td>                            
                        </tr>

                        <tr>
                            <th>Cargo</th>
                            <td><?= $funcionario['cargo']?></td>
                        </tr>

                        <tr>
                            <th>Setor</th>
                            <td><?= $funcionario['setor']?></td>                                 
                        </tr>
                   
                        <tr>
                            <th>CPF</th>
                            <td><?= $funcionario['cpf']?></td>
                        </tr>
                        
                        <tr>
                            <th>Email</th>
                            <td><?= $funcionario['email']?></td>
                        </tr>
                        
                        <tr>
                            <th>Telefone</th>
                            <td><?= $funcionario['telefone']?></td>
                        </tr>
                    </tbody>
                </table>

            </section><!--aqui vai ser as informacoes gerais-->
        </main>



    

        

   

    
</body>
</html>