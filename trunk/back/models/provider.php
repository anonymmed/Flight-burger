<?php
class Provider {
    public $id;
    public $fname;
    public $lname;

    public function __construct($id, $fname, $lname) {
        $this->id      = $id;
        $this->fname  = $fname;
        $this->lname = $lname;
    }

    public static function viewall() {

        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM providers');

        // we create a list of Post objects from the database results
        foreach($req->fetchAll() as $provider) {
            $tab[] = new Provider ($provider['id'], $provider['fname'], $provider['lname']);
        }

        return $tab;
    }

    public static function findprovider($id) {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM providers WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $provider = $req->fetch();

        return new Provider($provider['id'], $provider['fname'], $provider['lname']);
    }
}
?>
