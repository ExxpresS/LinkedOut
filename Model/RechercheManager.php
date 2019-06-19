<?php 
include $_SERVER['DOCUMENT_ROOT'].'/Model/DBConnection.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/Model/Recherche.php';
//class RechercheManager extends DBConnection
//{
    /**
     * Retourne toutes les Annonces dans un tableau de Annonce
     *
     * @return void
     */
//    public  function getAllRecherche()
//    {
//        $lesRecherches = array();
//        $query = $this->db->prepare("SELECT * FROM recherche");
//        $query->execute();
//        $datas =  $query->fetchAll();
//        foreach ($datas as $data) {
//            $uneRecherche = new Recherche($data["idRecherche"], $data["domaine"],  $data["poste"], $data["description"], $data["date"], $data["typeEmploi"],  $data['idEtudiant']);
//            array_push($lesRecherches, $uneRecherche);
//        }
//        return $lesRecherches;
//    } 
    /**
     * Retourne une Annonce en fonction de son id 
     *
     * @param [integer] $idAnnonce
     * @return void
     */
//    public function getUneRecherche($idRecherche)
//    {
//        $query = $this->db->prepare("SELECT * FROM Recherche WHERE idRecherche =':idRecherche'");
//        $query->bindValue(":idRecherche", $idRecherche);
//        $query->execute();
//        $data =  $query->fetch();
//        $uneRecherche = new Recherche($data["idRecherche"], $data["domaine"],  $data["poste"], $data["description"], $data["date"], $data["typeEmploi"],  $data['idEtudiant']);
//        return $uneRecherche;
//    } 
    /**
   * Ajoute une Annonce avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
//    public function insertUneRecherche($domaine, $poste, $description, $date, $typeEmploi, $idEtudiant)
//    {
//        $query = $this->db->prepare("INSERT INTO Recherche set `domaine` = :domaine ,`poste` = :poste,`description` = :description,`date` = :date, `typeEmploi` = :typeEmploi, `idEtudiant` = :idEtudiant");
//        $query->bindValue(":idRecherche", $domaine);
//        $query->bindValue(":idRecherche", $poste);
//        $query->bindValue(":idRecherche", $description);
//        $query->bindValue(":idRecherche", $date);
//        $query->bindValue(":idRecherche", $typeEmploi);
//        $query->bindValue(":idRecherche", $idEtudiant);
//        $query->execute();
//    } 
    /**
   * Ajoute une Annonce avec les informations donnés en paramètres
   *
   * @param [String] $nom
   * @param [String] $prenom
   * @param [String] $description
   * @param [String] $telephone
   * @param [String] $mail
   * @param [String] $mdp
   * @return void
   */
//    public function updateUneRecherche($domaine, $poste, $description, $date, $typeEmploi, $idEtudiant)
//    {
//        $query = $this->db->prepare("UPDATE Recherche set `domaine` = :domaine ,`poste` = :poste,`description` = :description,`date` = :date, `typeEmploi` = :typeEmploi, `idEtudiant` = :idEtudiant");
//        $query->bindValue(":idRecherche", $domaine);
//        $query->bindValue(":idRecherche", $poste);
//        $query->bindValue(":idRecherche", $description);
//        $query->bindValue(":idRecherche", $date);
//        $query->bindValue(":idRecherche", $typeEmploi);
//        $query->bindValue(":idRecherche", $idEtudiant);
//        $query->execute();
//    }  
//}