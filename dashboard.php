<!-- para voces entenderem o meu sistema de assinaturas é onde a pessoa pode criar uma assinatura, por exemplo a minha ideia surgiu
do meu futebol de toda quarta feira, onde todos pagamos mensalidade para uma unica pessoa a ideia do sistema é uma pessoa poder cadastrar um tipo de assinatura
e poder incluir as pessoas q tem que pagar essa mensalidade para ela, então nessa tela principal apos o login que é o dashboard eu quero 
que apareçam em box um do lado do outro as assinaturas criadas pela pessoa e nesse box vai ta o nome das pessoas que estão dentro dessa assinatura, ai clicando nesse 
box a pessoa vai pra tela da assinatura onde aparece as pessoas que estão nela em lista, e o status do pagamento do mês se foi pago e a data de vencimento do proximo mês 
agora vamos começar com essa página, seguiremos a mesma linha utilizando bootstrap para estilizar a pagina-->
<!-- vamos fazer tudo com eu disse acima, mas utilizando table para exibir as assinaturas dentro do box, aparecendo o nome da pessoa e uma bolinha verde de pago ou verde de não pago -->
<!-- vamos começar com o html -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: 50px;">
                    <h4>Dashboard</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    Assinatura 1
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>João</td>
                                                <td><span class="badge badge-success">Pago</span></td>
                                            </tr>
                                            <tr>
                                                <td>Maria</td>
                                                <td><span class="badge badge-danger">Não Pago</span></td>
                                            </tr>
                                            <tr>
                                                <td>Carlos</td>
                                                <td><span class="badge badge-success">Pago</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    Assinatura 2
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>João</td>
                                                <td><span class="badge badge-success">Pago</span></td>
                                            </tr>
                                            <tr>
                                                <td>Maria</td>
                                                <td><span class="badge badge-danger">Não Pago</span></td>
                                            </tr>
                                            <tr>
                                                <td>Carlos</td>
                                                <td><span class="badge badge-success">Pago</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    Assinatura 3
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>João</td>
                                                <td><span class="badge badge-success">Pago</span></td>
                                            </tr>
                                            <tr>
                                                <td>Maria</td>
                                                <td><span class="badge badge-danger">Não Pago</span></td>
                                            </tr>
                                            <tr>
                                                <td>Carlos</td>
                                                <td><span class="badge badge-success">Pago</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
