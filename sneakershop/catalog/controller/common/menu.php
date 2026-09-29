<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['home'] = $this->url->link('common/home');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				// Build "blocks" for the dropdown: any child that itself has
				// sub-categories (e.g. Brands -> Nike -> Air Jordan, Dunk) becomes
				// its own titled block; every other (flat) child is collected into
				// an untitled block, in the order the categories are sorted.
				$blocks     = array();
				$flat_items = array();

				foreach ($children as $child) {
					$grandchildren = $this->model_catalog_category->getCategories($child['category_id']);

					if ($grandchildren) {
						if ($flat_items) {
							$blocks[]   = array(
								'title' => '',
								'href'  => '',
								'items' => $flat_items
							);
							$flat_items = array();
						}

						$sub_items = array();

						foreach ($grandchildren as $grandchild) {
							$filter_data = array(
								'filter_category_id'  => $grandchild['category_id'],
								'filter_sub_category' => true
							);

							$sub_items[] = array(
								'name' => $grandchild['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
								'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $grandchild['category_id'])
							);
						}

						$blocks[] = array(
							'title' => $child['name'],
							'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
							'items' => $sub_items
						);
					} else {
						$filter_data = array(
							'filter_category_id'  => $child['category_id'],
							'filter_sub_category' => true
						);

						$flat_items[] = array(
							'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
							'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
						);
					}
				}

				if ($flat_items) {
					$blocks[] = array(
						'title' => '',
						'href'  => '',
						'items' => $flat_items
					);
				}

				// Each titled block gets its own column. A large untitled (flat)
				// block is split into two side-by-side columns so the dropdown
				// doesn't get too tall.
				$columns = array();

				foreach ($blocks as $block) {
					if (!$block['title'] && count($block['items']) > 6) {
						$chunks = array_chunk($block['items'], (int)ceil(count($block['items']) / 2));

						foreach ($chunks as $chunk) {
							$columns[] = array(
								array(
									'title' => '',
									'href'  => '',
									'items' => $chunk
								)
							);
						}
					} else {
						$columns[] = array($block);
					}
				}

				// Does at least one column have a titled block (e.g. a brand
				// with its own sub-categories)? If so the flyout renders as a
				// sidebar (titles) + panel (that title's items) layout. If
				// every column is an untitled flat block, it renders as a
				// simple grid of links instead.
				$has_titles = false;

				foreach ($columns as $column) {
					if (!empty($column[0]['title'])) {
						$has_titles = true;
						break;
					}
				}

				$data['categories'][] = array(
					'name'       => $category['name'],
					'columns'    => $columns,
					'has_titles' => $has_titles,
					'href'       => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		return $this->load->view('common/menu', $data);
	}
}