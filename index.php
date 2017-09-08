<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Aluno.php';
            require_once 'Visualizacao.php';
            
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            $v[0]->like();
            $v[0]->like();
            
            
            $g[0]= new Aluno("Jubileu", 22, "M","juba");  
            $g[1]= new Aluno("Creuza", 12, "F","creuzita"); 
            
            
            $vis[0] = new Visualizacao($g[0],$v[1]);
            $vis[1] = new Visualizacao($g[0],$v[2]);
            $vis[0]->avaliar();
            $vis[1]->avaliarPorcentagem(85);
            print_r($vis);
            
           
        ?>
        </pre>
    </body>
</html>
