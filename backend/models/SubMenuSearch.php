<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Submenus;

/**
 * SubMenuSearch represents the model behind the search form about `backend\models\Submenus`.
 */
class SubMenuSearch extends Submenus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['submenu_id', 'menu_id'], 'integer'],
            [['submenu_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Submenus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'submenu_id' => $this->submenu_id,
            'menu_id' => $this->menu_id,
            // 'visible_or_invisible' => $this->visible_or_invisible,
        ]);

        // // $query->andFilterWhere(['like', 'submenu_name', $this->submenu_name])
        //     ->andFilterWhere(['like', 'picture_path', $this->picture_path])
        //     ->andFilterWhere(['like', 'text_field', $this->text_field]);

         $query->andFilterWhere(['like', 'submenu_name', $this->submenu_name]);
        //     ->andFilterWhere(['like', 'picture_path', $this->picture_path])
        //     ->andFilterWhere(['like', 'text_field', $this->text_field]);

        return $dataProvider;
    }
}
