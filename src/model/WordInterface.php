<?php

namespace Pherserk\Word\model;

interface WordInterface
{
    public function getWord() : string;

    public function getType() : string;
}
