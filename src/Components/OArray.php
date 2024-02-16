<?php

class OArray
{
    private array $body;

    public function __construct(array $array) {
        $this->body = $array;
    }

    public function contains($anything) {
        $result = false;

        foreach ($this->body as $key) {
            if ($key == $anything) {
                $result = true;
            }
        }

        return $result;
    }

    public function toArray(): array
    {
        return $this->body;
    }

    public function foreach($function): void
    {
        foreach ($this->body as $key) {
            $function();
        }
    }
}