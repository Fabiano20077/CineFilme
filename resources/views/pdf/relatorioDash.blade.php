<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Gêneros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 30px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .info-box {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }

        .info {
            background-color: #f5f5f5;
            padding: 15px 25px;
            border-radius: 8px;
            text-align: center;
            width: 30%;
            box-shadow: 0 0 5px #ccc;
        }

        .info h2 {
            margin: 0;
            font-size: 18px;
            color: #555;
        }

        .info p {
            font-size: 24px;
            font-weight: bold;
            margin-top: 5px;
            color: #222;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #f0f0f0;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Relatório de Gêneros de Filmes</h1>

    <div class="info-box">
        <div class="info">
            <h2>Usuários</h2>
            <p>{{ $usuarios }}</p>
        </div>
        <div class="info">
            <h2>Filmes</h2>
            <p>{{ $filmes }}</p>
        </div>
        <div class="info">
            <h2>Ingressos</h2>
            <p>{{ $ingressos }}</p>
        </div>
    </div>

    <h2 style="text-align:center;">Ingressos Vendidos por Gênero</h2>
    <table>
        <thead>
            <tr>
                <th>Gênero</th>
                <th>Total de Ingressos</th>
            </tr>
        </thead>
        <tbody>
            @foreach($generosProcurados as $genero)
                <tr>
                    <td>{{ $genero->genero }}</td>
                    <td>{{ $genero->totalIngressos }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Relatório gerado em {{ now()->format('d/m/Y H:i') }}
    </div>
</body>
</html>
