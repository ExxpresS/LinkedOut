<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/Model/DBConnection.php';
    include $_SERVER['DOCUMENT_ROOT'].'/Model/Personne.php';

class PersonneManager extends DBConnection
{

    /**
     * Retourne toutes les personnes dans un tableau de Personne
     *
     * @return void
     */
    public function getAllPersonne()
    {
        
        $lesPersonnes = array();
        $query = $this->db->prepare("SELECT * FROM personne");
        $query->execute();
        $datas =  $query->fetchAll();
       
        
        foreach ($datas as $data) {
            $unePersonne = new Personne($data["idPersonne"], $data["nom"], $data["prenom"], $data["description"], $data["telephone"], $data["mail"], $data["mdp"]);
            array_push($lesPersonnes, $unePersonne);
        }
        return $lesPersonnes;
    }

    /**
     * Retourne une Personne en fonction de son id 
     *
     * @param [integer] $idPersonne
     * @return void
     */
    public function getUnePersonne($idPersonne)
    {
        $query = $db->prepare("SELECT * FROM personne WHERE idPersonne =':idPersonne'");
        $query->execute(array("idPersonne"=>$idPersonne));
        $data = $query->fetch();
        $unePersonne = new Personne($data["idPersonne"], $data["nom"], $data["prenom"], $data["description"], $data["telephone"], $data["mail"], $data["mdp"]);
        return $unePersonne;
    }
    
    public function getPersonneByMail($mail)
    {
        $requete = "SELECT * FROM personne WHERE mail ='$mail'";
        $query = $db->prepare($requete);
        $query->execute();
        $data = $query->fetchAll();
        //$unePersonne = new Personne($data["idPersonne"], $data["nom"], $data["prenom"], $data["description"], $data["telephone"], $data["mail"], $data["mdp"]);
        return $data;
    }

    /**
   * Ajoute une Personne avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUnePersonne($nom, $prenom, $description, $telephone, $mail, $mdp)
    {
        $description = ($description == NULL)?"NULL" : $description;
        $requete = "INSERT INTO personne set `nom` = '".$nom."' ,`prenom` = '".$prenom."',`description` = '".$description."',`telephone` = '".$telephone."',`mail` = '".$mail."',`mdp` = '".$mdp."'";
        $query = $this->db->prepare($requete);
        $query->execute();
    }


    /**
   * Ajoute une Personne avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function updateUnePersonne($idPersonne, $nom, $prenom, $telephone, $mail, $mdp)
    {
        $requete = "UPDATE `personne` SET `nom` = '". $nom ."', `prenom` = '".$prenom."', `telephone` = '".$telephone."', `mail` = '".$mail."', `mdp` = '".$mdp."' WHERE `personne`.`idPersonne` = ".$idPersonne ;
        $query = $this->db->prepare($requete);
        $query->execute();
    }
    

    public function getLastid(){
        $query = $this->db->prepare("SELECT MAX(idPersonne) as lastId FROM personne");
        $query->execute();
        $data =  $query->fetch();
        return $data["lastId"];
    }
    
    public function deleteUser($id){
        $query = $this->db->prepare("DELETE FROM personne WHERE idPersonne =".$id);
        $query->execute();
        header("Refresh: 5; url=$page");
    }
    
    
     /**
   * Ajoute une Personne avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function verifMail($mail)
    {
        $query = $this->db->prepare("SELECT * from personne WHERE mail = :mail");
        $query->execute(array("mail" => $mail));
        $data =  $query->fetch();
        return empty($data);
    }
    
    public function isRecruteur($id){
        $requete = "INSERT INTO `recruteur` (`idRecruteur`, `idPersonne`) VALUES ('', '".$id."')";
        $query = $this->db->prepare($requete);
        $query->execute();
    }
    
    public function isDemandeur($id){
        $requete = "INSERT INTO `etudiant` (`idEtudiant`, `idPersonne`, `lienCV`, `linkedIn`, `twitter`) VALUES (NULL, '".$id."', '', '', '')";
        $query = $this->db->prepare($requete);
        $query->execute();
    }
    
}
