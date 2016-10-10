<?php
//$promotii_query = tep_db_query("select * from promotii");
class Promo{
    private $query;
    private $slides;
    private $static;
    function __construct()
    {
        $this->query = tep_db_query("select * from promotii");
        while($data = tep_db_fetch_array($this->query)){
            if(is_numeric($data['produs']) && $data['produs'] != '0'){
                $product_info_query = tep_db_query("select products_name from " . TABLE_PRODUCTS_DESCRIPTION . " where products_id = '" . (int)$data['produs'] . "'");
                $product_info = tep_db_fetch_array($product_info_query);
                $data['descriere'] = $product_info['products_name'];
            } else{
                //TODO: descriere pentru non-produse
            }

            if ($data['rotativ']){
                $this->slides[] = $data;
            }else{
                $this->static[] = $data;
            }
        }
    }


    public function printDynamic(){
        $out = "<div id=\"main-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">";
        $i = 0;
        foreach($this->slides as $slide){
            $active = ($i == 0)?" active":"";
            $out .="<li data-target=\"#main-carousel\" data-slide-to=\"$i\" class=\"$active\"></li>";
            $i++;
        }
        $out .= "</ol><div class=\"carousel-inner\" role=\"listbox\">";
        $i = 0;
        foreach($this->slides as $slide) {
            $active = ($i == 0)?"active":"";
            $i++;
            $out .= "<div class=\"item $active\">
                <div class=\"bigBanner\"><a href=\"";
            $out .= ($slide['keywords']) ? "http://www.toolszone.ro/advanced_search_result.php?keywords=".$slide['keywords'] : tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $slide['produs']);
            $out .= "\"><img src=\"";
            $out .= "images/banners/perm/".$slide['img'].'" title="'.$slide['descriere'].'" alt="'.$slide['descriere'].'"></a></div></div>';
        }
        $out .="</div>";
        $out .= "<a class=\"left carousel-control\" href=\"#main-carousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Inapoi</span>
    </a>
    <a class=\"right carousel-control\" href=\"#main-carousel\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Urmatorul</span>
    </a>
</div>";
        return $out;
    }

    public function printStatic(){
        $out ='';
        foreach($this->static as $static) {

            $out .= "<div class=\"smallBanner\"><a href=\"";
            $out .= ($static['keywords']) ? "http://www.toolszone.ro/advanced_search_result.php?keywords=".$static['keywords'] : tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $static['produs']);
            $out .= "\"><img src=\"";
            $out .= "images/banners/perm/".$static['img'].'" title="'.$static['descriere'].'" alt="'.$static['descriere'].'"></a></div>';
        }
        return $out;

    }


}
$promotii = new Promo();
echo $promotii->printDynamic();

echo $promotii->printStatic();

?>
