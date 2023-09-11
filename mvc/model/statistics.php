<? class StatisticsModle
{
    /*********************************************************************/
    public static  function insert($id, $title, $text, $time)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $db->insert("insert into hemayat (Hmy_CityFamily,Hmy_RuralFamily,Hmy_MenFamily,Hmy_WomenFamily,Year,Month,user) values  ('$id','$title','$text','$time','$un')");
        header("Location: " . getBaseUrl() . "page/home");
    }
    /*********************************************************************/
}
