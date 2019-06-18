<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class akses extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_akses' => $this->id_access,
            'id_user' => $this->user_id,
            'tanggal_akses' => $this->date_access,
            'halaman' => $this->name_page,
            'halaman_induk' => $this->kategori,
            'nama' => $this->name,
            'provinsi' => $this->nama_provinsi,
            'kabupaten' =>$this->nama_kabupaten,
            'satda' => $this->name_satda,
            'skpd' => $this->name_skpd,
            'level'=> $this->level_id,
            'jabatan'=>$this->name_level
        ];
    }
}
