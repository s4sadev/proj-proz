<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: #2c3e50;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: top 0.3s;
        }
        nav a {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            padding: 10px;
            transition: background 0.3s;
        }
        nav a:hover {
            background: #34495e;
            border-radius: 5px;
        }
        nav img {
            width: 20px;
            height: 20px;
        }
        .content {
            padding-top: 100px;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.98);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .user-box {
            background: #b2bec3;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
        }
        .user-box img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .user-box h2 {
            color: #2c3e50;
        }
        .info-container {
            background: #b2bec3;
            padding: 15px;
            border-radius: 10px;
        }
        .info-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }
        .info-header h2 {
            color: #2c3e50;
        }
        .info-header img {
            width: 24px;
            height: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            border: 2px solid #7f8c8d;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #7f8c8d;
            text-align: left;
        }
        th {
            background: #2c3e50;
            color: white;
        }
        tr:nth-child(even) {
            background: #f8f9fa;
        }
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            width: 100%;
            position: relative;
            bottom: 0;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <a href="<?= base_url('/perfil')?>"><img src="https://cdn-icons-png.flaticon.com/128/5974/5974636.png" alt="home"> Home</a>
        <a href="funcionarios"><img src="https://cdn-icons-png.flaticon.com/128/3280/3280979.png" alt="funcionarios"> Funcionários</a>
        <a href="<?= base_url('/sair')?>"><img src="https://cdn-icons-png.flaticon.com/128/5807/5807433.png" alt="alertas"> Alertas</a>
        <a href="<?= base_url('/sair')?>"><img src="https://cdn-icons-png.flaticon.com/128/16470/16470584.png" alt="logout"> Logout</a>
    </nav>
    
    <div class="content">
        <div class="container">
            <div class="user-box">
                <img src="https://cdn-icons-png.flaticon.com/128/3237/3237472.png" alt="img_user">
                <h2><?= $funcionario['nome']?></h2>
                <p><?= $funcionario['tipo']?></p>
            </div>
            
            <div class="info-container">
                <div class="info-header">
                    <h2>Informações Gerais</h2>
                </div>
                <table>
                    <tbody>
                        <tr><th>Nome Completo</th><td><?= $funcionario['nome']?></td></tr>
                        <tr><th>Cargo</th><td><?= $funcionario['cargo']?></td></tr>
                        <tr><th>Setor</th><td><?= $funcionario['setor']?></td></tr>
                        <tr><th>CPF</th><td><?= $funcionario['cpf']?></td></tr>
                        <tr><th>Email</th><td><?= $funcionario['email']?></td></tr>
                        <tr><th>Telefone</th><td><?= $funcionario['telefone']?></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2025 O.M Gestão | Endereço: Rua Carandirú, 123, Montes Claros - Minas Gerais</p>
        <p>Email: omgestao@gmail.com</p>
    </footer>

    <script>
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-60px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>
</html>
