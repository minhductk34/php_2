<?php

namespace App\Models;
use App\Configs\DatabaseConnection;
class BaseModel extends DatabaseConnection{
    protected $pdo;

 
        public function __construct()
        {
            // Sử dụng kết nối từ file kết nối cơ sở dữ liệu
            $this->pdo = DatabaseConnection::getConnection();
        }

    // Thực hiện truy vấn SELECT và trả về kết quả
    public function select($table, $columns = ['*'], $where = null)
    {
        $sql = "SELECT " . implode(', ', $columns) . " FROM $table";
        if ($where) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Thực hiện truy vấn INSERT và trả về ID của bản ghi mới
    public function insert($table, $data)
    {
        $columns = implode(', ', array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->pdo->exec($sql);

        return $this->pdo->lastInsertId();
    }

    // Thực hiện truy vấn UPDATE và trả về số bản ghi đã cập nhật
    public function update($table, $data, $where)
    {
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "$key = '$value'";
        }

        $sql = "UPDATE $table SET " . implode(', ', $set) . " WHERE $where";
        return $this->pdo->exec($sql);
    }

    // Thực hiện truy vấn DELETE và trả về số bản ghi đã xoá
    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        return $this->pdo->exec($sql);
    }
}
