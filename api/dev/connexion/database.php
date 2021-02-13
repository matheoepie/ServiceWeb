<?php

class database extends PDO{
    private $PARAM_hote='localhost'; // BDD locale
    private $PARAM_utilisateur='root';
    private $PARAM_mot_passe='';
    private $PARAM_nom_bd='projetphpb3';
    private $connexion;
    public function __construct() {
        try {

            $this->connexion = new PDO('mysql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (PDOException $e)
        {
            echo 'hote: '.$this->PARAM_hote.' '.$_SERVER['DOCUMENT_ROOT'].'<br />';
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
            $this->connexion=false;
            //echo '<script>alert ("pbs acces bdd");</script>)';
        }
    }
}


?>