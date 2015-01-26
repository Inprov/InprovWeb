
			
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

			