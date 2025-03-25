<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            max-width: 900px;
            background: rgba(255, 255, 255, 0.98);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
            margin-top: 30px;
            overflow-x: auto;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
            text-transform: uppercase;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 15px;
            overflow: hidden;
            border: 3px solid #2c3e50;
            table-layout: fixed;
        }
        th, td {
            padding: 14px;
            text-align: left;
            font-size: 16px;
            word-wrap: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        th {
            background: #2c3e50;
            color: white;
            text-transform: uppercase;
            border-bottom: px solid #154360;
        }
        tr:nth-child(even) {
            background: #d6eaf8;
        }
        tr:nth-child(odd) {
            background: #a9cce3;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }
        .action-buttons a {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 12px 18px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease-in-out, transform 0.2s;
            white-space: nowrap;
        }
        .edit-button {
            background: #3498db;
            color: white;
        }
        .edit-button:hover {
            background: #2980b9;
        }
        .delete-button {
            background: #e74c3c;
            color: white;
        }
        .delete-button:hover {
            background: #c0392b;
        }
        .footer {
            margin-top: 30px;
            padding: 15px;
            background: #2c3e50;
            color: white;
            text-align: center;
            border-radius: 15px;
            width: 100%;
            position: relative;
        }
        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .btn {
            border-radius: 30px !important;
            padding: 14px 22px;
            transition: transform 0.2s;
        }
        .btn:hover {
            transform: scale(1.1);
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            th, td {
                padding: 10px;
                white-space: normal;
            }
            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }
            .buttons-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listagem de Funcionários</h1>
        <table>
            <thead>
                <tr>
                    <th style="width: 25%">Nome</th>
                    <th style="width: 25%">Email</th>
                    <th style="width: 20%">Cargo</th>
                    <th style="width: 20%">Setor</th>
                    <th style="width: 14%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($funcionarios as $funcionario) { ?>
                    <tr>
                        <td><?= $funcionario['nome'] ?></td>
                        <td><?= $funcionario['email'] ?></td>
                        <td><?= $funcionario['cargo'] ?></td>
                        <td><?= $funcionario['setor'] ?></td>
                        <td class="action-buttons">
                            <a href="<?= base_url('editar/funcionario?id='. $funcionario['id']) ?>" class="edit-button"><i class="fas fa-edit"></i> Editar</a>
                            <a href="<?php if($userId === $funcionario['id']){echo base_url('/funcionarios');}else{echo base_url('/remove/funcionario?id=' . $funcionario['id']);}?>" class="delete-button"><i class="fas fa-trash-alt"></i> Apagar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="buttons-container">
            <a href="<?= base_url('/perfil') ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Voltar</a>
            <a href="<?= base_url('formulario/funcionario') ?>" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar</a>
        </div>
    </div>
    <div class="footer">
        &copy; 2025 O.M Gestão | Endereço: Rua Carandirú, 123, Montes Claros - Minas Gerais | Email: omgestao@gmail.com
    </div>
</body>
</html>
