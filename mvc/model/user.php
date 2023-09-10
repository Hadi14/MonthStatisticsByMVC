<? class UserModel
{
    static function getFirst($u, $p)
    {
        $db = Db::getInstance();
        $sql = "select * from users where user='$u' and password='$p'";
        $records = $db->first($sql);
        return $records;
    }
}
