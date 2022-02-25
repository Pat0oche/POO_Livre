<?php
class Auteur {
    private string $_prenom;
    private string $_nom;
    private array $_livres;
    

    public function __construct($prenom, $nom){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_livres = [];
        
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }

    /**
     * Get the value of _livres
     */ 
    public function get_livres()
    {
        return $this->_livres;
    }

    public function ajouterLivre(Livre $livre){
        $this->_livres[] = $livre;
        // array_push($this->_livres, $livre);
    }

    public function afficherBibliographie() {
        echo "<h2>Livres de ".$this."</h2><br>";
        foreach ($this->_livres as $livre) {
            echo $livre."<br>";
        }

    }
}