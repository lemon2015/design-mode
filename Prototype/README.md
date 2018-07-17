# 原型方法

>注意：克隆(clone)可以使用构造函数生成的默认赋值，但是不会启动构造函数中的动作。

例如：

```
<?php
class A
{
    public $cc;
	public function __construct()
	{
		echo '123'.PHP_EOL;
		$this->cc = 666;
		$this->b();
	}
	function b(){
	     echo '456'.PHP_EOL;
	}
	function __clone(){ 
	    echo ' clone done'.PHP_EOL;
	}
}

$a = new A;
$b = clone $a;
echo $b->cc.PHP_EOL;
$b->b();
```
运行结果：
```
123
456
clone done
666
456
```

代码示例：果蝇基因变异研究