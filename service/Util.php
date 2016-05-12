<?php

function horarioSort(array $data){
    usort($data, function ($elemento1, $elemento2) {
        if ($elemento1->horaIncial === $elemento2->horaIncial) {
            return $elemento1->diaSemana > $elemento2->diaSemana ? 1 : -1;
        }
        return $elemento1->horaIncial > $elemento2->horaIncial ? 1 : -1;
    });

    return $data;
}