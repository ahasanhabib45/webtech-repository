<?php 
    require 'Connect.php';

    function delete($id) {
        $ezl = connect();
        $sql = "DELETE FROM apartment WHERE ID=$id";
        $qry = $ezl->query($sql);

        header('location: ../View/Apartment.php');
    }



    function get($search) {
        $conn = connect(); 

        $sql = "SELECT * FROM apartment Where Price LIKE ?";
        $stmt = $conn->prepare($sql);
        $price = $search;
        $price = "%" . $price . "%";
        $stmt->bind_param("s", $price);

        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        $conn->close();

        return $result;
    }
?>