<?php
namespace Models;

use PDO;


class ReportModel extends Model
{
    public function __construct(PDO $db)
    {
        parent::__construct($db, 'reports');
    }

    public function find_by_ticketid(int $id, bool $fetchAsObject = true)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE ticket_id = :ticket_id");
        $stmt->execute([':ticket_id' => $id]);
        return $fetchAsObject ? $stmt->fetch(PDO::FETCH_OBJ) : $stmt->fetch(PDO::FETCH_ASSOC);
    }
}