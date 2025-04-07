<?php

namespace OpenFunctions\Tools\FileSearch\Models;

use OpenFunctions\Tools\FileSearch\Contracts\FilterInterface;
use OpenFunctions\Tools\FileSearch\Models\Ranking\RankingOptions;

class FileSearchParameter
{
    public array $vectorStoreIds = [];
    public ?int $maxNumResults = null;
    public ?FilterInterface $filter = null;
    public ?RankingOptions $rankingOptions = null;
}