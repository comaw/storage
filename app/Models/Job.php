<?php
/**
 * Created by PhpStorm.
 * User: comaw
 * Date: 21.02.2019
 * Time: 10:42
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Job
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @mixin \Eloquent
 */
class Job extends Model
{
    const STATUS_NEW         = 1;
    const STATUS_IN_PROGRESS = 2;
    const STATUS_FINISH      = 3;
    const STATUS_ERROR       = 4;


    /** @var array $fillable */
    protected $fillable = [
        'name', 'url', 'status'
    ];

    /**
     * @return array
     */
    public static function listOfStatus(): array
    {
        return [
            self::STATUS_NEW         => 'New',
            self::STATUS_IN_PROGRESS => 'In progress',
            self::STATUS_FINISH      => 'Finished',
            self::STATUS_ERROR       => 'Error',
        ];
    }

    /**
     * @param $value
     *
     * @return string
     */
    public function getStatusAttribute($value): string
    {
        return static::listOfStatus()[$value] ?? 'N/A';
    }
}
