<?php

	require 'vendor/autoload.php'; //Carregamento de classes que serão usadas

	use Symfony\Component\Finder\Finder; //Inclusão do componente Finder

		if($_POST){
		
			$busca = $_POST['buscar']; //Recebimento do valor buscado

			if(isset($busca)){
			
				buscar($busca); //Caso exista algum valor buscado
			
			}
		
		}

	function buscar($busca){

		echo "Aqui estão os resultados da sua busca!";

		$finder = new Finder(); //Instância do Finder

		$files = $finder->files()->in('arquivos')->contains($busca); //Buscando as palavras enviadas pelo formulário nos arquivos do diretório a seguir!


		foreach($files as $file){ //Exibir os arquivos encontrados

			var_dump($file->getFileName()); //Recebe apenas o nome dos arquivos
		
		}

	}

?>