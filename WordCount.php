<?php

Class WordCount
{
    public function countWord($sentence)
    {
        return count(explode(' ', $sentence));
    }

}