<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$this->load->language('common/home');

		$data['text_hero_tag'] = $this->language->get('text_hero_tag');
		$data['text_hero_title_1'] = $this->language->get('text_hero_title_1');
		$data['text_hero_title_2'] = $this->language->get('text_hero_title_2');
		$data['text_hero_sub'] = $this->language->get('text_hero_sub');
		$data['text_hero_cta'] = $this->language->get('text_hero_cta');
		$data['text_promo1_eyebrow'] = $this->language->get('text_promo1_eyebrow');
		$data['text_promo1_title'] = $this->language->get('text_promo1_title');
		$data['text_promo1_cta'] = $this->language->get('text_promo1_cta');
		$data['text_promo2_eyebrow'] = $this->language->get('text_promo2_eyebrow');
		$data['text_promo2_title'] = $this->language->get('text_promo2_title');
		$data['text_promo2_cta'] = $this->language->get('text_promo2_cta');
		$data['text_perk1'] = $this->language->get('text_perk1');
		$data['text_perk2'] = $this->language->get('text_perk2');
		$data['text_perk3'] = $this->language->get('text_perk3');
		$data['text_perk4'] = $this->language->get('text_perk4');
		$data['text_shop_by_category'] = $this->language->get('text_shop_by_category');
		$data['text_all_items'] = $this->language->get('text_all_items');

		$data['home'] = $this->url->link('common/home');

		// Shop-by-category quick nav — pulls the real Top categories (same
		// ones shown in the header menu) and pairs each by name with an
		// icon. Add a name => icon entry below if you rename a category or
		// add a new one; unmatched categories fall back to a generic icon.
		$icon_map = array(
			'sports'       => 'fa-futbol-o',
			'brands'       => 'fa-certificate',
			'flip flop'    => 'fa-life-ring',
			'clothes'      => 'fa-shopping-bag',
			'backpack'     => 'fa-briefcase',
			'hats'         => 'fa-mortar-board',
			'accessories'  => 'fa-star',
			'high-end'     => 'fa-diamond',
			'streetwear'   => 'fa-bolt'
		);

		$this->load->model('catalog/category');

		$data['quick_categories'] = array();
		$data['quick_categories'][] = array(
			'name' => $this->language->get('text_all_items'),
			'href' => $data['home'],
			'icon' => 'fa-th-large',
			'all'  => true
		);

		foreach ($this->model_catalog_category->getCategories(0) as $category) {
			if ($category['top']) {
				$key = strtolower($category['name']);

				$data['quick_categories'][] = array(
					'name' => $category['name'],
					'href' => $this->url->link('product/category', 'path=' . $category['category_id']),
					'icon' => isset($icon_map[$key]) ? $icon_map[$key] : 'fa-tag',
					'all'  => false
				);
			}
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
