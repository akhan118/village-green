<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pages;

/**
 * PagesSearch represents the model behind the search form about `app\models\pages`.
 */
class PagesSearch extends pages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id', 'menu_id', 'submenu_id'], 'integer'],
            [['page_html'], 'safe'],
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
        $query = pages::find();

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
            'page_id' => $this->page_id,
            'menu_id' => $this->menu_id,
            'submenu_id' => $this->submenu_id,
        ]);

        $query->andFilterWhere(['like', 'page_html', $this->page_html]);

        return $dataProvider;
    }
}
