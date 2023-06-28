<!DOCTYPE html>
<html ng-app="tarefas">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lista de Tarefas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="container" ng-controller="TarefasController as tarefas">
        <div class="page-header">
            <h2>Minha Lista de Tarefas</h2>
        </div>
        <!-- Formulario do Angular!-->
        <form ng-submit="adicionarTarefa()">
            <label for="texto">Tarefa</label>
            <input id="texto" type="text" ng-model="texto" required
            placeholder="Tarefa" class="form-control"/>
            <label for="autor">Autor</label>
            <input id="autor" type="text" ng-model="autor" required
            placeholder="Autor" class="form-control"/>
            <label for="status">Status</label>
            <select id="status" ng-model="status" required class="form-control">
                <option value="Concluído">Concluído</option>
                <option value="Pedente">Pedente</option>
            </select>
            <input type="submit" value="Cadastrar" class="btn btn-primary mt-3 mb-3"/>
        </form>
         <!-- Layout Mobile First!-->
         <h2 class="text-center">Layout Mobile First</h2>
        <style>
        .even{background-color: #EFEFEF;}
        .odd{background-color: #DDDDDD;}
        .header{text-align: center;}
        </style>
        <div class="containner">

        <div class="row">
            <div class="col-sm-1 font-weight-bold">X</div>
            <div class="col-sm-3 text-center font-weight-bold">Tarefa</div>
            <div class="col-sm-3 font-weight-bold ">Autor</div>
            <div class="col-sm-3 font-weight-bold">Status</div>
            <div class="col-sm-2 text-center font-weight-bold">Alterar</div>
        </div>
        <div class="row" ng-repeat="tarefa in dadostarefas" ng-class-odd="'odd'" ng-class-even="'even'">
            <div class="col-sm-1"><span ng-click="excluirTarefa(tarefa.id)" class="bi bi-x-lg" aria-hidden="true"></span></div>
            <div class="col-sm-3">{{tarefa.texto}}</div>
            <div class="col-sm-3">{{tarefa.autor}}</div>
            <div class="col-sm-3">{{tarefa.status}}</div>
            <div class="col-sm-2">
                <span ng-if="tarefa.status == 'Concluído'">
                <input type="button" value="Marcar como Pendente" class="btn btn-success" ng-click="mudarStatus(tarefa.id,'Pendente')" />
                </span>
                <span ng-if="tarefa.status != 'Concluído'">
                <input type="button" value="Marcar como Concluído" class="btn btn-warning" ng-click="mudarStatus(tarefa.id,'Concluído')" />
                </span>
            </div>
        </div>
        </div>
        <!-- Tabela das Tarefas usa Foreach do Angular!-->
        <h2 class="text-center mt-2">Tabela das Tarefas usa Foreach do Angular</h2>
        <table class="table table-striped">
            <thead><tr>
                <th>X</th>
                <th>Tarefa</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Alterar</th>
            </tr></thead>
            <tr ng-repeat="tarefa in dadostarefas">
                <td><span ng-click="excluirTarefa(tarefa.id)"
                class="bi bi-x-lg"></span></td>
                <td>{{tarefa.texto}}</td>
                <td>{{tarefa.autor}}</td>
                <td>{{tarefa.status}}</td>
                <td width='10%'>
                    <span ng-if="tarefa.status=='Concluído'">
                        <input type="button" value="Marcar como Pendente"
                        class="btn btn-success"
                        ng-click="mudarStatus(tarefa.id,'Pendente')"/>
                    </span>
                    <span ng-if="tarefa.status!='Concluído'">
                        <input type="button" value="Marcar como Concluído"
                        class="btn btn-warning"
                        ng-click="mudarStatus(tarefa.id,'Concluído')"/>
                    </span>
                </td>
            </tr>
        </table>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.js"></script>
        <!--

        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.js" integrity="sha512-klc+qN5PPscoGxSzFpetVsCr9sryi2e2vHwZKq43FdFyhSAa7vAqog/Ifl8tzg/8mBZiG2MAKhyjH5oPJp65EA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        !-->
        <script src="js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
