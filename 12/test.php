<?php
class Admin{
	var $account;
	var $password;
	var $email;
	var $mobile;
	function setAccount($account){
		$this->account=$account;
	}
	function setPassword($password){
		$this->password=$password;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setMobile($mobile){
		$this->mobile=$mobile;
	}
	function getAccount(){
		echo $this->account;
	}
	function getPassword(){
		echo $this->password;
	}
	function getEmail(){
		echo $this->email;
	}
	function getMobile(){
		echo $this->mobile;
	}
}
$djc = new Admin();
$djc->setAccount("zhangsan");
$djc->setPassword('123456');
$djc->setEmail('zhang@qq.com');
$djc->setMobile('13112345678');
echo $djc->getAccount();
echo "<br>";
echo $djc->getPassword();
echo '<br>';
echo $djc->getEmail();
echo '<br>';
echo $djc->getMobile();
echo '<br>';