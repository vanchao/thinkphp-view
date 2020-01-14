<h1>使用说明</h1>

这是一个在Thinkphp5.0.X系列版本测试过的视图文件生成工具。
<br>
将代码克隆下来，或者以zip包形式下载下来(记得解压缩)，把 common文件夹放到application下，然后在application文件夹下 找到command.php，在配置数组里添加如下代码： 'app\common\command\GenerateView'。
<br>
来到项目根目录，输入php think list，如果能看到如下字样： make:view  生成视图文件源代码。 1：单页。2：列表页。3：表单页。什么都不输入，默认为1：单页 恭喜你，安装成功。
<br>
使用方法：php think make:view 【数字选项1、2、3】，看到命令行有html源码出现，你就可以复制它到想用的页面了。

