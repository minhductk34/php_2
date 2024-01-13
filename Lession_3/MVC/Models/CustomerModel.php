<?php

class CustomerModel extends Environment
{
    private  $conn;
    private  $stmt;
    public function __construct()
    {
        $this->conn = $this->connectDB();
    }
    public function get_customer()
    {
        // echo"getcustomer";
        $query = "SELECT id, name, email, phone FROM user WHERE 1";
        // die($query);
        $data = $this->stmt = $this->dataProcess($query, true);
        return $data;
    }
    public function get_customer_id($id)
    {
        // echo"getcustomer";
        $query = "SELECT id, name, email, phone FROM user WHERE id=$id";
        // die($query);
        $data = $this->stmt = $this->dataProcess($query, true);
        return $data;
    }
    public function add_client($name, $email, $phone)
    {
        $query = "INSERT INTO `user`( `name`, `email`, `phone`) 
        VALUES ('$name', '$email', '$phone')";
        // die($query);
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
    public function edit_client($name, $email, $phone ,$id)
    {
        $query = "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id =$id";
        // die($query);
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
    public function delete_client($id)
    {
        $query = "DELETE FROM `user` WHERE `id`=$id";
        // die($query);
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}
// $customerModel = new CustomerModel();
