<?php


function slugify($name): array|string
{
    return str_replace(" ", "_", strtolower($name));
}
