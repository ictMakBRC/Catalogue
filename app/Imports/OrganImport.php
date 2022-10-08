<?php

namespace App\Imports;

use App\Models\organ;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToCollection;

class OrganImport implements ToModel, WithStartRow, WithBatchInserts
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
     * @param  array  $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // $batch = rand(1000,7878).time();
        $batch = request()->input('batch');

        return new organ([
            'project_id' => $row[0],
            'ProjectAcronym' => $row[1],
            'PTID' => $row[2],
            'SampleID' => $row[3],
            'AliquotID' => $row[4],
            'specimen_type_id' => $row[5],
            'Gender' => $row[6],
            'Age' => $row[7],
            'CaseControl' => $row[8],
            'VisitName' => $row[9],
            'DateCollected' => $row[10],
            'SPECIMEN_SOURCE' => $row[11],
            'SOURCE_ORGANISM' => $row[12],
            'PURITY' => $row[13],
            'CONCENTRATION' => $row[14],
            'user_id' => auth()->user()->id,
            'batch_No' => $batch,
        ]);
    }

    public function batchSize(): int
    {
        return 100;
    }

  
}
