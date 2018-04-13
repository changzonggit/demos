<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $goods;
    public $goods_number;
    public $goods_type;
    public $good_brand;
    public $goods_shelves;
    public $goods_sell;
    public $goods_quality;
    public $goods_New;
    public $goods_inventory;
    public $goods_myshop;
    public $goods_market;
    public $goods_img;

    public function rules()
    {
        return [
            [['goods',
                'goods_number',
                    'goods_type',
                        'good_brand',
                            'goods_shelves',
                                'goods_sell',
                                    'goods_quality',
                                        'goods_New',
                                            'goods_inventory',
                                                'goods_myshop',
                                                    'goods_market',
                                                        'goods_img'], 'required'],];
        return array(  
            array('image', 'file', 'types'=>'jpg, gif, png')  
        ); 
    }

    public function attributeLabels()
    {
        return [
            'goods' => '商品名称',
            'goods_number' => '商品编号',
            'goods_type' => '商品分类',
            'good_brand' => '商品品牌',
            'goods_shelves' => '商品上架',
            'goods_sell' => '商品热销',
            'goods_quality' => '商品精品',
            'goods_New' => '商品新货',
            'goods_inventory' => '库存',
            'goods_myshop' => '本店售价',
            'goods_market' => '市场售价',
            'goods_img' => '上传商品图片',
        ];
    }
} 