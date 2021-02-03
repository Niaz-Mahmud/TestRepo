Userteams.php

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userteams extends Model
{
    protected $table = 'user_teams';
    protected $fillable = ['user_id', 'team_id',];    
}
