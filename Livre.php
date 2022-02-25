<?php

class Livre {
    private string $_titre;
    private int $_pages;
    private int $_annee;
    private int $_prix;
    private Auteur $_auteur;

    public function __construct($titre, $pages, $annee, $prix, $auteur){
        $this->_titre = $titre;
        $this->_pages = $pages;
        $this->_annee = $annee;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->ajouterLivre($this);
    }

        /**
     * Get the value of _titre
     */ 
    public function get_titre()
    {
        return $this->_titre;
    }

    /**
     * Set the value of _titre
     *
     * @return  self
     */ 
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    /**
     * Get the value of _pages
     */ 
    public function get_pages()
    {
        return $this->_pages;
    }

    /**
     * Set the value of _pages
     *
     * @return  self
     */ 
    public function set_pages($_pages)
    {
        $this->_pages = $_pages;

        return $this;
    }

    /**
     * Get the value of _annee
     */ 
    public function get_annee()
    {
        return $this->_annee;
    }

    /**
     * Set the value of _annee
     *
     * @return  self
     */ 
    public function set_annee($_annee)
    {
        $this->_annee = $_annee;

        return $this;
    }

    /**
     * Get the value of _prix
     */ 
    public function get_prix()
    {
        return $this->_prix;
    }

    /**
     * Set the value of _prix
     *
     * @return  self
     */ 
    public function set_prix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
    }

    /**
     * Get the value of _auteur
     */ 
    public function get_auteur()
    {
        return $this->_auteur;
    }

    /**
     * Set the value of _auteur
     *
     * @return  self
     */ 
    public function set_auteur($_auteur)
    {
        $this->_auteur = $_auteur;

        return $this;
    }

    public function __toString()
    {
        return $this->_titre." (".$this->_annee.") : ".$this->_pages." pages / ".$this->_prix." €";
    }
}
