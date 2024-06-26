<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Adicionando Bootstrap (versão 5) para os ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #3498db, #ffffff);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
            max-width: 90%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 30px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 14px;
            text-align: left;
        }

        .input-group input {
            width: calc(100% - 40px); /* Ajustando a largura para dar espaço ao ícone */
            padding: 10px;
            padding-left: 40px; /* Espaço para o ícone */
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #444;
            font-size: 14px;
            transition: border-color 0.3s ease; /* Adicionando transição para suavizar a mudança de cor */
        }

        .input-group input:focus {
            outline: none;
            border-color: #3498db;
        }

        .input-group input:hover {
            border-color: #3498db; /* Mudando a cor da borda ao passar o mouse */
        }

        .input-group .input-icon {
            position: absolute;
            left: 10px;
            top: 65%;
            transform: translateY(-50%);
            color: #555;
            font-size: 18px;
            transition: transform 0.3s ease; /* Adicionando transição para a animação */
        }

        .input-group input:focus + .input-icon,
        .input-group input:hover + .input-icon {
            transform: translateY(-50%) scale(1.2); /* Aumentando a escala do ícone ao passar o mouse */
        }

        .error-message {
            color: red;
            font-size: 12px;
            text-align: left;
            margin-top: 5px;
        }

        .login-btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Adicionando transição para suavizar a mudança de cor */
        }

        .login-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.autenticar') }}" method="post">
        @csrf
        <div class="input-group">
            <span class="input-icon"><i class="bi bi-envelope-fill"></i></span>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Informe seu email" value="{{ old('email') }}">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="input-group">
            <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" placeholder="Informe sua senha">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="login-btn">Entrar</button>
    </form>

    </div>

</body>
</html>
