<?php
namespace spec\Riesenia\Utility\Kendo;

use PhpSpec\ObjectBehavior;

class ChartSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('id');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Riesenia\Utility\Kendo\Chart');
    }

    public function it_creates_div()
    {
        $this->html()->shouldReturn('<div id="id"></div>');
    }

    public function it_can_add_transport_directly()
    {
        $this->addTransport('read', ['url' => 'URL'])->shouldReturn($this);
        $this->dataSource->getTransport()->shouldReturn(['read' => ['url' => 'URL']]);
    }
}
