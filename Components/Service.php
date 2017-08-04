<?php


namespace Content\Components;


class Service
{
    public function getContent()
    {
        $response = new \StdClass();
        $response->message = "response from content";

        return $response;
    }
}