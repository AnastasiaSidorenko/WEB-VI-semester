<?php

include $_SERVER['DOCUMENT_ROOT']."/app/core/Model.php";

abstract class BaseActiveRecord extends Model
{
    public static $pdo;

    public function save()
    {
        $query = 'SHOW COLUMNS FROM ' . static::$table;
        $s = self::$pdo->prepare($query);
        $s->execute();
        while ($i = $s->fetch(PDO::FETCH_ASSOC)) {
            if ($i["Field"] == "id") continue;
            $fields[] = $i["Field"];
        }
       // var_dump($fields);

        $array_vars = get_object_vars($this);

        foreach ($fields as $value) {
            if ($value == 'id') continue;
            $values[] = "'$array_vars[$value]'";
            $fields_columns[] = "`$value`";
            if($array_vars[$value]) {
                $update_array[] = "`$value`='$array_vars[$value]'"; //for update
            }
        }

        if ($array_vars['id'] == NULL) {
            $create_query = 'INSERT INTO `' . static::$table . '`(' . implode(",", $fields_columns) . ') VALUES(' . implode(",", $values) . ')';
            $stmt = self::$pdo->prepare($create_query);
           //var_dump($stmt);
            try {
                $stmt->execute();
               // $stmt->debugDumpParams();
            } catch (PDOException $exc) {
                echo $exc->getMessage();
            }
        }
        else{
            $query_update = 'UPDATE '. static::$table.' SET '.join(', ',$update_array).' WHERE id=:id';
            $s = self::$pdo->prepare($query_update);
            $s->bindParam(':id',$array_vars['id']);
            try {
                $s->execute();
                $s->debugDumpParams();
            }
            catch(PDOException $exc){
                echo $exc->getMessage();
            }
        }
        return $this;
    }

    public function update($id){
        /*$query = 'SHOW COLUMNS FROM ' . static::$table;
        $s = self::$pdo->prepare($query);
        $s->execute();

        $array_vars = get_object_vars($this);
        $i=0;
        foreach ($this as $value) {
            if($) {
                if ($array_vars[$i] == 'id') continue;
                $update_array[] = "'array_obj[$array_vars[$i]']=`$value`"; //for update
                $i++;
            }
        }


        $query_update = 'UPDATE '. static::$table.' SET '.join(', ',$update_array).'WHERE id=:id';
        $s = self::$pdo->prepare($query_update);
        $s->bindParam(':id',$this->id);
        $s->execute();
        return $this;
        */
    }

    public function delete()
    {
        $query = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $s = self::$pdo->prepare($query);
        $s->bindParam(':id', $this->id);
        $s->execute();
        return true;
    }
    public static function find($id){
        $query='SELECT * FROM '.static::$table.'WHERE id=:id';
        $s=self::$pdo->prepare($query);

        $s->bindParam(':id',$id);

        try{
            $s->execute();
            $s->debugDumpParams();
        }
        catch(PDOException $exc){
            echo $exc->getMessage();
        }
        $row=$s->fetch(PDO::FETCH_ASSOC);

        if(!$row){
            return null;
        }
        return $row;
    }
    public static function findAll(){
        $query='SELECT * FROM '.static::$table;
        $s=self::$pdo->prepare($query);
        try{
            $s->execute();
           // $s->debugDumpParams();
        }
        catch(PDOException $exc){
            echo $exc->getMessage();
        }
        $res=$s->fetchAll(PDO::FETCH_CLASS);

        if(!$res){
            return null;
        }
        return $res;
    }
    public static function countRecords(){
        $query = 'SELECT count(*) FROM '.static::$table;
        $s = self::$pdo->query($query)->fetchColumn();
        return $s;
    }
    public static function getRecords($start,$per_page){
        $query = "SELECT * FROM ".static::$table." ORDER BY id DESC LIMIT $start,$per_page";
        $s = self::$pdo->prepare($query);
        try{
            $s->execute();
        }
        catch(PDOException $exc){
            echo $exc->getMessage();
        }
        $array=$s->fetchAll(PDO::FETCH_CLASS);
        if(!$array){
            return null;
        }
        return $array;
    }
    public function findLogin($login){
        $query = "SELECT COUNT(*) FROM ".static::$table." WHERE login = '$login'";
        $s = self::$pdo->query($query)->fetchColumn();
        if($s){
            return -1;
        }
        else{
            return 0;
        }
    }
    public function LogIn($login,$password){
        $query = "SELECT * FROM ".static::$table." WHERE login=:login";
        $s = self::$pdo->prepare($query);
        $s->bindParam(':login',$login);
        $s->execute();

        $row=$s->fetch(PDO::FETCH_ASSOC);
        if($row){
            if(password_verify($password,$row['password'])){
                session_start();
                //echo "session started";
                $_SESSION["FIO"]=$row['fio'];
                return 1;
            }
        }
        else{
            return -1;
        }
        return 0;
    }
}