<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobtype extends Model {


	protected $table = "job_types";

    protected $primaryKey = "id";

    protected $fillable = ["action","name","description","from_table","to_table"];

    public $timestamps = false;

}
