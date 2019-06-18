<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class login extends Resource
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
            'id_akses' => $this->id_login,
            'id_user' => $this->user_id,
            'tanggal_login' => $this->date_login,
            'tanggal_logout' => $this->date_logout,
            'sesi'=>$this->id_session,
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
