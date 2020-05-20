<?php

function a(): int
{
    try {
        echo "Codigo";
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }
}

?>