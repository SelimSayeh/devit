<?php


class panier
{

    private $code_panier;
    private $nbr_produits;
    private $total;
   
    


   
    public function __construct($code_panier, $nbr_produits$, $total)
    {
        $this->code_panier = $code_panier;
        $this->nbr_produits = $nbr_produits;
        $this->total = $total;
        
        

    }

    /**
     * @return mixed
     */
    public function getcode()
    {
        return $this->code_panier;
    }

    /**
     * @param mixed $id
     */
    public function setcode($code_panier)
    {
        $this->code_panier = $code_panier;
    }

    /**
     * @return mixed
     */
    public function getnbr()
    {
        return $this->nbr_produits;
    }

    /**
     * @param mixed $mail
     */
    public function setnbr($nbr_produits)
    {
        $this->nbr_produits = $nbr_produits;
    }

    /**
     * @return mixed
     */
    public function gettotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $password
     */
    public function settotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
   


}

?>