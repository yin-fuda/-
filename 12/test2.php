<?php
//(1) Goods{
interface Goods{
	//定义一个方法getGoodsInfo，输出购买的商品名称，数量，总价
	
	function getGoodsInfo();
}

class Product{
	public $pro_name;//名称
	public $pro_num;//购买数量
	
	function __construct($pro_name,$pro_num){
		$this->pro_name=$pro_name;
		$this->pro_num=$pro_num;
	}//定义构造方法，初始化属性值
}

//衣服类
class Clothes extends Product{
	public $price;
	
	function __construct($name,$num,$price){
		parent::__construct($name,$num);//调用父类的构造方法
		$this->price=$price;
	}
	
	//输出购买的商品名称，数量，总价
	function getGoodsInfo(){
		echo $this->pro_name."&nbsp;&nbsp;数量:".$this->pro_num."&nbsp;&nbsp;单价:￥".$this->price."&nbsp;&nbsp;总价:￥".$this->pro_num*$this->price;
		echo "<hr>";
	}
}

//创建  衣服对象，
$clothes = new Clothes('衬衣',2,198);
$clothes->getGoodsInfo();//调用方法，显示购买的衣服信息

//手机类
class Mobile extends Product{
	const price = 3999;//成员常量
	static $color;
	
	function __construct($name,$num){
		parent::__construct($name,$num);//调用父类的构造方法
	}
	
	function getGoodsInfo(){
		//输出购买的商品名称，数量，总价
		echo Mobile::$color.$this->pro_name."&nbsp;&nbsp;数量:".$this->pro_num."&nbsp;&nbsp;单价:￥".self::price."&nbsp;&nbsp;总价: ￥".$this->pro_num*self::price;
	}
}

//创建  衣服对象，调用方法，显示购买的衣服信息
$mobile = new Mobile('Hua Wei',2);
Mobile::$color="白色";
$mobile->getGoodsInfo();//调用方法，显示购买的手机信息
