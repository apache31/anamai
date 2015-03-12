<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Chospital;

/**
 * ChospitalSearch represents the model behind the search form about `frontend\models\Chospital`.
 */
class ChospitalSearch extends Chospital
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoscode', 'hosname', 'hostype', 'address', 'road', 'mu', 'subdistcode', 'distcode', 'provcode', 'postcode', 'hoscodenew', 'bed', 'level_service', 'bedhos'], 'safe'],
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
        $query = Chospital::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'hoscode', $this->hoscode])
            ->andFilterWhere(['like', 'hosname', $this->hosname])
            ->andFilterWhere(['like', 'hostype', $this->hostype])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'road', $this->road])
            ->andFilterWhere(['like', 'mu', $this->mu])
            ->andFilterWhere(['like', 'subdistcode', $this->subdistcode])
            ->andFilterWhere(['like', 'distcode', $this->distcode])
            ->andFilterWhere(['like', 'provcode', $this->provcode])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'hoscodenew', $this->hoscodenew])
            ->andFilterWhere(['like', 'bed', $this->bed])
            ->andFilterWhere(['like', 'level_service', $this->level_service])
            ->andFilterWhere(['like', 'bedhos', $this->bedhos]);

        return $dataProvider;
    }
}
