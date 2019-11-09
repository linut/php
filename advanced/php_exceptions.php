<?php
class customException extends Exception
{
    public function errorMessage()
    {
        // 错误信息
        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
    }
}
 
$email = "someone@example.com";
 
try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
        throw new customException($email);
    }

    if(strpos($email,"example") !== false){
        throw new Exception("$email 是 example 邮箱");
    }
}

catch(customException $e){
    echo $e->errorMessage();
}
catch(Exception $e){
    echo $e->getMessage();
}


function myException($exception){
    echo "<b>Exception:</b> ",$exception->getMessage();
}
set_exception_handler('myException');
throw new Exception('Uncaught Exception occurred');
?>