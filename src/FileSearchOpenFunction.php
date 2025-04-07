<?php

namespace OpenFunctions\Tools\FileSearch;

use OpenFunctions\Core\Contracts\AbstractOpenFunction;
use OpenFunctions\Tools\FileSearch\Models\FileSearchParameter;

class FileSearchOpenFunction extends AbstractOpenFunction
{
    private FileSearchParameter $parameter;

    public function __construct(FileSearchParameter $parameter)
    {
        $this->parameter = $parameter;
    }

    public function generateFunctionDefinitions(): array
    {
        $result =  [
            'type' => 'file_search',
            'vector_store_ids' => $this->parameter->vectorStoreIds
        ];

        if ($this->parameter->maxNumResults) {
            $result['max_num_results'] = $this->parameter->maxNumResults;
        }

        if ($this->parameter->filter) {
            $result['filters'] = $this->parameter->filter->toArray();
        }

        if ($this->parameter->rankingOptions) {
            $result['ranking_options'] = $this->parameter->rankingOptions->toArray();
        }

        return [$result];
    }
}