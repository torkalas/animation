<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ThemeMenu;

/**
 * ThemeSearch represents the model behind the search form about `common\models\Theme`.
 */
class ThemeMenuSearch extends ThemeMenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'active', 'font_size_menu', 'font_size_brand', 'border_radius_key_menu'], 'integer'],
            [['name', 'background_color_menu', 'background_color_gradient_menu_position', 'background_color_gradient_menu_1', 'background_color_gradient_menu_2', 'background_image_menu_url', 'opacity_background_image_menu', 'border_width_menu', 'border_radius_menu', 'border_color_menu', 'font_color_brand', 'brand_url', 'font_color_brand_focus', 'font_color_brand_hover', 'font_color_key_menu', 'background_color_key_menu', 'background_color_gradient_key_menu_position', 'background_color_gradient_key_menu_1', 'background_color_gradient_key_menu_2', 'font_color_key_menu_hover', 'background_color_key_menu_hover', 'background_color_gradient_key_menu_position_hover', 'background_color_gradient_key_menu_1_hover', 'background_color_gradient_key_menu_2_hover', 'font_color_key_menu_focus', 'background_color_key_menu_focus', 'background_color_gradient_key_menu_position_focus', 'background_color_gradient_key_menu_1_focus', 'background_color_gradient_key_menu_2_focus', 'font_color_key_menu_active', 'background_color_key_menu_active', 'background_color_gradient_key_menu_position_active', 'background_color_gradient_key_menu_1_active', 'background_color_gradient_key_menu_2_active', 'border_color_key_toggle_menu', 'border_width_key_toggle_menu', 'background_color_key_toggle_menu_hover', 'background_color_gradient_key_toggle_menu_position_hover', 'background_color_gradient_key_toggle_menu_1_hover', 'background_color_gradient_key_toggle_menu_2_hover', 'background_color_key_toggle_menu_focus', 'background_color_gradient_key_toggle_menu_position_focus', 'background_color_gradient_key_toggle_menu_1_focus', 'background_color_gradient_key_toggle_menu_2_focus', 'background_color_icon_bar_key_toggle_menu', 'background_color_icon_bar_key_toggle_menu_hover', 'background_color_icon_bar_key_toggle_menu_focus'], 'safe'],
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
        $query = ThemeMenu::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'active' => $this->active,
            'font_size_menu' => $this->font_size_menu,
            'font_size_brand' => $this->font_size_brand,
            'border_radius_key_menu' => $this->border_radius_key_menu,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'background_color_menu', $this->background_color_menu])
            ->andFilterWhere(['like', 'background_color_gradient_menu_position', $this->background_color_gradient_menu_position])
            ->andFilterWhere(['like', 'background_color_gradient_menu_1', $this->background_color_gradient_menu_1])
            ->andFilterWhere(['like', 'background_color_gradient_menu_2', $this->background_color_gradient_menu_2])
            ->andFilterWhere(['like', 'background_image_menu_url', $this->background_image_menu_url])
            ->andFilterWhere(['like', 'opacity_background_image_menu', $this->opacity_background_image_menu])
            ->andFilterWhere(['like', 'border_width_menu', $this->border_width_menu])
            ->andFilterWhere(['like', 'border_radius_menu', $this->border_radius_menu])
            ->andFilterWhere(['like', 'border_color_menu', $this->border_color_menu])
            ->andFilterWhere(['like', 'font_color_brand', $this->font_color_brand])
            ->andFilterWhere(['like', 'brand_url', $this->brand_url])
            ->andFilterWhere(['like', 'font_color_brand_focus', $this->font_color_brand_focus])
            ->andFilterWhere(['like', 'font_color_brand_hover', $this->font_color_brand_hover])
            ->andFilterWhere(['like', 'font_color_key_menu', $this->font_color_key_menu])
            ->andFilterWhere(['like', 'background_color_key_menu', $this->background_color_key_menu])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_position', $this->background_color_gradient_key_menu_position])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_1', $this->background_color_gradient_key_menu_1])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_2', $this->background_color_gradient_key_menu_2])
            ->andFilterWhere(['like', 'font_color_key_menu_hover', $this->font_color_key_menu_hover])
            ->andFilterWhere(['like', 'background_color_key_menu_hover', $this->background_color_key_menu_hover])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_position_hover', $this->background_color_gradient_key_menu_position_hover])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_1_hover', $this->background_color_gradient_key_menu_1_hover])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_2_hover', $this->background_color_gradient_key_menu_2_hover])
            ->andFilterWhere(['like', 'font_color_key_menu_focus', $this->font_color_key_menu_focus])
            ->andFilterWhere(['like', 'background_color_key_menu_focus', $this->background_color_key_menu_focus])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_position_focus', $this->background_color_gradient_key_menu_position_focus])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_1_focus', $this->background_color_gradient_key_menu_1_focus])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_2_focus', $this->background_color_gradient_key_menu_2_focus])
            ->andFilterWhere(['like', 'font_color_key_menu_active', $this->font_color_key_menu_active])
            ->andFilterWhere(['like', 'background_color_key_menu_active', $this->background_color_key_menu_active])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_position_active', $this->background_color_gradient_key_menu_position_active])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_1_active', $this->background_color_gradient_key_menu_1_active])
            ->andFilterWhere(['like', 'background_color_gradient_key_menu_2_active', $this->background_color_gradient_key_menu_2_active])
            ->andFilterWhere(['like', 'border_color_key_toggle_menu', $this->border_color_key_toggle_menu])
            ->andFilterWhere(['like', 'border_width_key_toggle_menu', $this->border_width_key_toggle_menu])
            ->andFilterWhere(['like', 'background_color_key_toggle_menu_hover', $this->background_color_key_toggle_menu_hover])
            ->andFilterWhere(['like', 'background_color_gradient_key_toggle_menu_position_hover', $this->background_color_gradient_key_toggle_menu_position_hover])
            ->andFilterWhere(['like', 'background_color_gradient_key_toggle_menu_1_hover', $this->background_color_gradient_key_toggle_menu_1_hover])
            ->andFilterWhere(['like', 'background_color_gradient_key_toggle_menu_2_hover', $this->background_color_gradient_key_toggle_menu_2_hover])
            ->andFilterWhere(['like', 'background_color_key_toggle_menu_focus', $this->background_color_key_toggle_menu_focus])
            ->andFilterWhere(['like', 'background_color_gradient_key_toggle_menu_position_focus', $this->background_color_gradient_key_toggle_menu_position_focus])
            ->andFilterWhere(['like', 'background_color_gradient_key_toggle_menu_1_focus', $this->background_color_gradient_key_toggle_menu_1_focus])
            ->andFilterWhere(['like', 'background_color_gradient_key_toggle_menu_2_focus', $this->background_color_gradient_key_toggle_menu_2_focus])
            ->andFilterWhere(['like', 'background_color_icon_bar_key_toggle_menu', $this->background_color_icon_bar_key_toggle_menu])
            ->andFilterWhere(['like', 'background_color_icon_bar_key_toggle_menu_hover', $this->background_color_icon_bar_key_toggle_menu_hover])
            ->andFilterWhere(['like', 'background_color_icon_bar_key_toggle_menu_focus', $this->background_color_icon_bar_key_toggle_menu_focus]);

        return $dataProvider;
    }
}
