<?php
$arDates = [
    '1 квартал 2014',
    '1 квартал 2020 г.',
    '3 квартал 2017 г.',
    '4 квартал 2020 г.'
];

usort($arDates, function ($a, $b) {

    $firstDate = makeDateFromString($a);
    $secondDateArr = makeDateFromString($b);

    if ($firstDate == $secondDateArr) {
        return 0;
    }

    return ($firstDate < $secondDateArr) ? -1 : 1;
});

//var_dump($arDates);

function makeDateFromString(string $date)
{
    $arMonths = [
        1 => 'March',
        2 => 'June',
        3 => 'September',
        4 => 'December'
    ];

    $dateArrFromString = explode(' ', $date);

    if (empty($arMonths[$dateArrFromString[0]])) {
        throw new \Exception('Bad date');
    }

    return (new \DateTime($arMonths[$dateArrFromString[0]] . '-' . $dateArrFromString[2]));
}