<?php
    include $_SERVER['DOCUMENT_ROOT'].'/Model/RechercheManager.php';
    
    
function GetRecherchesInfos()
{
    $rechercheManager = new RechercheManager();
    
    $infosRecherchesDb = $rechercheManager->getAllRecherche();
    $offre = "";
   
    foreach ($infosRecherchesDb as $value) {
        
    $rechercheInfo = ' <div class="card gedf-card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h5 m-0">' . $value->getDomaine() . '</div>
                        <div class="h7 text-muted">Recherche d\'emploi</div>
                    </div>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                            <div class="h6 dropdown-header">Configuration</div>
                            <a class="dropdown-item" href="#">Save</a>
                            <a class="dropdown-item" href="#">Hide</a>
                            <a class="dropdown-item" href="#">Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>' . $value->getDate() . '</div>
            <a class="card-link" href="#">
                <h5 class="card-title">' . $value->getDescription() . '</h5>
            </a>
            <p class="card-text">
                ' . $value->getDescription() . '
            </p>
            <div>
                <span class="badge badge-primary">JavaScript</span>
                <span class="badge badge-primary">Android</span>
                <span class="badge badge-primary">PHP</span>
                <span class="badge badge-primary">Node.js</span>
                <span class="badge badge-primary">Ruby</span>
                <span class="badge badge-primary">Python</span>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="card-link"><i class="fa fa-comment"></i> Contacter</a>
            <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Partager</a>
        </div>
    </div>';
    $offre .= $rechercheInfo;
    }
    
   
return $offre;
} 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */