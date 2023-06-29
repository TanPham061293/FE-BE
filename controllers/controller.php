<?php
class Controller{
    
    public function display(){
        require_once 'models/controller_model.php';
        $model    = new Controller_Model();
        $position = isset($_GET['id']) ? ($_GET['id'] - 1) : 0;
        $count    = 1;
        $flag     = true;
        
        if (isset($_GET['like'])){
            $id = $position; 
            if ($_GET['id'] == 1){
                $id = 4;
            }
           
                $like  = $_GET['like'];
                $data  = "`_like` ='" . $_GET['like']."'";
                $where = "`id` ='" . $id ."'";
                $model->updateDatabase($data, $where);
                
             setcookie($id,$like);
           
            if (array_key_exists($_GET['id'], $_COOKIE)){
                    $flag = false;
                }        
        } else{
            setcookie('1');
            setcookie('2');
            setcookie('3');
            setcookie('4');
        }      
         
        if($flag == true){
            $result     = $model->resultQuery($position ,$count);
            $this->post = $result[0]; 
        }else{
            $this->notice ="<span>That's all the jokes for today! Come back another day!</span>";
        }
        require_once 'view/html.php';
    } 
}