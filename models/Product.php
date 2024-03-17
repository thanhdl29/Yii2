<?php

namespace app\models;

use Codeception\Lib\Console\Message;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name_product
 * @property string $category_product
 * @property float $price
 * @property string $description
 * @property $image_url
 * @property UploadedFile $imageFile
 * 
 */


 
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_product', 'category_product', 'price', 'description', 'image_url'], 'required', 'message' => '{attribute} Không được để trống'],
            [['price'], 'number'],
            [['name_product', 'category_product', 'description'], 'string', 'max' => 500],
            [['image_url'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
          
            'name_product' => 'Tên sản phẩm',
            'category_product' => 'Loại',
            'price' => 'Giá',
            'description' => 'Mô tả',
            'image_url' => 'Ảnh sản phẩm',
        ];
    }
}
