<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    use HasFactory;
    public $timestap = false;
    protected $fillable = [
        'ChiTietCongViec',
        'NganhNghe',
        'Khuvuc',
        'YeuCau',
        'QuyenLoi',
        'ThoiGian',
        'MucLuong',
        'SoLuong',
        'ImageBaiDang',
        'TrangThaiBD'
    ];
    protected $primaryKey = 'IdBaiDang';
    protected $table = 'baidangtuyendung';
}
