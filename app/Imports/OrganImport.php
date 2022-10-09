<?php

namespace App\Imports;

use App\Models\organ;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;

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
            'Category' => $row[2],
            'specimen_type_id' => $row[3],
            'ParticipantID' => $row[4],
            'SampleID' => $row[5],
            'Quantity' => $row[6],
            'Aliqout' => $row[7],
            'Gender' => $row[8],
            'Age' => $row[9],
            'BMI' => $row[10],
            'Ethinicity' => $row[11],
            'CollectionDate' => $row[12],
            'Donor_Sample_Status' => $row[13],
            'Stored_for' => $row[14],
            'user_id' => auth()->user()->id,
            'batch_No' => $batch,
        ]);
    }

    public function batchSize(): int
    {
        return 100;
    }
}
