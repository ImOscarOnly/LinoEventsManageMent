<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("organizations","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $organization_name = $_POST["organization_name"];
            $organization_type = $_POST["organization_type"];
            $organization_leader = $_POST["organization_leader"];

            $DBCRUDAPI->insert('organizations',['organization_name'=>$organization_name, 'organization_type'=>$organization_type, 'organization_leader'=>$organization_leader]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){
            
            $id = $_POST["id"];
            $organization_name = $_POST["organization_name"];
            $organization_type = $_POST["organization_type"];
            $organization_leader = $_POST["organization_leader"];

            $DBCRUDAPI->update('organizations',['organization_name'=>$organization_name, 'organization_type'=>$organization_type, 'organization_leader'=>$organization_leader],"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('organizations',"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>