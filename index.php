<!doctype html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>INPROV</title>
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="css/bootstrap.css">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/inputmask-plugin.js"></script>
      <link rel="stylesheet" href="css/index.css">
   </head>
   <body>
      <!--***********************************************************************************
         *																																*
         *                                             menu superior                                                          * 
         *																																*
         ************************************************************************************-->
      <nav class="navbar navbar-inverse .navbar-fixed-top navbar-cor">
         <div class="navbar-header">
            <a class="navbar-brand" href="index.php">INPROV</a>
            <button class="navbar-toggle" type="button"
               data-target=".navbar-collapse" data-toggle="collapse">
            <span class="glyphicon glyphicon-align-justify"></span></button>
         </div>
         <ul class="nav navbar-nav collapse navbar-collapse">
            <li><a href="#">Colabore <span class="glyphicon glyphicon-book"></span></a></li>
            <li><a href="#">Indique um amigo <span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="#">Perguntas frequentes <span class="glyphicon glyphicon-list-alt"></span></a></li>
            <li><a href="#">Sobre <span class="glyphicon glyphicon-bullhorn"></span></a></li>
            <li><a href="#">Entre em contato <span class="glyphicon glyphicon-envelope"></span></a></li>
         </ul>
      </nav>
      <div class="container">
         <!--***********************************************************************************
            *																																*
            *                          combo box como parametros de busca                                    * 
            *																																*
            ************************************************************************************-->
         <div class="row">
            <fieldset class="col-md-6">
               <label for="Curso">Curso:</label>
               <select name="bandeira-cartao" id="bandeira-cartao" class="form-control" width:50%>
                  <option value="master">Ciência da Computação</option>
                  <option value="visa">VISA</option>
                  <option value="amex">American Express</option>
               </select>
            </fieldset>
            <fieldset class="col-md-6">
               <label for="Curso">Disciplina:</label>
               <select name="bandeira-cartao" id="bandeira-cartao" class="form-control" width:50%>
                  <option value="master">Cálculo I</option>
                  <option value="visa">VISA</option>
                  <option value="amex">American Express</option>
               </select>
            </fieldset>
         </div>
         <!--***********************************************************************************
            *																																*
            *                                             tabela com todas as provas                                    * 
            *																																*
            ************************************************************************************-->
         <div class="bs-example tabela-provas" data-example-id="table-within-panel">
            <div class="panel panel-primary">
               <!-- Default panel contents -->
               <div class="panel-heading">Painel de provas</div>
               <!-- Table -->
               <table class="table table-responsive">
                  <thead>
                     <tr>
                        <th>Disciplina</th>
                        <th >Curso</th>
						<th>Visualizar</th>
						<th>Download</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Cálculo I</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					                      <tr>
                        <td>Cálculo II</td>
                        <td>Ciência da Computação</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </body>
</html>