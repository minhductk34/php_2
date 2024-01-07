<?php
require_once ".\Models\CustomerModel.php";
class CustomerController extends CustomerModel
{
    public function listCustomer()
    {
        // echo "Customer";
        $data = $this->get_customer();
        include_once ".\Views\Customer\listCustomer.php";
        //    print_r($data);
    }
    public function addCustomer()
    {
        // echo "Customer";
        if (isset($_POST['btn_submit'])) {
            $this->add_client($_POST['name'], $_POST['email'], $_POST['sdt']);
            header("Location:index.php?url=/");
        }
        include_once ".\Views\Customer\createCustomer.php";
        //    print_r($data);
    }
    public function editCustomer()
    {
        $id = $_GET['id'];
       
        $data = $this->get_customer_id($id);

        if (isset($_POST['update_']) && $_GET['id']) {
            echo "1";
            $this->edit_client($_POST['name'], $_POST['email'], $_POST['sdt'], $_GET['id']);
            header("Location:index.php?url=/");
        }

        include_once ".\Views\Customer\updateCustomer.php";
        // header("Location:index.php?url=update");

    }

    public function deleteCustomer()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->delete_client($id);
        }
        header("Location:index.php?url=/");
    }
}
$customerController = new CustomerController();
