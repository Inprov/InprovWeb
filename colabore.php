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
            <li><a href="colabore.php">Colabore <span class="glyphicon glyphicon-book"></span></a></li>
            <li><a href="#">Indique um amigo <span class="glyphicon glyphicon-user"></span></a></li>
            <li><a href="#">Perguntas frequentes <span class="glyphicon glyphicon-list-alt"></span></a></li>
            <li><a href="#">Sobre <span class="glyphicon glyphicon-bullhorn"></span></a></li>
            <li><a href="#">Entre em contato <span class="glyphicon glyphicon-envelope"></span></a></li>
         </ul>
      </nav>
	  
	  
	  
	  
      <div class="container">
		
		
	 <div class="alert alert-success">
  
				
			<h4>Indique para um amigo.</h4>
			<h4>Enviando dúvidas, sugestões ou críticas.</h4>
			<h4>Participe enviando arquivos que você tenha e que possam ser usados em nosso site.</h4>
         
  
</div>
	 	
		
		<form class="form-horizontal">
  <fieldset>
    <legend>Envie sua prova</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Faculdade</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Faculdade">
      </div>
	  </div>
	  <div class="form-group">
	  <label for="inputEmail" class="col-lg-2 control-label">Curso</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Curso">
      </div>
	  </div>
	  <div class="form-group">
	  <label for="inputEmail" class="col-lg-2 control-label">Disciplina</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Disciplina">
      </div>
	  </div>
	  <div class="form-group">
	<label for="inputEmail" class="col-lg-2 control-label">Professor</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Professor">
      </div>	  
	  </div>
    </div>
    
    
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Escolher arquivo</button>
      </div>
    </div>
  </fieldset>
</form>



		
      </div>
    </body>
</html>