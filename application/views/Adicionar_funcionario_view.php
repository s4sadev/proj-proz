<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionários</title>
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
            max-width: 700px;
            background: rgba(255, 255, 255, 0.98);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
            margin-top: 30px;
            width: 100%;
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 16px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
            display: block;
        }
        input, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #2c3e50;
            border-radius: 15px;
            font-size: 16px;
            background-color: #f0f4f7;
            transition: border-color 0.3s ease;
        }
        input:focus, select:focus {
            border-color: #27ae60;
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .add-button, .cancel-button {
            padding: 12px 20px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            color: white;
            text-decoration: none;
            transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
        }
        .add-button {
            background: #27ae60;
        }
        .add-button:hover {
            background: #219150;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .cancel-button {
            background: #e74c3c;
        }
        .cancel-button:hover {
            background: #c0392b;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .footer {
            margin-top: 30px;
            padding: 15px;
            background: #2c3e50;
            color: white;
            text-align: center;
            font-size: 14px;
            border-radius: 20px;
            width: 100%;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Funcionários</h1>
        <form action="<?= base_url('salva/funcionario')?>" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome Completo" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" placeholder="Cargo" required>
            </div>
            <div class="form-group">
                <label for="setor">Setor</label>
                <input type="text" id="setor" name="setor" placeholder="Setor" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="exemplo@dominio.com" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(99) 99999-9999" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" required name="senha" id="senha">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="comum">Comum</option>
                    <option value="gestor">Gestor</option>
                </select>
            </div>
            <div class="button-container">
                <button type="submit" class="add-button">Adicionar</button>
                <a href="<?= base_url('funcionarios') ?>" class="cancel-button">Cancelar</a>
            </div>
        </form>
    </div>
    <div class="footer">
        &copy; 2025 O.M Gestão | Endereço: Rua Carandirú, 123, Montes Claros - Minas Gerais | Email: omgestao@gmail.com
    </div>
</body>
</html>
