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
	  <!-- APENAS PARA EXIBIÇÃO DE IMAGEM -->
 	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
	  <!-- FIM DOS LINK PAR AXIBICAO DE IMAGEM -->
      <link rel="stylesheet" href="css/index.css">
   </head>
   <body>
      <!--***********************************************************************************
         *																																*
         *                                             menu superior                                                          * 
         *																																*
         ************************************************************************************-->
      <nav class="navbar navbar-inverse">
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

						 <th >Curso</th>
                        <th>Disciplina</th>
						  <th>Professor</th>
						<th>Aplicada em</th>
						<th>Visualizar</th>
						<th>Download</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					 <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
                     <tr>
						<td>NOME DO CURSO</td>
                        <td>NOME DA DISCIPLINA</td>
                        <td>NOME DO PROFESSOR</td>
						<td>DATA DE APLICAÇÃO</td>
						<td><span class="glyphicon glyphicon-eye-open"></span></td>
						<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
					 

                  </tbody>
               </table>
            </div>
         </div>
		 
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="links">
    <a href="img/1.jpg" title="prova 1" data-gallery>
        <img src="img/1.jpg" alt="1">
    </a>
    <a href="img/2.png" title="prova 2" data-gallery>
         <img src="img/2.png" alt="2">
    </a>
    <a href="img/3.png" title="prova 3" data-gallery>
         <img src="img/3.png" alt="3">
    </a>
</div>
		 
      </div>
	  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

   </body>
</html>