<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    const GENDER_MALE   = 1;
    const GENDER_FEMALE = 2;
    const GENDER_OTHERS = 3;

    /**
     * @var string
     */
    protected $table = 'employees';

    /**
     * @var array
     */
    protected $fillable = ['name', 'document', 'birthday', 'phone', 'gender'];

    /**
     * @var array
     */
    public static function list_genders($value = null) {

        $values = [
            self::GENDER_MALE =>   'Masculino',
            self::GENDER_FEMALE => 'Feminino',
            self::GENDER_OTHERS => 'Outros'
        ];

        return $value !== null ? $values[$value] : $values;
    }

    /**
     * @return string
     */
    public function getGenderAsTextAttribute() {
        return (
            match ($this->gender) {
                self::GENDER_MALE =>   'Masculino',
                self::GENDER_FEMALE => 'Feminino',
                self::GENDER_OTHERS => 'Outros'
            }
        );
    }

}
