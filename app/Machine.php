<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model {

	protected $table = "machines";

    protected $primaryKey = "id";

    protected $fillable = ["name","ip","active"];

    public $timestamps = false;

}
