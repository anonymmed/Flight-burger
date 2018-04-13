<?php
class ProviderController
{
    public function __construct()
    {

    }

    public function Index($page)
    {

            require_once('views/' . $page);
        }


    public function Error()
    {
        require_once('views/404.php');
    }
    public static function AddProvider($fname,$lname,$desc)
    {

            $db=Db::getInstance();
            $query=$db->prepare("insert into providers (fname,lname,descr) values (:fname,:lname,:desc)");
            $query->bindParam(":fname",$_POST[$fname]);
            $query->bindParam(":lname",$_POST[$lname]);
            $query->bindParam(":desc",$_POST[$desc]);
            $query->execute();
    }
    public static function TestSubmit($submit,$fname,$lname,$desc)
    {
        if (isset($_POST[$submit]))
        {
            self::AddProvider($fname,$lname,$desc);
        }
        else
        {

        }

    }
    public static function DeleteProvider($id)
    {
        $db=DB::getInstance();
        $query=$db->prepare("delete from providers where id = :pid");
        $query->bindParam("pid",$id);
        $query->execute();
    }
}
?>