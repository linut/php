<?php

class customException extends Exception{
    public function errorMessage(){
        //错误信息
        $errorMsg = '错误行号' . $this->getLine().'in'.$this->getFile().':<br>'.$this->getMessage().'</b> 不是一个合法的E-mail地址';
        return $errorMsg;
    }
}

$email = "sooooo@tetegs....com";

try{
    //利用过滤器检测邮箱
    if(filter_var($email,FILTER_VALIDATE_EMAIL)  === false){
        //如果不是合法的，抛出异常。
        throw  new customException($email);
    }
}
catch(customException $e){
    //展示错误信息
    echo $e->errorMessage();
}
?>