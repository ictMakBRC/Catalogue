<?php

namespace App\Models;

use App\Models\organ;
use App\Models\Tissue;
use App\Models\country;
use App\Models\Biospecimen;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class project extends Model
{
    use HasFactory;
    public function biospecimens()
        {
            return $this->hasMany(Biospecimen::class, 'ProjectAcronym', 'project_acronym')
            ->select('*', DB::raw('count(biospecimens.id) as count'))
            ->groupBy('specimen_type_id')->limit(6);
        }
        public function tissues()
        {
            return $this->hasMany(Tissue::class,'project_acronym', 'project_acronym')
            ->select('*','specimen_type', DB::raw('count(tissues.id) as count'))
            ->groupBy('specimen_type')->limit(6);
        }
        public function organs()
        {
            return $this->hasMany(organ::class,'ProjectAcronym', 'project_acronym')
            ->select('*','specimen_type_id', DB::raw('count(organs.id) as count'))
            ->groupBy('specimen_type_id')->limit(6);
        }
        public function countries()
        {
            return $this->hasMany(country::class,'project_id', 'id');
        }
        public function sites()
        {
            return $this->hasMany(collectionSite::class,'project_id', 'id');
        }

}
