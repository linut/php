<?php
//同时过滤多个输入来验证表单，这个是后端。建议放在前端
$filters = array(
    "name" => array(
        "filter" => FILTER_SANITIZE_STRING
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 180
        )
    ),
    "email" => array(
        "filter" => FILTER_VALIDATE_EMAIL
    )

);

$result = filter_input_array(INPUT_GET,$filters);

if(!$result['age']){
    echo "年龄只能1到180之间 <br>";
}else if(!$result['email']){
    echo "Email格式不正确 <br>";
}else{
    echo "输入正确";
}

//使用Filter Callback，通过自定义函数进行过滤
function convertSpace($string){
    return str_replace("_",".",$string);
}

$string = "www_fenggege_com";
echo filter_var($string,FILTER_CALLBACK,array("options"=>"convertSpace"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP FILTER</title>
    <script type="text/javascript">
        function show(){
            range = document.getElementById("rangeid");
            num = document.getElementById("num");
            num.value = range.value;
        }
        
    </script>
</head>
<body>
    <!-- 在表单中通过限定input输入格式，来验证表单。通过前端。 -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
    名字： <input type="text" name="name" id="nameid" required="required"><br>
    年龄： <input type="number" name="age" id="ageid" min="1" max="100" placeholder="18"><br>
    Email: <input type="email" name="email" id="emailid" required="required"><br>
    范围：<input type="range" name="range" id="rangeid" min="0" max="100" step="1" value="18" onchange="show()"><br>
    数值显示：<input type="text" id="num"/> <br>
    <input type="submit" value="提交">
</form>
</body>
</html>

