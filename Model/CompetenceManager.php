<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/Model/Competence.php';

class CompetenceManager extends DBConnection
{

    /**
     * Retourne toutes les Competences dans un tableau de Competence
     *
     * @return $lesCompetences
     */
    public  function getAllCompetence()
    {
       
        
        $lesCompetences = array();
        $query = $this->db->prepare("SELECT * FROM competence");
       
        $query->execute();
        
        $datas =  $query->fetchAll();

        foreach ($datas as $data) {
            $uneCompetence = new Competence($data["idCompetence"], $data["libelle"]);
            array_push($lesCompetences, $uneCompetence);
        }
         
        return $lesCompetences;
    }

    /**
     * Retourne une Competence en fonction de son id 
     *
     * @param [integer] $idCompetence
     * @return $uneCompetence
     */
    public function getUneCompetence($idCompetence)
    {
        $query = $this->db->prepare("SELECT * FROM Competence WHERE idCompetence =':idCompetence'");
        $query->bindValue(":idCompetence",$idCompetence);
        $query->execute();
        $data = $query->fetch();
        $uneCompetence = new Competence($data["idCompetence"], $data["libelle"]);
        return $uneCompetence;
    }

    /**
   * Ajoute une Competence avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
    public function insertUneCompetence($libelle)
    {
        $query = $this->db->prepare("INSERT INTO Competence set `libelle` = '$libelle'");
       
        $query->execute();
    }




    /**
   * Ajoute une Competence avec les informations donnés en paramètres
   *
   * @param [String] $libelle
   * @return void
   */
    public function updateUneCompetence($libelle,$id)
    {
        $query = $this->db->prepare("UPDATE competence set `libelle` = '$libelle' WHERE `idCompetence` = '$id'");      
        $query->execute();
    }
    
    
      public function deleteCompetence($id){
        $query = $this->db->prepare("DELETE FROM competence WHERE idCompetence = ".$id);
        $query->execute();      
    }
}
