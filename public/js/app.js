
(function(){
    var token="12345";
    var app = angular.module('tarefas',[]);
    app.controller('TarefasController', function($scope, $http){
		$scope.loadData = function () {
			$http.get('http://localhost:8000/api/tarefas?api_token='+token)
                .success(function(data)
                {
				    $scope.dadostarefas = data;
			    });
		}
		$scope.loadData();
        $scope.adicionarTarefa = function()
        {
            dadosPost={'texto':$scope.texto,'autor':$scope.autor,'status':$scope.status}
            var requisicao = $http({method:'post',url:"api/tarefas?api_token="+token,data:dadosPost})
                .success(function(data,status){
                    if(data&&status==201)
                    {
                        $scope.loadData(function()
                        {
                            $scope.texto='';$scope.autor;$scope.status='';
                        });
                    }
                    else
                    {
                        window.alert("Não foi possivel adinonar a tarefa.");
                    }
                });
        }
        $scope.mudarStatus = function(id,status)
        {
            dadosPost={'status':status}
            var requisicao = $http({method:'put',url:"api/tarefas/"+id+"?api_token="+token,data:dadosPost})
                .success(function(data,status){
                    if(data.id==id && status==201)
                    {
                        $scope.loadData()
                    }
                    else
                    {
                        window.alert("Não foi possivel alterar a tarefa.");
                    }
                });
        }
        $scope.excluirTarefa = function(id)
        {
            if(confirm("Confirma a exclusão da Tarefa?")){
                var requisicao = $http({method:'delete',url:"api/tarefas/"+id+"?api_token="+token})
                    .success(function(data,status){
                        if(data==1 && status==200)
                        {
                            $scope.loadData()
                        }
                        else
                        {
                            window.alert("Não foi possivel excluir.");
                        }
                    });
            }
        }

    });

})();

