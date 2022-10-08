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
            'ProjectAcronym'=> $row[1],
            'Category'=> $row[2],
            'Sample_Type'=> $row[3],
            'ParticipantID'=> $row[4],
            'SampleID'=> $row[5],
            'Quantity'=> $row[6],
            'Aliquot_Type'=> $row[7],
            'Gender'=> $row[8],
            'Age'=> $row[9],
            'BMI'=> $row[10],
            'Ethinicity'=> $row[11],
            'Collection_Date'=> $row[12],
            'Sample_status'=> $row[13],
            'Store_for'=> $row[14],
            'user_id' => auth()->user()->id,
            'batch_No' => $batch,
        ]);
    }

    public function batchSize(): int
    {
        return 100;
    }

  
}
