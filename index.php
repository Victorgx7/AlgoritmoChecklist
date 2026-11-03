<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-primary">CHECK-LIST RASTREABILIDADE PRODUÇÃO</h1>
        <form action="" method="post">
            <fieldset class="mb-3">
                <legend>IDENTIFICAÇÃO DO OPERADOR</legend>
                <div class="row">
                    <div class="col-md-6">
                        <label for="matricula" class="form-label">MATRICULA OPERADOR</label>
                        <input type="text" id="matricula" name="matricula_operador" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="registro" class="form-label">DATA</label>
                        <input type="date" id="registro" name="data_registro" class="form-control">
                    </div>
                </div>
            </fieldset>

            <fieldset class="mb-3">
                <legend>IDENTIFICAÇÃO DO EQUIPAMENTO</legend>
                <div class="row">
                    <div class="col-md-6">
                        <label for="categoria_equipamento" class="form-label">CATEGORIA DO EQUIPAMENTO</label>
                        <select name="categoria" id="categoria_equipamento" class="form-select">
                            <option value="" selected disabled>Selecione uma categoria</option>
                            <option value="1">Desmontadoras</option>
                            <option value="2">Balanceadoras</option>
                            <option value="3">Alinhadores</option>
                            <option value="4">Elevadores</option>
                            <option value="5">Rampas</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="modelo_equipamento" class="form-label">MODELO DO EQUIPAMENTO</label>
                        <select name="modelo" id="modelo_equipamento" class="form-select">
                            <option value="" selected disabled>Selecione o modelo</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend>IDENTIFICAÇÃO DO PRODUTO</legend>
                <div class="row">
                    <div class="col-md-6">
                        <label for="numero_serie" class="form-label">NÚMERO DE SÉRIE</label>
                        <input type="text" name="numero_serie" id="numero_serie" class="form-control">
                    </div>
                </div>
            </fieldset>
            <fieldset class="mb-3">
                <legend>REGISTROS FOTOGRÁFICOS</legend>
                <div class="row">
                    <div class="col-12">
                        <p>É permitido registrar até 12 fotografias do equipamento.</p>
                        <input type="file" name="registros_fotos" id="registros_fotos" multiple accept="image/*" class="form-control">
                    </div>
                </div>
            </fieldset>
            <button type="submit">ENVIAR CHECKLIST</button>
        </form>
    </div>
</body>

</html>