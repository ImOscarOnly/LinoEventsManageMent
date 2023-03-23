<?php

    include_once('../../API/DBCRUDAPI.php');
    $DBCRUDAPI = new DBCRUDAPI();

    if(isset($_GET['getData'])){
        $DBCRUDAPI->select("events1","*");
        $data = $DBCRUDAPI->sql;
        $res = array();
        while($datass = mysqli_fetch_assoc($data)){
            $res[] = $datass;
        }
        echo json_encode($res);
    }
    else{
        if(isset($_POST['addNew'])){
            $events1_name = $_POST["event_name"];
            $events1_name = $_POST["exp_participants"];
            $events1_name = $_POST["event_sched"];
            $events1_name = $_POST["event_venue"];
            $events1_name = $_POST["num_participants"];
            $events1_name = $_POST["act_participants"];
            $events1_name = $_POST["event_type"];
            $events1_name = $_POST["event_obj"];
            $events1_name = $_POST["exe_summary"];
            $events1_name = $_POST["documentation"];
            $events1_name = $_POST["prob_encounter"];
            $events1_name = $_POST["recommendation"];

            $DBCRUDAPI->insert('events1',['event_name'=>$event_name, 'exp_participants'=>$exp_participants, 'event_sched'=>$event_sched, 'event_venue'=>$event_venue, 'num_participants'=>$num_participants, 'act_participants'=>$act_participants, 'event_type'=>$event_type, 'event_obj'=>$event_obj, 'exe_summary'=>$exe_summary, 'documentation'=>$documentation, 'prob_encounter'=>$prob_encounter, 'recommendation'=>$recommendation, 'event_name'=>$event_name,]);

             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
            
        }else if(isset($_POST['update'])){
            
            $id = $_POST["id"];
            $$events1_name = $_POST["event_name"];
            $events1_name = $_POST["exp_participants"];
            $events1_name = $_POST["event_sched"];
            $events1_name = $_POST["event_venue"];
            $events1_name = $_POST["num_participants"];
            $events1_name = $_POST["act_participants"];
            $events1_name = $_POST["event_type"];
            $events1_name = $_POST["event_obj"];
            $events1_name = $_POST["exe_summary"];
            $events1_name = $_POST["documentation"];
            $events1_name = $_POST["prob_encounter"];
            $events1_name = $_POST["recommendation"];

            $DBCRUDAPI->update('events1',['event_name'=>$event_name, 'exp_participants'=>$exp_participants, 'event_sched'=>$event_sched, 'event_venue'=>$event_venue, 'num_participants'=>$num_participants, 'act_participants'=>$act_participants, 'event_type'=>$event_type, 'event_obj'=>$event_obj, 'exe_summary'=>$exe_summary, 'documentation'=>$documentation, 'prob_encounter'=>$prob_encounter, 'recommendation'=>$recommendation, 'event_name'=>$event_name,],"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }
        }else if(isset($_POST['delete'])){
            
            $id = $_POST["id"];

            $DBCRUDAPI->delete('events1',"id='$id'");
             if($DBCRUDAPI){
                echo json_encode(array("success"=>true));
            }else{
                echo json_encode(array("success"=>false));
            }

        }
    }


?>