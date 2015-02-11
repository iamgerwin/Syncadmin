<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {


	protected $table = "tables";

    protected $primaryKey = "id";

    protected $fillable = ["name","table_id","machine_id"];

    public $timestamps = false;

}
