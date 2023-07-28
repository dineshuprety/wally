<?php

namespace App\Classes;

use function Termwind\ask;

trait Wally
{
    protected $name;
    protected $des;

    public function khataName()
    {
        $this->name = $this->argument('name');
        if (!$this->argument('name')) {
            $this->name = ask(<<<HTML
            <span class="mt-1 ml-2 mr-1 bg-red px-1 text-black">
                Name of your khata:
            </span>
        HTML);
        }
        return $this->name;
    }

    public function khataDes()
    {
        $this->des = $this->argument('note');
        if (!$this->argument('des')) {
            $this->des = ask(<<<HTML
            <span class="mt-1 ml-2 mr-1 bg-red px-1 text-black">
                Add your description:
            </span>
        HTML);
        }
        return $this->des;
    }
}
