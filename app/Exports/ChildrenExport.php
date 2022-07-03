<?php

namespace App\Exports;

use App\Models\Child;
use App\Models\Contest;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChildrenExport implements FromQuery, WithHeadings
{
    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    public  function headings(): array
    {
        return [
            'reg_number_copy',
            'name',
            'parent_name',
            'address',
            'gender',
            'age',
            'email',
            'phone',
            'stage1_votes',
            'stage2_votes',
            'stage3_votes',
            'stage1_extra_votes'
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        $contest = Contest::where('uuid', $this->uuid)->first();
        return Child::query()->where('contest_id', $contest->id)->select('reg_number_copy', 'name', 'parent_name', 'address', 'gender', 'age', 'email', 'phone', 'stage1_votes', 'stage2_votes', 'stage3_votes', 'stage1_extra_votes');
    }
}
