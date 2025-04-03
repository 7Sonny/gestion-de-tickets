<?php
namespace Controllers;

use PDO;
use Models\ReportModel;

class ReportController extends Controller
{
    public function __construct(PDO $database)
    {
        parent::__construct($database);
    }

    public function create_report_when_to_assign($ticket_id){

        $ReportModel = new ReportModel($this->db);
        $result = $ReportModel->find_by_ticketid($ticket_id);
        if($result == false ){
            $ReportModel->create(["title","content","ticket_id"],'', '', $ticket_id);
        }
       
        header("Location: /litemvc/admin");

    }

    public function update_report(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!empty($_POST['ticket_id'])){
                $ticket_id = $_POST['ticket_id']?? '';
                $report_model = new ReportModel($this->db);
                $report = $report_model->find_by_ticketid($ticket_id);
                $data = [
                    'report'=>$report,
                    "mail" => $_SESSION["mail"],
                    "username" => $_SESSION["username"],
                    "role" => $_SESSION["role"],
                    "h1" => "Admin",
                ];
                $this->render("home.html.twig", $data);

            }
        }
}
}