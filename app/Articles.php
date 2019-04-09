<?php

namespace App;

use App\Doctor;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @var string
     */
    public $primaryKey = 'id';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @param $id
     * @return array
     */
    public function writer() {
        $adminId = $this->getAttributeValue('admin_id');
        $doctorId = $this->getAttributeValue('doctor_id');

        $writer = ['role', 'data'];

        if($adminId != null) {
            $writer['role'] = "Admin";
            $writer['data'] = Admin::find($adminId);
        } elseif($doctorId != null) {
            $writer['role'] = "Dokter";
            $writer['data'] = Doctor::find($doctorId);
        }

        return $writer;
    }

    /**
     * @param $str
     * @return string
     */
    public function cutStr($str)
    {
        if (strlen($str) > 200){
            return substr($str,0,200) . "...";
        }
        return $str;
    }

    /**
     * @param $str
     * @return string
     */
    public function trimStr($str)
    {
        if(strlen($str) > 20) {
            return substr($str, 0, 20) . "...";
        }
        return $str;
    }

    /**
     * @param $str
     * @return string
     */
    public function getCat($str)
    {
        switch ($str) {
            case "penyakit":    return "Penyakit";      break;
            case "obat":        return "Obat - obatan"; break;
            case "hidup-sehat": return "Hidup Sehat";   break;
            case "keluarga":    return "Keluarga";      break;
            case "kesehatan":   return "Kesehatan";     break;
        }
    }
}
