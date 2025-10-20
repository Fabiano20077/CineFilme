<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Relatório de Filmes e Ingressos Vendidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #333;
            font-size: 14px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .total {
            font-weight: bold;
            color: #2c3e50;
            text-align: right;
            margin-top: 30px;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Relatório de Filmes e Ingressos Vendidos</h1>

    <table>
        <thead>
            <tr>
                <th>Filme</th>
                <th>Quantidade de Ingressos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($filmeProcurados as $filme)
                <tr>
                    <td>{{ $filme->titulo }}</td>
                    <td>{{ $filme->totalFilmes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Relatório gerado em {{ now()->format('d/m/Y H:i') }}
    </div>

</body>
</html>
