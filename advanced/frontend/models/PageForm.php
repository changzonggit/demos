<?php
namespace frontend\models;

use yii;
use yii\base\Model;

class PageForm extends Model
{

   public function showPage($page,$totalPage,$sep=""){  
        $url = $_SERVER ['PHP_SELF'];//获取当前路径  

        $index = ($page == 1) ? "首页" : "<a href='{$url}?r=go/list?page=1'>首页</a>"."<br>";

        $last = ($page == $totalPage) ? "尾页" : "<a href='?r=go/list?page={$totalPage}'>尾页</a>"."<br>";

        $prevPage=($page>=1)?$page-1:1;  

        $nextPage=($page>=$totalPage)?$totalPage:$page+1;  

        $prev = ($page == 1) ? "上一页" : "<a href='{$url}?r=go/list?page={$prevPage}'>上一页</a>"."<br>";  

        $next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?r=go/list?page={$nextPage}'>下一页</a>"."<br>";  

        $str = "总共{$totalPage}页/当前是第{$page}页";  //1
        $p="";  
        for($i = 1; $i <= $totalPage; $i ++) {  
            //当前页无连接  
            if ($page == $i) {  
                $p .= "[{$i}]";  
            } else {  
                $p .= "<a href='{$url}?page={$i}'>[{$i}]</a>";  
            }  
        }  
        //. $index .$sep. $prev.$sep . $p.$sep . $next.$sep . $last
        $pageStr=$str.$sep; //总页面和当前页面 
        $pagesaa=$index.$sep;
        var_dump($pagesaa);exit;
        return $pageStr;    //返回分页字符串  
    }
}
?>