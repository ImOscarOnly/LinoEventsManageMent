<?php 
    class DBCRUDAPI{
        
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='linop_db';

        // private $servername='sql213.epizy.com';
        // private $username='epiz_33756544';
        // private $password='BossKevz202510';
        // private $dbname='epiz_33756544_neust_papaya_edts';

        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }
        
        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $result = $this->mysqli->query($sql);
        }

        public function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id";

            $result = $this->mysqli->query($sql);
        }

        public function delete($table,$id){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $id ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

        public $sql;

        public function select($table,$rows="*",$where = null){
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }

            $this->sql = $result = $this->mysqli->query($sql);
        }
        
        // public function selectleftjoin($table,$table1,$attributename1,$attributename,$attributes,$where = null){
        //     $attributess = implode(',', $attributes);
        //     if ($where != null) {
        //         $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename $where";
        //     }else{
        //         $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename";
        //     }
        //     $this->sql = $result = $this->mysqli->query($sql);
        // }

        public function selectleftjoin($table,$table1,$attributename1,$attributename,$attributes,$where = null){
            $attributess = implode(',', $attributes);
            if ($where != null) {
                $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename WHERE $where";
            } else { 
                $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename";
            }
            $this->sql = $result = $this->mysqli->query($sql);
        }
        public function selectleftjoin3($table,$table1,$table2,$table3,$attributename1,$attributename2,$attributename3,$attribute1,$attribute2,$attribute3,$attributes,$where = null){
            $attributess = implode(',', $attributes);
            if ($where != null) {
                $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attribute1 LEFT JOIN $table2 ON $table2.$attributename2=$table.$attribute2 LEFT JOIN $table3 ON $table3.$attributename3=$table.$attribute3 WHERE $where";
            } else {
                $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attribute1 LEFT JOIN $table2 ON $table2.$attributename2=$table.$attribute2 LEFT JOIN $table3 ON $table3.$attributename3=$table.$attribute3";
            }
            $this->sql = $result = $this->mysqli->query($sql);
        }
        public function selectleftjoin6special($table,$table1,$table2,$table3,$table4,$table5,$table6,$attributename1,$attributename2,$attributename3,$attributename4,$attributename5,$attributename6,$attribute1,$attribute2,$attribute3,$attribute4,$attribute5,$attribute6,$attributes,$where = null){
            $attributess = implode(',', $attributes);
            if ($where != null) {
                $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attribute1 LEFT JOIN $table2 ON $table2.$attributename2=$table.$attribute2 LEFT JOIN $table3 ON $table3.$attributename3=$table.$attribute3 LEFT JOIN $table4 ON $table4.$attributename4=$table3.$attribute4 LEFT JOIN $table5 ON $table5.$attributename5=$table3.$attribute5 LEFT JOIN $table6 ON $table6.$attributename6=$table3.$attribute6 WHERE $where";
            } else {
                $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attribute1 LEFT JOIN $table2 ON $table2.$attributename2=$table.$attribute2 LEFT JOIN $table3 ON $table3.$attributename3=$table.$attribute3 LEFT JOIN $table4 ON $table4.$attributename4=$table3.$attribute4 LEFT JOIN $table5 ON $table5.$attributename5=$table3.$attribute5 LEFT JOIN $table6 ON $table6.$attributename6=$table3.$attribute6";
            }
            $this->sql = $result = $this->mysqli->query($sql);
        }
        // public function selectleftjoin4($table, $table1, $table2, $table3, $table4, $attributename1, $attributename2, $attributename3, $attributename4, $attribute1, $attribute2, $attribute3, $attribute4, $attributes, $where = null) {
        //     $attributess = implode(',', $attributes);
        //     if ($where != null) {
        //         $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attribute1 LEFT JOIN $table2 ON $table2.$attributename2=$table.$attribute2 LEFT JOIN $table3 ON $table3.$attributename3=$table.$attribute3 LEFT JOIN $table4 ON $table4.$attributename4=$table.$attribute4 WHERE $where";
        //     } else {
        //         $sql = "SELECT $attributess FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attribute1 LEFT JOIN $table2 ON $table2.$attributename2=$table.$attribute2 LEFT JOIN $table3 ON $table3.$attributename3=$table.$attribute3 LEFT JOIN $table4 ON $table4.$attributename4=$table.$attribute4";
        //     }
        //     $this->sql = $result = $this->mysqli->query($sql);
        // }
        
        

        public function selectleftjoinauth($where,$attributes){
            $attributess = implode(',', $attributes);
            $sql = "SELECT $attributess FROM users LEFT JOIN roles ON roles.id = users.user_role_id WHERE $where";
            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectDocuments($attributes,$where = null){
            $attributess = implode(',', $attributes);
            if ($where != null) {
                $sql = "SELECT $attributess FROM documents LEFT JOIN categories ON documents.category_id = categories.id left JOIN users ON documents.user_id=users.id WHERE $where";
            }else{
                $sql = "SELECT $attributess FROM documents LEFT JOIN categories ON documents.category_id = categories.id left JOIN users ON documents.user_id=users.id";
            }
            $this->sql = $result = $this->mysqli->query($sql);
        }
        

        public function selectleftjoin100($table,$table1,$attributename1,$attributename,$attributesName,$where = null){
            $attributes = implode(',', $attributesName);
            if ($where != null) {
                $sql = "SELECT $attributes FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename $where";
            }else{
                $sql = "SELECT $attributes FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename";
            }
            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function selectleftjoin1($table,$table1,$attributename1,$attributename,$att,$whereClause){
            $atts = implode(',', $att);
            $sql = "SELECT $atts FROM $table LEFT JOIN $table1 ON $table1.$attributename1=$table.$attributename where $whereClause";

            $this->sql = $result = $this->mysqli->query($sql);
        }

        // public function selectleftjoin3($table,$table1,$attributename1,$table2,$attributename3,$attributesName=array()){
        //     $attributes = implode(',', $attributesName);
        //     $sql = "SELECT $attributes FROM $table LEFT JOIN $table1 ON $table1.id = $table.$attributename1 LEFT JOIN $table2 ON $table2.id=$attributename3";

        //     $this->sql = $result = $this->mysqli->query($sql);
        // }

    }
?>