<!doctype html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>INPROV</title>
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="css/bootstrap-cosmo.css">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/inputmask-plugin.js"></script>
      <!-- APENAS PARA EXIBIÇÃO DE IMAGEM -->
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
                     
			
            <?php
            $nome_do_banco = "Algoritmos 2 - Cinthia Cristina 09-07-2010";
            $diretorio = "img/" . $nome_do_banco."/";
            $ponteiro = opendir($diretorio);
            // monta os vetores com os itens encontrados na pasta
            while ($nome_itens = readdir($ponteiro)) {
                $itens[] = $nome_itens;
            }

            // ordena o vetor de itens
            sort($itens);
            // percorre o vetor para fazer a separacao entre arquivos e pastas 
            foreach ($itens as $listar) {
                // retira "./" e "../" para que retorne apenas pastas e arquivos
                if ($listar != "." && $listar != "..") {

                    // checa se o tipo de arquivo encontrado é uma pasta
                    if (!is_dir($listar)) {
                        // caso FALSO adiciona o item à variável de arquivos
                        $arquivos[] = $listar;
                    }
                }
            }

            // lista os arquivos se houverem
            if ($arquivos != "") {
                foreach ($arquivos as $listar) {
                    $links .= <<<html
                    <a href='$diretorio$listar' style="display:none;">
                        <span class="glyphicon glyphicon-eye-open">
                        <img src="$diretorio$listar" alt="Apple">
                    </a><br>
html;
                }
            }
            if ($arquivos != "") {
                $qtd = count($arquivos);
                for ($i = 0; $i < $qtd-1; $i++) {
                    $listar = $arquivos[$i];
                    $links2 .= <<<html
                    <a href='$diretorio$listar' data-gallery='$nome_do_banco'>
                        <span class="glyphicon glyphicon-eye-open">
                    </a><br>
html;
                }
            }
            echo $links2;
            ?>

			

			<!-- lista com provas -->
					<?php
						$conexao = mysqli_connect("127.0.0.1", "root", "", "inprovweb");
						$dados = mysqli_query($conexao, "SELECT C.NOME CURSO, DC.NOME DISCIPLINA, PF.NOME PROFESSOR, CASE WHEN PV.DATA_APLICADA IS NULL THEN 'NÃO INFORMADO' ELSE PV.DATA_APLICADA END AS DATAAPLICADA 
																								FROM PROVA PV, PROFESSOR PF, DISCIPLINA_HAS_PROFESSOR DP, DISCIPLINA DC, CURSO_HAS_DISCIPLINA CD, CURSO C, FACULDADE_HAS_CURSO FC, FACULDADE F WHERE
																									PV.PROFESSOR_IDPROFESSOR = PF.IDPROFESSOR AND
																									PF.IDPROFESSOR = DP.PROFESSOR_IDPROFESSOR AND
																									DP.DISCIPLINA_IDDISCIPLINA = DC.IDDISCIPLINA AND
																									CD.DISCIPLINA_IDDISCIPLINA = DC.IDDISCIPLINA AND
																									CD.CURSO_IDCURSO = C.IDCURSO AND
																									FC.CURSO_IDCURSO = C.IDCURSO AND
																									FC.CURSO_IDCURSO = C.IDCURSO AND
																									F.IDFACULDADE = FC.FACULDADE_IDFACULDADE;");
						while ($prova = mysqli_fetch_array($dados)):
							?>
							<tr>
								<td><?=$prova[CURSO]?></td>
								<td><?=$prova[DISCIPLINA]?></td>
								<td><?=$prova[PROFESSOR]?></td>
								<td><?=$prova[DATAAPLICADA]?></td>
								<td><a href="img/Algebra - Elvira Padua 05-05-2010/Algebra - Elvira Padua 05-05-2010 parte1.jpg" title="prova 1" data-gallery = "teste"><span class="glyphicon glyphicon-eye-open"></span></a></td>
								<td><span class="glyphicon glyphicon-download"></span></td>
                     </tr>
				<?php endwhile; ?>
					 <tr>
                  </tbody>
               </table>
            </div>
         </div>
         <!-- Galeria de imagem -->
         <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;">
            <!-- slides -->
            <div class="slides"></div>
            <!-- controle para passar imagem lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- visualizar imagem em form lightbox -->
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

		 <a href="img/Algebra - Elvira Padua 05-05-2010/Algebra - Elvira Padua 05-05-2010 parte2.jpg" title="prova 1" data-gallery = "teste"></a>
		 <a href="img/Algebra Linear - Maria Alice - 28-02-2011/Algebra Linear - Maria Alice - 28-02-2011 parte1.jpg" title="prova 1" data-gallery = "teste2"><span class="glyphicon glyphicon-eye-open"></span></a>
		 
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
   </body>
</html>