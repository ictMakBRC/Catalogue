<?php

namespace App\Imports;

use App\Models\Tissue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class TissuesImport implements ToModel, WithStartRow, WithBatchInserts
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       // $batch = rand(1000,7878).time();
        $batch = request()->input('batch');
        return new Tissue([
            'project_acronym' => $row[0],
            'category' => $row[1],
            'specimen_type' => $row[2],
            'participant_id' => $row[3],
            'sample_id' => $row[4],
            'aliqout_type' => $row[5],
            'gender' => $row[6],
            'age' => $row[7],
            'BMI' => $row[8],
            'ethinicity' => $row[9],
            'collection_date' => $row[10],
            'donor_status' => $row[11],
            'stored_for' => $row[12],
            'user_id'=>auth()->user()->id,
            'batch_No'=>$batch,
        ]);
    }
    public function batchSize(): int
    {
        return 100;
    }

    // public function chunkSize(): int
    // {
    //     return 100;
    // }

}
