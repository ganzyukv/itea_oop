<?php
/**
 * Created by PhpStorm.
 * User: vladislav
 * Date: 2019-04-22
 * Time: 21:24
 */
include_once __DIR__ . '/SerializeInterface.php';

class Serializer implements SerializeInterface
{
    const FORMAT_JSON = 'json';
    const FORMAT_YAML = 'yaml';
    const FORMAT_XML = 'yaml';

    private $engine;
    private $data;

    public function __construct($data, $format = self::FORMAT_JSON)
    {
        $this->data = $data;
        switch ($format) {
            case self::FORMAT_YAML:
                $this->engine = new YamlSerialize($data);
                break;
            case self::FORMAT_XML:
                $this->engine = new JsonSerialize($data);
                break;
            case self::FORMAT_JSON:
            default:
            $this->engine = new JsonSerialize($data);
                break;
        }
    }

    public function serialize($data, $format)
    {
        // TODO: Implement serialize() method.
    }

    public function unSerialize($data, $format)
    {
        // TODO: Implement unSerialize() method.
    }
}