<?php
namespace Querier;

class Field {
    use Fields;
    use Arguments;

    private $name;

    /**
     * @param string $name Field name
     * @param array $arguments (optional) Associative array for filtering
     */
    public function __construct($name, $arguments = []) {
        $this->name = $name;
        $this->arguments = $arguments;
    }

    public function toString() {
        return $this->name
            . self::wrap('(', $this->argumentsToString(), ')')
            . $this->fieldsToString();
    }

    public function __toString() {
        return $this->toString();
    }
}
