<?php

class CreateQCM extends Controller
{
    function index()
    {
        $data['page_title'] = "Créer QCM";
        $this->view("createqcm", $data);


        if( isset($_POST['cour'])&& isset($_POST['question'])&& isset($_POST['reponse']) && isset( $_POST['proposition1'])&& isset($_POST['proposition2'])&&isset($_POST['proposition3']))
        {
            $Model_QCM =  $this->loadModel("modelQCM")   ;  
            
            $Model_QCM->AjouterQCM($_POST, "/var/www/html/WorkEdu_Web_project/app/models/xml");  //A CHANGER SI CA MARCHE PAS
        }


    }
}