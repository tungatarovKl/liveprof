<?php

namespace TungatarovKl\LiveProfiler;

class DataPacker implements DataPackerInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function pack(array $data)
    {
        return json_encode($data);
    }

    /**
     * @param string $data
     * @return array
     */
    public function unpack($data)
    {
        return json_decode($data, true);
    }
}
