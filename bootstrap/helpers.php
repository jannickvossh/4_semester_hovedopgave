<?php

function formattedTimestamp($timestamp): string
{
    return date('d-m-y H:i', strtotime($timestamp));
}
