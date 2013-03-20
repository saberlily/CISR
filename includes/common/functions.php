<?php

function get_current_microtime() {
    return array_sum(explode(' ', microtime()));
}

function ob_start_callback($buffer) {
    // xử lý output của php tại đây!
    return $buffer;
}