# SneakerKrew

An online sneaker and streetwear store built on **[OpenCart](https://www.opencart.com/) 3.0.5.1**, with a custom storefront theme, a bilingual (English / Vietnamese) interface, and Vietnamese dong (₫) pricing.

> **Status:** work in progress. Contributions and feedback are welcome.

## Table of contents

- [Features](#features)
- [Tech stack](#tech-stack)
- [Project structure](#project-structure)
- [Getting started](#getting-started)
- [Configuration](#configuration)
- [Customizations on top of stock OpenCart](#customizations-on-top-of-stock-opencart)
- [Sample data](#sample-data)
- [Roadmap / ideas](#roadmap--ideas)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Streetwear-styled storefront**: custom theme with a hero banner, promo cards, a perks strip (free delivery, size exchange, authenticity guarantee, installments) and a "Shop by category" quick-nav with icons.
- **Full product catalog**: sneakers, clothes, backpacks, hats and accessories organised into categories and brand pages (Nike, Adidas, New Balance, Puma, ASICS, Onitsuka Tiger, Supreme, Ralph Lauren).
- **Bilingual**: English (`en-gb`) and Vietnamese (`vi-vn`) language packs for the storefront.
- **VND currency** by default.
- **Standard OpenCart shop flow**: search, specials, product options (e.g. sizes), cart, checkout, customer accounts, coupons, reviews, and an admin dashboard.
- **Payments & shipping** enabled out of the box: Cash on Delivery and Flat Rate shipping (plus Free Checkout).

## Tech stack

| Layer | Details |
| --- | --- |
| Platform | OpenCart 3.0.5.1 (PHP, MVC-L architecture, Twig templates) |
| Database | MySQL / MariaDB (the included dump was exported from MariaDB 10.4) |
| Web server | Apache with `mod_rewrite` (developed on XAMPP) |
| Front end | Bootstrap 3, jQuery, Font Awesome 4, custom CSS (`custom-theme.css`), Google Fonts (Anton, Inter) |
| Local dev environment | XAMPP on Windows, PHP 8.2 (per the SQL dump header) |

## Project structure

```
SneakerKrew/
├── README.md
└── sneakershop/                 # OpenCart application root (web root)
    ├── admin/                   # Back-office (dashboard, catalog, orders, settings)
    ├── catalog/                 # Storefront
    │   ├── controller/          #   page logic (home, header, menu, category, ...)
    │   ├── language/            #   en-gb and vi-vn translations
    │   └── view/theme/default/  #   Twig templates, JS, and custom-theme.css
    ├── image/                   # Product, payment and placeholder images
    ├── system/                  # OpenCart framework, libraries and storage/ (vendor, cache, logs)
    ├── config.php               # Storefront configuration
    ├── index.php                # Storefront entry point
    ├── .htaccess.txt            # Apache rewrite rules (rename to .htaccess for SEO URLs)
    ├── php.ini                  # Recommended PHP settings
    ├── robots.txt
    └── sneakershop_db.sql       # Database dump (schema + sample catalog)
```

## Getting started

These steps assume a local **XAMPP** setup on Windows, which is what the project is currently configured for.

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL/MariaDB + PHP) with `mod_rewrite` enabled
- Git

### 1. Clone the repository

```bash
git clone https://github.com/Binbawp/SneakerKrew.git
```

### 2. Copy the app into your web root

Copy the `sneakershop` folder to `C:\xampp\htdocs\sneakershop`.

### 3. Create the storage directory

OpenCart keeps its cache, logs, sessions, uploads and Composer `vendor/` files in a separate storage folder. Copy the contents of `sneakershop/system/storage/` to:

```
C:\xampp\sneakershop_storage\
```

> The `vendor/` folder inside storage is required for the app to run.

### 4. Import the database

1. Start **Apache** and **MySQL** in the XAMPP control panel.
2. Open [phpMyAdmin](http://localhost/phpmyadmin) and create a database named `sneakershop_db` (collation `utf8mb4_general_ci`).
3. Import `sneakershop/sneakershop_db.sql` into it.

### 5. Check the configuration

Open `sneakershop/config.php` and `sneakershop/admin/config.php` and make sure the paths and database settings match your machine (see [Configuration](#configuration)).

### 6. (Optional) Enable SEO-friendly URLs

Rename `sneakershop/.htaccess.txt` to `.htaccess`, then enable **Use SEO URLs** in the admin under *System → Settings → Server*.

### 7. Run it

| | URL |
| --- | --- |
| Storefront | http://localhost/sneakershop/ |
| Admin panel | http://localhost/sneakershop/admin/ |

Log in to the admin with the account stored in the imported database. If you don't have the password, reset it in phpMyAdmin (or re-create the admin user) before using the project.

## Configuration

Both `config.php` files (storefront and `admin/`) define the following. Change them to match your environment:

| Constant | Default | Notes |
| --- | --- | --- |
| `HTTP_SERVER` / `HTTPS_SERVER` | `http://localhost/sneakershop/` | Base URL of the store (`.../admin/` in the admin config) |
| `DIR_APPLICATION`, `DIR_SYSTEM`, `DIR_IMAGE` | `C:/xampp/htdocs/sneakershop/...` | Absolute paths. **Must be updated on Linux/macOS or a different install path** |
| `DIR_STORAGE` | `C:/xampp/sneakershop_storage/` | Cache, logs, sessions, uploads, vendor |
| `DB_HOSTNAME` | `localhost` | |
| `DB_USERNAME` / `DB_PASSWORD` | XAMPP defaults | Use your own credentials in any non-local environment |
| `DB_DATABASE` | `sneakershop_db` | |
| `DB_PREFIX` | `oc_` | |

## Customizations on top of stock OpenCart

The project keeps OpenCart's default theme folder but layers a custom design on top of it:

- **Theme / styling**: `catalog/view/theme/default/stylesheet/custom-theme.css`, a streetwear design system namespaced with the `sk-` prefix.
- **Templates**: customized `common/` (header, footer, menu, home, language) and `product/` (category, product, search, special, manufacturer) Twig templates, plus the featured / bestseller / latest / special / category module templates.
- **Homepage**: `catalog/controller/common/home.php` builds the hero, promo cards, perks strip and the category quick-nav. To give a new category an icon, add a `name => icon` entry to `$icon_map` in that file.
- **Homepage copy**: edit `catalog/language/en-gb/common/home.php` (and the `vi-vn` equivalent) to change the hero text, promos and perks.
- **Other controllers**: `common/header`, `common/footer`, `common/menu`, `product/category` and `extension/module/category` (storefront), and `admin/controller/catalog/category.php` (admin).
- **Localization**: a full Vietnamese language pack in `catalog/language/vi-vn/`.
- **Promo images**: `catalog/view/theme/default/image/promo/`.

## Sample data

`sneakershop_db.sql` ships with demo data you can use to explore the shop:

- ~29 products (Nike Air Force 1, Nike SB Dunk, Air Jordan 1, Adidas Samba, ...)
- ~60 categories (sneakers by model, apparel, backpacks, hats, accessories, brands)
- 8 brands, 3 coupons, 3 banners, 2 languages (English, Vietnamese)

Product images live in `sneakershop/image/catalog/`.

## Roadmap / ideas

- [ ] Add a `.gitignore` (cache, logs, sessions, local `config.php`) and stop tracking `system/storage/cache`
- [ ] Add `config-dist.php` templates so each developer can keep local settings out of git
- [ ] Add real online payment methods (e.g. VNPay, MoMo) alongside Cash on Delivery
- [ ] Add screenshots to this README
- [ ] Complete the Vietnamese translation for the admin panel
- [ ] Add a Docker setup for one-command local development

## Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/my-change`
3. Commit your changes: `git commit -m "Describe your change"`
4. Push the branch: `git push origin feature/my-change`
5. Open a Pull Request

Please don't commit local credentials, cache files, or customer/order data.

## License

OpenCart is released under the [GNU General Public License v3](https://www.gnu.org/licenses/gpl-3.0.html), so derivative work such as this project is subject to the same license. Add a `LICENSE` file to the repo root to make this explicit.

Product images, logos and brand names (Nike, Adidas, etc.) belong to their respective owners and are used here for demonstration purposes only.

## Acknowledgements

- [OpenCart](https://www.opencart.com/) for the e-commerce platform
- [Bootstrap](https://getbootstrap.com/), [Font Awesome](https://fontawesome.com/), and [Google Fonts](https://fonts.google.com/)
