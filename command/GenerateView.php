<?php

namespace app\member\command;

use think\console\Command;
use think\console\Input;
use think\console\input\Argument;
use think\console\Output;

class GenerateView extends Command
{

    private $_type;

    protected function configure()
    {
        $this->setName('make:view')
             ->addArgument('type', Argument::OPTIONAL, '1：单页。2：列表页。3：表单页')
             ->setDescription('生成视图文件源代码。 1：单页。2：列表页。3：表单页。什么都不输入，默认为1：单页')
             ->setHelp("php think make:view 1：单页。2：列表页。3：表单页。默认为1");
    }

    protected function getStub()
    {
        $type = $this->_type;
        $name = "page.stub";
        if(2 === $type) $name = "list.stub";
        if(3 === $type) $name = "form.stub";
        return __DIR__ . DIRECTORY_SEPARATOR . 'stubs' . DIRECTORY_SEPARATOR . "{$name}";
    }

    protected function execute(Input $input, Output $output)
    {
        $type = $input->getArgument('type');
        $type = !empty($type) ? (int)$type : 1;
        $this->_type = $type;
        $stub = file_get_contents($this->getStub());
        $output->writeln($stub);
    }

}
