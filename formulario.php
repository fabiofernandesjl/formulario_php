<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        div.form-group {
            margin-top: 15px;
        }
    </style>

    <script src="./formulario.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <form action="./processa_cliente.php" name="form_clientes" method="POST" onsubmit="return validarFormulario(this);">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1>Cadastro de clientes</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nome_cliente">Nome</label>
                                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" min="3" placeholder="Nome Completo" />
                            </div>
                            <div class="form-group">
                                <label for="cpf_cliente">CPF</label>
                                <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente" placeholder="123.456.789-00" title="Digite apenas números" />
                            </div>
                            <div class="form-group">
                                <label for="email_cliente">Email</label>
                                <input type="text" class="form-control" id="email_cliente" name="email_cliente" placeholder="dominio@gmail.com" />
                            </div>
                            <div class="form-group">
                                <label for="data_nascimento_cliente">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento_cliente" name="data_nascimento_cliente" />
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
</body>

</html>