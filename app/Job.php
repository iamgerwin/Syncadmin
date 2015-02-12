<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {
	protected $table = 'jobs';
    protected $fillable = ['job_type_id','status_id','content','created_at','updated_at'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
