<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trangthai".
 *
 * @property integer $id
 * @property integer $value_max
 * @property integer $value_min
 * @property string $ten
 * @property string $type
 * @property string $thuoc_tinh
 */
class Trangthai extends \yii\db\ActiveRecord
{
    const TYPE_DIENTICH_DAT ='dientichdat';
    const TYPE_GIA_DAT ='giadat';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trangthai';
    }
    public function getFeild() {
        $arrs = explode(',', $this->thuoc_tinh);
        if (count($arrs) > 1) {
            return $arrs[0];
        }
        return '';
    }
    public function getValue() {
        $arrs = explode(',', $this->thuoc_tinh);
        if (count($arrs) > 1) {
            return $arrs[1];
        }
        return $this->thuoc_tinh;
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ten', 'mo_ta', 'type', 'thuoc_tinh'], 'required'],
            [['mo_ta'], 'string'],
            [['ten'], 'string', 'max' => 255],
            [['type', 'thuoc_tinh'], 'string', 'max' => 22]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Ten',
            'mo_ta' => 'Mo Ta',
            'type' => 'Type',
            'thuoc_tinh' => 'Thuoc Tinh',
        ];
    }
}
