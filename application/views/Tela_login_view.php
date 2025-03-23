<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: url('https://www.portaldorh.ms.gov.br/wp-content/uploads/2024/02/papeis-de-negocios-de-natureza-morta-com-varias-pecas-de-mecanismo-scaled.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(25, 42, 86, 0.5);
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
        }

        .card {
            background: rgba(25, 42, 86, 0.85);
            backdrop-filter: blur(15px);
            border: none;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            color: #fff;
            padding: 12px;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0px 0px 8px #3498db;
            border-color: #3498db;
        }

        .btn-custom {
            background: linear-gradient(45deg, #2980b9, #1c5980);
            color: #fff;
            border-radius: 25px;
            padding: 12px;
            transition: 0.3s;
            width: 100%;
            font-weight: bold;
        }

        .btn-custom:hover {
            background: linear-gradient(45deg, #1c5980, #154360);
            transform: scale(1.05);
        }

        .floating-shapes div {
            position: absolute;
            background: rgba(52, 152, 219, 0.3);
            border-radius: 50%;
            animation: float 6s infinite ease-in-out alternate;
        }

        .floating-shapes .shape1 { width: 150px; height: 150px; top: 10%; left: 15%; }
        .floating-shapes .shape2 { width: 100px; height: 100px; bottom: 20%; right: 20%; }
        .floating-shapes .shape3 { width: 120px; height: 120px; top: 50%; left: 55%; }

        @keyframes float {
            from { transform: translateY(0); }
            to { transform: translateY(-20px); }
        }
    </style>
</head>

<body>
    <div class="floating-shapes">
        <div class="shape1"></div>
        <div class="shape2"></div>
        <div class="shape3"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-white">
                    <div class="login-logo">
                        <img src="https://cdn-icons-png.flaticon.com/128/6073/6073874.png" alt="Login Logo" class="img-fluid" style="width: 100px;">
                    </div>
                    <h3 class="mb-4">Login</h3>
                    <div class="error-message">
                        <?php if ($this->session->flashdata('fail')) {
                            echo $this->session->flashdata('fail');
                         } ?>
                    </div>
                    <form method="post" action="login" onsubmit="return validateLogin()">
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
                            <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y" onclick="toggleSenha()">
                                <i id="eyeIcon" class="fas fa-eye text-white"></i>
                            </button>
                        </div>
                        <button type="submit" class="btn btn-custom">Acessar</button>
                        <div class="mt-3">
                            <a href="/" class="text-white-50">Esqueci minha senha</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSenha() {
            var senhaInput = document.getElementById('senha');
            var eyeIcon = document.getElementById('eyeIcon');
            if (senhaInput.type === 'password') {
                senhaInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                senhaInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
