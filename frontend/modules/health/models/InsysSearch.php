<?php

namespace frontend\modules\health\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\health\models\Insys;

/**
 * InsysSearch represents the model behind the search form about `frontend\modules\health\models\Insys`.
 */
class InsysSearch extends Insys
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vstdate', 'Cid', 'Vn', 'Hn', 'Pt', 'Sex', 'Age_y', 'Pttype', 'Clinic', 'Drugallergy', 'Pdx', 'Height', 'Bw', 'Waist', 'Cc', 'Bp', 'Bpd', 'Bps', 'Drinking_type_id', 'Smoking_type_id', 'Hr', 'Pe', 'Pulse', 'Temperature', 'Rr', 'Fbs', 'Bmi', 'Tg', 'Hdl', 'Glucurine', 'Bun', 'Creatinine', 'Ua', 'Hba1c', 'Tc', 'Ldl', 'Ast', 'Alt', 'Cholesterol', 'Gfr_ckd', 'Hct_cbc', 'Wbc_count_cbc', 'Eo_cbc', 'Urine_proteine_ua', 'Urine_gluose_ua', 'Rbc_ua', 'Wbc_ua', 'Parasite', 'Occountblood', 'Uric', 'Tsh', 'Dx_doctor', 'Dname', 'Lab01', 'Lab02', 'Lab03', 'Lab04', 'Lab05', 'Lab06', 'Lab07'], 'safe'],
            [['ic_confirm', 'ic_insys', 'ic_report'], 'integer'],
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
        $query = Insys::find();

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
            'Vstdate' => $this->Vstdate,
            'ic_confirm' => $this->ic_confirm,
            'ic_insys' => $this->ic_insys,
            'ic_report' => $this->ic_report,
        ]);

        $query->andFilterWhere(['like', 'Cid', $this->Cid])
            ->andFilterWhere(['like', 'Vn', $this->Vn])
            ->andFilterWhere(['like', 'Hn', $this->Hn])
            ->andFilterWhere(['like', 'Pt', $this->Pt])
            ->andFilterWhere(['like', 'Sex', $this->Sex])
            ->andFilterWhere(['like', 'Age_y', $this->Age_y])
            ->andFilterWhere(['like', 'Pttype', $this->Pttype])
            ->andFilterWhere(['like', 'Clinic', $this->Clinic])
            ->andFilterWhere(['like', 'Drugallergy', $this->Drugallergy])
            ->andFilterWhere(['like', 'Pdx', $this->Pdx])
            ->andFilterWhere(['like', 'Height', $this->Height])
            ->andFilterWhere(['like', 'Bw', $this->Bw])
            ->andFilterWhere(['like', 'Waist', $this->Waist])
            ->andFilterWhere(['like', 'Cc', $this->Cc])
            ->andFilterWhere(['like', 'Bp', $this->Bp])
            ->andFilterWhere(['like', 'Bpd', $this->Bpd])
            ->andFilterWhere(['like', 'Bps', $this->Bps])
            ->andFilterWhere(['like', 'Drinking_type_id', $this->Drinking_type_id])
            ->andFilterWhere(['like', 'Smoking_type_id', $this->Smoking_type_id])
            ->andFilterWhere(['like', 'Hr', $this->Hr])
            ->andFilterWhere(['like', 'Pe', $this->Pe])
            ->andFilterWhere(['like', 'Pulse', $this->Pulse])
            ->andFilterWhere(['like', 'Temperature', $this->Temperature])
            ->andFilterWhere(['like', 'Rr', $this->Rr])
            ->andFilterWhere(['like', 'Fbs', $this->Fbs])
            ->andFilterWhere(['like', 'Bmi', $this->Bmi])
            ->andFilterWhere(['like', 'Tg', $this->Tg])
            ->andFilterWhere(['like', 'Hdl', $this->Hdl])
            ->andFilterWhere(['like', 'Glucurine', $this->Glucurine])
            ->andFilterWhere(['like', 'Bun', $this->Bun])
            ->andFilterWhere(['like', 'Creatinine', $this->Creatinine])
            ->andFilterWhere(['like', 'Ua', $this->Ua])
            ->andFilterWhere(['like', 'Hba1c', $this->Hba1c])
            ->andFilterWhere(['like', 'Tc', $this->Tc])
            ->andFilterWhere(['like', 'Ldl', $this->Ldl])
            ->andFilterWhere(['like', 'Ast', $this->Ast])
            ->andFilterWhere(['like', 'Alt', $this->Alt])
            ->andFilterWhere(['like', 'Cholesterol', $this->Cholesterol])
            ->andFilterWhere(['like', 'Gfr_ckd', $this->Gfr_ckd])
            ->andFilterWhere(['like', 'Hct_cbc', $this->Hct_cbc])
            ->andFilterWhere(['like', 'Wbc_count_cbc', $this->Wbc_count_cbc])
            ->andFilterWhere(['like', 'Eo_cbc', $this->Eo_cbc])
            ->andFilterWhere(['like', 'Urine_proteine_ua', $this->Urine_proteine_ua])
            ->andFilterWhere(['like', 'Urine_gluose_ua', $this->Urine_gluose_ua])
            ->andFilterWhere(['like', 'Rbc_ua', $this->Rbc_ua])
            ->andFilterWhere(['like', 'Wbc_ua', $this->Wbc_ua])
            ->andFilterWhere(['like', 'Parasite', $this->Parasite])
            ->andFilterWhere(['like', 'Occountblood', $this->Occountblood])
            ->andFilterWhere(['like', 'Uric', $this->Uric])
            ->andFilterWhere(['like', 'Tsh', $this->Tsh])
            ->andFilterWhere(['like', 'Dx_doctor', $this->Dx_doctor])
            ->andFilterWhere(['like', 'Dname', $this->Dname])
            ->andFilterWhere(['like', 'Lab01', $this->Lab01])
            ->andFilterWhere(['like', 'Lab02', $this->Lab02])
            ->andFilterWhere(['like', 'Lab03', $this->Lab03])
            ->andFilterWhere(['like', 'Lab04', $this->Lab04])
            ->andFilterWhere(['like', 'Lab05', $this->Lab05])
            ->andFilterWhere(['like', 'Lab06', $this->Lab06])
            ->andFilterWhere(['like', 'Lab07', $this->Lab07]);

        return $dataProvider;
    }
}
