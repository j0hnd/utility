<?php
namespace Riesenia\Utility\Kendo\Table\Column;

/**
 * Actions column
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Actions extends Base
{
    /**
     * Predefined class
     *
     * @var string
     */
    protected $_class = 'tableColumn tableActions';

    /**
     * Get options for grid column definition
     *
     * @return array
     */
    public function getColumnOptions()
    {
        $command = [];

        // add commands
        foreach ($this->_options['actions'] as $action) {
            $command[] = $action->command();
        }

        return ['title' => $this->_options['title'], 'headerAttributes' => ['class' => $this->_options['class']], 'command' => $command];
    }

    /**
     * Column defintion in a grid row template
     *
     * @return string
     */
    public function __toString()
    {
        return '<td class="' . $this->_options['class'] . '">' . implode(' ', $this->_options['actions']) . '</td>';
    }

    /**
     * Return rendered javascript
     *
     * @return string
     */
    public function script()
    {
        $script = '';

        // add column scripts
        foreach ($this->_options['actions'] as $action) {
            $script .= $action->script();
        }

        return $script;
    }
}