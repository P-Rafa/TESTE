<?php 




                                                //foreach


    $user_names=['Pedro', 'Erick', 'Jhonatham', 'Hugo'];

    foreach($user_names as $name){ 

        echo "<div class'names'>{$name}</div>";  

    } 



    
    


                                                //classes e funcoes




     

     class Produto{

        public $modelo;
        public $preco;
        public $precoformatado;
        

       

        public function getDetalhes(){

            $this->precoformatado=number_format($this->preco, 2 , ',', '.');

            return "<div class'produtos'>O {$this->modelo} tem o valor de {$this->precoformatado}</div>";

        }

     }
    

     $p1 = new Produto;
     $p1->modelo ='Peugeot';
     $p1->preco = 50000;


     $p2 = new Produto;
     $p2->modelo ='Gol';
     $p2->preco = 38000;

     $p3 = new Produto;
     $p3->modelo ='hb20';
     $p3->preco ='52000';

     //var_dump($p1);
     
     
     echo $p1->getDetalhes();
     echo $p2->getDetalhes();
     echo $p3->getDetalhes();




                                                //operacoes logicas



     echo 2 + 2 * 5 / 5 * 55 - 468 + 512, '<br>';











     class Computador {


        public $processador;
        public $ram;
        public $placadevideo;


        public function especificacoes(){

            return "<div class'computadores'>Este computador tem o processador {$this->processador}, a memoria RAM instalada corresponde à {$this->ram} e sua placa de video é a {$this->placadevideo}.</div>";

        }


     }


     $comp1 = new Computador;
     $comp1->processador="Intel Core I5 3470";
     $comp1->ram="16gb";
     $comp1->placadevideo="RTX2080";


     $comp2 = new Computador;
     $comp2->processador="AMD Ryzen 7400";
     $comp2->ram="8gb";
     $comp2->placadevideo="Geforce 2080TI";

     $comp3 = new Computador;
     $comp3->processador="Intel Core I7 9700k";
     $comp3->ram="8gb";
     $comp3->placadevideo="Geforce 980TI";

     $comp4 = new Computador;
     $comp4->processador="AMD Ryzen 3200";
     $comp4->ram="16gb";
     $comp4->placadevideo="RTX2070";





     echo $comp1->especificacoes();
     echo $comp2->especificacoes();
     echo $comp3->especificacoes();
     echo $comp4->especificacoes();











     class cachorro{


        public $nomeDoCachorro;
        public $tamanho;
        public $forte;
        public $fofo;
        

        public function caracteristicas(){


            return "<div class'cachorros'>{$this->nomeDoCachorro} Hmmmm, esse dog aqui é bem {$this->tamanho}, um pouco {$this->forte} e EXTREMAMENTE {$this->fofo}! </div>";


        }



     }





     $dog1 = new cachorro;
     $dog1->nomeDoCachorro="Hotwailer";
     $dog1->tamanho="grande";
     $dog1->forte="MUITOFORTI";
     $dog1->fofo="arrombado";

     $dog2 = new cachorro;
     $dog2->nomeDoCachorro="Puddle";
     $dog2->tamanho="pequeno";
     $dog2->forte="fraquíssimo";
     $dog2->fofo="fresco";

     $dog3 = new cachorro;
     $dog3->nomeDoCachorro="Husky";
     $dog3->tamanho="mlk neutro";
     $dog3->forte="fortinho";
     $dog3->fofo="MUITO FOFO";


     echo $dog1->caracteristicas();
     echo $dog2->caracteristicas();
     echo $dog3->caracteristicas();
     














     

?>
